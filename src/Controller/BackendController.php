<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackendController extends AbstractController
{
    #[Route('{_locale}/prediccion', name: 'vistaPrediccion')]
    public function vistaPrediccion()
    {
        return $this->render('backend/prediccion.html.twig');
    }
}