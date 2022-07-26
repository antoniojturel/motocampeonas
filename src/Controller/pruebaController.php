<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class pruebaController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    #[Route('/', name: 'inicio')]
    public function inicio()
    {
        return $this->redirectToRoute('vistaBienvenida');
    }

    /**
     * @Route("/{_locale}", name="vistaBienvenida")
     */
    #[Route('/{_locale}', name: 'vistaBienvenida')]
    public function bienvenida(Request $request)
    {
        return $this->render('bienvenida.html.twig');
    }

    /**
     * @Route("/es", name="vistaBienvenidaES")
     */
    #[Route('/es', name: 'vistaBienvenidaES')]
    public function bienvenidaES(Request $request)
    {
        return $this->render('bienvenida.html.twig');
    }

    /**
     * @Route("/en", name="vistaBienvenidaEN")
     */
    #[Route('/en', name: 'vistaBienvenidaEN')]
    public function bienvenidaEN(Request $request)
    {
        return $this->render('bienvenida.html.twig');
    }

    /**
     * @Route("{_locale}/ranking_velocidad", name="vistaRankingVelocidad")
     */
    #[Route('/{_locale}/ranking_velocidad', name: 'vistaRankingVelocidad')]
    public function vistaRankingVelocidad()
    {
        $victorias = [
            [
                'marca' => 'Honda',
                'cilindrada' => 'Alta',
                'victorias' => 46,
                'nombreid' => 'donut1alta'
            ],
            [
                'marca' => 'Ducati',
                'cilindrada' => 'Alta',
                'victorias' => 33,
                'nombreid' => 'donut2alta'
            ],
            [
                'marca' => 'Yamaha',
                'cilindrada' => 'Alta',
                'victorias' => 28,
                'nombreid' => 'donut3alta'
            ],
            [
                'marca' => 'Kawasaki',
                'cilindrada' => 'Alta',
                'victorias' => 14,
                'nombreid' => 'donut4alta'
            ],
            [
                'marca' => 'Suzuki',
                'cilindrada' => 'Alta',
                'victorias' => 8,
                'nombreid' => 'donut5alta'
            ],
            [
                'marca' => 'Aprilia',
                'cilindrada' => 'Alta',
                'victorias' => 7,
                'nombreid' => 'donut6alta'
            ],   
            [
                 'marca' => 'Honda',
                 'cilindrada' => 'Media',
                 'victorias' => 37,
                 'nombreid' => 'donut1alta'
              ],
              [
                  'marca' => 'Ducati',
                  'cilindrada' => 'Media',
                  'victorias' => 0,
                  'nombreid' => 'donut2alta'
              ],
              [
                  'marca' => 'Yamaha',
                  'cilindrada' => 'Media',
                  'victorias' => 24,
                  'nombreid' => 'donut3alta'
              ],
              [
                  'marca' => 'Kawasaki',
                  'cilindrada' => 'Media',
                  'victorias' => 7,
                  'nombreid' => 'donut4alta'
              ],
              [
                  'marca' => 'Suzuki',
                  'cilindrada' => 'Media',
                  'victorias' => 2,
                  'nombreid' => 'donut5alta'
              ],
              [
                  'marca' => 'Aprilia',
                  'cilindrada' => 'Media',
                  'victorias' => 18,
                  'nombreid' => 'donut6alta'
              ],  
              [
                  'marca' => 'Honda',
                  'cilindrada' => 'Baja',
                  'victorias' => 30,
                  'nombreid' => 'donut1alta'
              ],
              [
                  'marca' => 'Ducati',
                  'cilindrada' => 'Baja',
                  'victorias' => 0,
                  'nombreid' => 'donut2alta'
              ],
              [
                  'marca' => 'Yamaha',
                  'cilindrada' => 'Baja',
                  'victorias' => 2,
                  'nombreid' => 'donut3alta'
              ],
              [
                  'marca' => 'Kawasaki',
                  'cilindrada' => 'Baja',
                  'victorias' => 8,
                  'nombreid' => 'donut4alta'
              ],
              [
                  'marca' => 'Suzuki',
                  'cilindrada' => 'Baja',
                  'victorias' => 0,
                  'nombreid' => 'donut5alta'
              ],
              [
                  'marca' => 'Aprilia',
                  'cilindrada' => 'Baja',
                  'victorias' => 18,
                  'nombreid' => 'donut6alta'
              ],                                                 
        ];
        $datosTablaDB = [
              [
                'posicion' => 1,
                'marca' => 'Honda',
                'nombreidAlta' => 'donut1alta',
                'nombreidMedia' => 'donut1media',                                   
                'nombreidBaja' => 'donut1baja'
              ],
              [
                'posicion' => 2,
                'marca' => 'Yamaha',
                'nombreidAlta' => 'donut2alta',
                'nombreidMedia' => 'donut2media',                                   
                'nombreidBaja' => 'donut2baja'
              ],
              [
                'posicion' => 3,
                'marca' => 'Ducati',
                'nombreidAlta' => 'donut3alta',
                'nombreidMedia' => 'donut3media',                                   
                'nombreidBaja' => 'donut3baja'
              ],                             
              [
                'posicion' => 4,
                'marca' => 'Kawasaki',
                'nombreidAlta' => 'donut4alta',
                'nombreidMedia' => 'donut4media',                                   
                'nombreidBaja' => 'donut4baja'
            ],
            [
                'posicion' => 5,
                'marca' => 'Aprilia',
                'nombreidAlta' => 'donut5alta',
                'nombreidMedia' => 'donut5media',                                   
                'nombreidBaja' => 'donut5baja'
            ],  
            [
                'posicion' => 6,
                'marca' => 'Suzuki',
                'nombreidAlta' => 'donut6alta',
                'nombreidMedia' => 'donut6media',                                   
                'nombreidBaja' => 'donut6baja'
            ],                      
            ];
            $datosScriptDB = [
                [
                  'cilindrada' => 'Alta',
                  'victorias' => 46,
                  'nombreid' => 'donut1alta',
                ],
                [
                    'cilindrada' => 'Media',
                    'victorias' => 37,
                    'nombreid' => 'donut1media',
                ],
                [
                    'cilindrada' => 'Baja',
                    'victorias' => 30,
                    'nombreid' => 'donut1baja',
                ],
                [
                    'cilindrada' => 'Alta',
                    'victorias' => 28,
                    'nombreid' => 'donut2alta',
                  ],
                  [
                      'cilindrada' => 'Media',
                      'victorias' => 24,
                      'nombreid' => 'donut2media',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 2,
                      'nombreid' => 'donut2baja',
                  ],
                  [
                    'cilindrada' => 'Alta',
                    'victorias' => 33,
                    'nombreid' => 'donut3alta',
                  ],
                  [
                      'cilindrada' => 'Media',
                      'victorias' => 0,
                      'nombreid' => 'donut3media',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 0,
                      'nombreid' => 'donut3baja',
                  ],   
                  [
                    'cilindrada' => 'Alta',
                    'victorias' => 14,
                    'nombreid' => 'donut4alta',
                  ],
                  [
                      'cilindrada' => 'Media',
                      'victorias' => 7,
                      'nombreid' => 'donut4media',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 8,
                      'nombreid' => 'donut4baja',
                  ],                                               
                  [
                    'cilindrada' => 'Alta',
                    'victorias' => 7,
                    'nombreid' => 'donut5alta',
                  ],
                  [
                      'cilindrada' => 'Media',
                      'victorias' => 18,
                      'nombreid' => 'donut5media',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 18,
                      'nombreid' => 'donut5baja',
                  ],
                  [
                    'cilindrada' => 'Alta',
                    'victorias' => 8,
                    'nombreid' => 'donut6alta',
                  ],
                  [
                      'cilindrada' => 'Media',
                      'victorias' => 2,
                      'nombreid' => 'donut6media',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 0,
                      'nombreid' => 'donut6baja',
                  ],
                ];
        return $this->render('rankingVelocidad.html.twig',[
            'victoriasData' => $victorias,
            'datosTabla' => $datosTablaDB,
            'datosScipt' => $datosScriptDB
        ]);
    }

    /**
     * @Route("/{_locale}/ranking_motocross", name="vistaRankingMotocross")
     */
    #[Route('/{_locale}/ranking_motocross', name: 'vistaRankingMotocross')]
    public function vistaRankingMotocross()
    {
        $victorias = [
            [
                'marca' => 'KTM',
                'cilindrada' => 'Alta',
                'victorias' => 26,
                'nombreid' => 'donut1alta'
            ],
            [
                'marca' => 'Yamaha',
                'cilindrada' => 'Alta',
                'victorias' => 18,
                'nombreid' => 'donut2alta'
            ],
            [
                'marca' => 'Honda',
                'cilindrada' => 'Alta',
                'victorias' => 10,
                'nombreid' => 'donut3alta'
            ],
            [
                'marca' => 'Kawasaki',
                'cilindrada' => 'Alta',
                'victorias' => 7,
                'nombreid' => 'donut4alta'
            ],
            [
                'marca' => 'Suzuki',
                'cilindrada' => 'Alta',
                'victorias' => 1,
                'nombreid' => 'donut5alta'
            ],
            [
                'marca' => 'KTM',
                'cilindrada' => 'Baja',
                'victorias' => 27,
                'nombreid' => 'donut1baja'
            ],
            [
                'marca' => 'Yamaha',
                'cilindrada' => 'Baja',
                'victorias' => 7,
                'nombreid' => 'donut2baja'
            ],
            [
                'marca' => 'Honda',
                'cilindrada' => 'Baja',
                'victorias' => 1,
                'nombreid' => 'donut3baja'
            ],
            [
                'marca' => 'Kawasaki',
                'cilindrada' => 'Baja',
                'victorias' => 1,
                'nombreid' => 'donut4baja'
            ],
            [
                'marca' => 'Suzuki',
                'cilindrada' => 'Baja',
                'victorias' => 0,
                'nombreid' => 'donut5baja'
            ],
            ];
            $datosTablaDB = [
                [
                  'posicion' => 1,
                  'marca' => 'KTM',
                  'nombreidAlta' => 'donut1alta',                                
                  'nombreidBaja' => 'donut1baja'
                ],
                [
                  'posicion' => 2,
                  'marca' => 'Yamaha',
                  'nombreidAlta' => 'donut2alta',                                  
                  'nombreidBaja' => 'donut2baja'
                ],
                [
                  'posicion' => 3,
                  'marca' => 'Kawasaki',
                  'nombreidAlta' => 'donut3alta',                                  
                  'nombreidBaja' => 'donut3baja'
                ],                             
                [
                  'posicion' => 4,
                  'marca' => 'Honda',
                  'nombreidAlta' => 'donut4alta',                              
                  'nombreidBaja' => 'donut4baja'
              ],
              [
                  'posicion' => 5,
                  'marca' => 'Suzuki',
                  'nombreidAlta' => 'donut5alta',                                  
                  'nombreidBaja' => 'donut5baja'
              ],                       
              ];
            $datosScriptDB = [
                [
                  'cilindrada' => 'Alta',
                  'victorias' => 26,
                  'nombreid' => 'donut1alta',
                ],
                [
                    'cilindrada' => 'Baja',
                    'victorias' => 27,
                    'nombreid' => 'donut1baja',
                ],
                [
                    'cilindrada' => 'Alta',
                    'victorias' => 18,
                    'nombreid' => 'donut2alta',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 7,
                      'nombreid' => 'donut2baja',
                  ],
                  [
                    'cilindrada' => 'Alta',
                    'victorias' => 10,
                    'nombreid' => 'donut3alta',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 1,
                      'nombreid' => 'donut3baja',
                  ],
                  [
                    'cilindrada' => 'Alta',
                    'victorias' => 7,
                    'nombreid' => 'donut4alta',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 1,
                      'nombreid' => 'donut4baja',
                  ],
                  [
                    'cilindrada' => 'Alta',
                    'victorias' => 1,
                    'nombreid' => 'donut5alta',
                  ],
                  [
                      'cilindrada' => 'Baja',
                      'victorias' => 0,
                      'nombreid' => 'donut5baja',
                  ],
                                                                                   
                ];

        return $this->render('rankingMotocross.html.twig',[
            'victoriasData' => $victorias,
            'datosTabla' => $datosTablaDB,
            'datosScipt' => $datosScriptDB
        ]);
    }

    /**
     * @Route("/{_locale}/registros", name="vistaRegistros")
     */
    #[Route('/{_locale}/registros', name: 'vistaRegistros')]
    public function vistaRegistros()
    {
        return $this->render('registros.html.twig');
    }

    /**
     * @Route("/{_locale}/graficos", name="vistaGraficos")
     */
    #[Route('{_locale}/graficos', name: 'vistaGraficos')]
    public function vistaGraficos()
    {
        return $this->render('graficos.html.twig');
    }
}
?>