<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class pruebaController extends AbstractController
{
    
    #[Route('/', name: 'bienvenida')]
    public function bienvenida()
    {
        return $this->render('home.html.twig');
    }
}
?>