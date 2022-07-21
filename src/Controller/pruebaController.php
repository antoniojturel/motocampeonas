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
        $id_nombres=['donut1','donut2','donut3'];
        dump($id_nombres);
        return $this->render('rankingVelocidad.html.twig',[
            'nombresDonut' => $id_nombres 
        ]);
    }

    /**
     * @Route("/ranking_motocross", name="vistaRankingMotocross")
     */
    #[Route('/ranking_motocross', name: 'vistaRankingMotocross')]
    public function vistaRankingMotocross()
    {
        $id_nombres=['donut1','donut2'];
        dump($id_nombres);
        return $this->render('rankingMotocross.html.twig',[
            'nombresDonut' => $id_nombres 
        ]);
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
     * @Route("/graficos", name="vistaGraficos")
     */
    #[Route('/graficos', name: 'vistaGraficos')]
    public function vistaGraficos()
    {
        return $this->render('graficos.html.twig');
    }
}
?>