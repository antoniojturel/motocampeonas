<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class pruebaController extends AbstractController
{
    /**
     * @Route("/", name="vistaBienvenida")
     */
    #[Route('/', name: 'vistaBienvenida')]
    public function bienvenida()
    {
        return $this->render('bienvenida.html.twig');
    }

    /**
     * @Route("/rankings", name="vistaRankings")
     */
    //#[Route('/rankings', name: 'vistaRankings')]
    //public function vistaRankings()
    //{
    //    return $this->render('rankings.html.twig');
    //}

    /**
     * @Route("/ranking_velocidad", name="vistaRankingVelocidad")
     */
    #[Route('/ranking_velocidad', name: 'vistaRankingVelocidad')]
    public function vistaRankingVelocidad()
    {
        return $this->render('rankingVelocidad.html.twig');
    }

    /**
     * @Route("/ranking_motocross", name="vistaRankingMotocross")
     */
    #[Route('/ranking_motocross', name: 'vistaRankingMotocross')]
    public function vistaRankingMotocross()
    {
        return $this->render('rankingMotocross.html.twig');
    }

    /**
     * @Route("/registros", name="vistaRegistros")
     */
    #[Route('/registros', name: 'vistaRegistros')]
    public function vistaRegistros()
    {
        return $this->render('registros.html.twig');
    }

    /**
     * @Route("/datos", name="vistaDatos")
     */
    #[Route('/datos', name: 'vistaDatos')]
    public function vistaDatos()
    {
        return $this->render('datos.html.twig');
    }
}
?>