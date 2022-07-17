<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class homeController extends AbstractController
{
    
    #[Route('/', name: 'ejemplo')]
    public function ejemplo()
    {
        return $this->render('home.html.twig');
    }
}
?>