<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class pruebaController extends AbstractController
{
    /**
     * @Route("/", name="bienvenida")
     */
    #[Route('/', name: 'bienvenida')]
    public function bienvenida()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/rankings", name="vistaRankings")
     */
    #[Route('/rankings', name: 'vistaRankings')]
    public function vistaRankings()
    {
        return $this->render('rankings.html.twig');
    }
}
?>