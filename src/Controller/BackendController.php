<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class BackendController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('{_locale}/estadisticas', name: 'vistaEstadisticas')]
    public function vistaEstadisticas()
    {

        return $this->render('backend/estadisticas.html.twig');
    }

    #[Route('{_locale}/login', name: 'app_login')]
    public function index(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
       // get the login error if there is one
       $error = $authenticationUtils->getLastAuthenticationError();
       // last username entered by the user
       $lastUsername = $authenticationUtils->getLastUsername(); 

       $session = $request->getSession();
       //dump($session);
       $usuario = $session->getId();

       foreach (getallheaders() as $nombre => $valor) {
        $navegador[$nombre] = $valor;
       }

       //$usuario = $request->request->get('_username');
       $abrirFichero = fopen(dirname(__DIR__, 2) . '/data/logs/login-users-monitorizacion.txt', "a");
       $log = date("F j, Y, g:i a") . "," . $navegador["Accept-Language"] . "," . $navegador["User-Agent"] . "\n";
       $escribirFichero = fwrite($abrirFichero, $log);
       $cerrarFichero = fclose($abrirFichero);

// FALTA CARGAR LA PLANTILLA PERFILUSUARIO CON ROLE-USER Y PERFILADMINISTRADOR CON ROLE-ADMIN

      // if(){

      // } 
     //  elseif() {

     //  }

       return $this->render('backend/login.html.twig', [
        'controller_name' => 'LoginController',
        'last_username' => $lastUsername,
        'error'         => $error,
    ]);
    }

    #[Route('{_locale}/logout', name: 'app_logout')]
    public function logout(): Response
    {
        $session = $request->getSession();
        $session->clear();
    }

    #[Route('{_locale}/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        return $this->render('backend/registrarse.html.twig');
    }

    #[Route('{_locale}/registrando', name: 'app_registrando')]
    public function registrando(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {

    $email = $request->request->get('emailform');
    $password = $request->request->get('passwordform');
    $nacionalidad = $request->request->get('nacionalidadform');
    $moto = $request->request->get('motoform');
    
    $abrirFichero = fopen(dirname(__DIR__, 2) . '/data/logs/registro-users-monitorizacion.txt', "a");
    $log = date("F j, Y, g:i a") . "," . $email . "," .  $nacionalidad . "\n";
    $escribirFichero = fwrite($abrirFichero, $log);
    $cerrarFichero = fclose($abrirFichero);

    $user = new User();
    $user->setEmail($email);
    $user->setNacionalidad($nacionalidad);
    $user->setMoto($moto);
    $user->setPassword($userPasswordHasher->hashPassword($user,$password));

    $entityManager->persist($user);
    $entityManager->flush();

    $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
       (new TemplatedEmail())
       ->from(new Address('verificaremailproyectosymfony@gmail.com', 'Proyecto Symfony MotoCampeonas'))
       ->to($email)
       ->subject('Please Confirm your Email')
       ->htmlTemplate('backend/confirmation_email.html.twig')
    );

// FALTA AÑADIR FILTRADO BACKEND

//    if ($form->isSubmitted() && $form->isValid()) {
//        // encode the plain password
//        $user->setPassword(
//            $userPasswordHasher->hashPassword(
//                $user,
//                $password
//            )
//        );
//
//        $entityManager->persist($user);
//        $entityManager->flush();
//
//        // generate a signed url and email it to the user
//        $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
//            (new TemplatedEmail())
//                ->from(new Address('verificaremailproyectosymfony@gmail.com', 'Proyecto Symfony MotoCampeonas'))
//                ->to($user->getEmail())
//                ->subject('Please Confirm your Email')
//                ->htmlTemplate('backend/confirmation_email.html.twig')
//        );
//        // do anything else you need here, like send an email
//
//        return $this->redirectToRoute('vistaBienvenida');
//    }

    return $this->redirectToRoute('app_login');
     }

     #[Route('{_locale}/verify/email', name: 'app_verify_email')]
     public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
     {
         $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
     
         // validate email confirmation link, sets User::isVerified=true and persists
         try {
             $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
         } catch (VerifyEmailExceptionInterface $exception) {
             $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));
     
             return $this->redirectToRoute('app_register');
         }
     
         // @TODO Change the redirect on success and handle or remove the flash message in your templates
         $this->addFlash('success', 'Your email address has been verified.');
     
         return $this->redirectToRoute('app_login');
     }
}