<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Rankingvelocidad;
use App\Repository\RankingvelocidadRepository;
use App\Entity\Googlescriptrankingvelocidad;
use App\Repository\GooglescriptrankingvelocidadRepository;
use App\Entity\Rankingmotocross;
use App\Repository\RankingmotocrossRepository;
use App\Entity\Googlescriptrankingmotocross;
use App\Repository\GooglescriptrankingmotocrossRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;

class FrontendController extends AbstractController
{

    #[Route('/', name: 'inicio')]
    public function inicio()
    {
        return $this->redirectToRoute('vistaBienvenida');
    }

    #[Route('/{_locale}', name: 'vistaBienvenida')]
    public function bienvenida(Request $request)
    {
        return $this->render('frontend/bienvenida.html.twig');
    }

    #[Route('/es', name: 'vistaBienvenidaES')]
    public function bienvenidaES(Request $request)
    {
        return $this->render('frontend/bienvenida.html.twig');
    }

    #[Route('/en', name: 'vistaBienvenidaEN')]
    public function bienvenidaEN(Request $request)
    {
        return $this->render('frontend/bienvenida.html.twig');
    }

    #[Route('/{_locale}/ranking_velocidad', name: 'vistaRankingVelocidad')]
    public function vistaRankingVelocidad(EntityManagerInterface $em)
    {
        $datosTablaDB = $em->getRepository(Rankingvelocidad::class)->findAll();
        $datosScriptDB = $em->getRepository(Googlescriptrankingvelocidad::class)->findAll();        
        return $this->render('frontend/rankingVelocidad.html.twig',[
            'datosTabla' => $datosTablaDB,
            'datosScipt' => $datosScriptDB
        ]);
    }

    #[Route('/{_locale}/ranking_motocross', name: 'vistaRankingMotocross')]
    public function vistaRankingMotocross(EntityManagerInterface $em)
    {
        $datosTablaDB = $em->getRepository(Rankingmotocross::class)->findAll();
        $datosScriptDB = $em->getRepository(Googlescriptrankingmotocross::class)->findAll();   
        return $this->render('frontend/rankingMotocross.html.twig',[
            'datosTabla' => $datosTablaDB,
            'datosScipt' => $datosScriptDB
        ]);
    }

    #[Route('/{_locale}/registros', name: 'vistaRegistros')]
    public function vistaRegistros()
    {
        return $this->render('frontend/registros.html.twig');
    }

    #[Route('{_locale}/graficos', name: 'vistaGraficos')]
    public function vistaGraficos()
    {
        return $this->render('frontend/graficos.html.twig');
    }

    #[Route('{_locale}/prediccion', name: 'vistaPrediccion')]
    public function vistaPrediccion()
    {
        return $this->render('frontend/prediccion.html.twig');
    }
}
