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
use Dompdf\Dompdf;
use Dompdf\Options;

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
//        $datosTablaDB = [
//            [
//              'posicion' => 1,
//              'marca' => 'Honda',
//              'iddonutalta' => 'donut1alta',
//              'iddonutmedia' => 'donut1media',                                   
//              'iddonutbaja' => 'donut1baja'
//            ],
//            [
//              'posicion' => 2,
//              'marca' => 'Yamaha',
//              'iddonutalta' => 'donut2alta',
//              'iddonutmedia' => 'donut2media',                                   
//              'iddonutbaja' => 'donut2baja'
//            ],
//            [
//              'posicion' => 3,
//              'marca' => 'Ducati',
//              'iddonutalta' => 'donut3alta',
//              'iddonutmedia' => 'donut3media',                                   
//              'iddonutbaja' => 'donut3baja'
//            ],                             
//            [
//              'posicion' => 4,
//              'marca' => 'Kawasaki',
//              'iddonutalta' => 'donut4alta',
//              'iddonutmedia' => 'donut4media',                                   
//              'iddonutbaja' => 'donut4baja'
//          ],
//          [
//              'posicion' => 5,
//              'marca' => 'Aprilia',
//              'iddonutalta' => 'donut5alta',
//              'iddonutmedia' => 'donut5media',                                   
//              'iddonutbaja' => 'donut5baja'
//          ],  
//          [
//              'posicion' => 6,
//              'marca' => 'Suzuki',
//              'iddonutalta' => 'donut6alta',
//              'iddonutmedia' => 'donut6media',                                   
//              'iddonutbaja' => 'donut6baja'
//          ],                      
//          ];
//          $datosScriptDB = [
//              [
//                'cilindrada' => 'Alta',
//                'victorias' => 46,
//                'iddonut' => 'donut1alta',
//              ],
//              [
//                  'cilindrada' => 'Media',
//                  'victorias' => 37,
//                  'iddonut' => 'donut1media',
//              ],
//              [
//                  'cilindrada' => 'Baja',
//                  'victorias' => 30,
//                  'iddonut' => 'donut1baja',
//              ],
//              [
//                  'cilindrada' => 'Alta',
//                  'victorias' => 28,
//                  'iddonut' => 'donut2alta',
//                ],
//                [
//                    'cilindrada' => 'Media',
//                    'victorias' => 24,
//                    'iddonut' => 'donut2media',
//                ],
//                [
//                    'cilindrada' => 'Baja',
//                    'victorias' => 2,
//                    'iddonut' => 'donut2baja',
//                ],
//                [
//                  'cilindrada' => 'Alta',
//                  'victorias' => 33,
//                  'iddonut' => 'donut3alta',
//                ],
//                [
//                    'cilindrada' => 'Media',
//                    'victorias' => 0,
//                    'iddonut' => 'donut3media',
//                ],
//                [
//                    'cilindrada' => 'Baja',
//                    'victorias' => 0,
//                    'iddonut' => 'donut3baja',
//                ],   
//                [
//                  'cilindrada' => 'Alta',
//                  'victorias' => 14,
//                  'iddonut' => 'donut4alta',
//                ],
//                [
//                    'cilindrada' => 'Media',
//                    'victorias' => 7,
//                    'iddonut' => 'donut4media',
//                ],
//                [
//                    'cilindrada' => 'Baja',
//                    'victorias' => 8,
//                    'iddonut' => 'donut4baja',
//                ],                                               
//                [
//                  'cilindrada' => 'Alta',
//                  'victorias' => 7,
//                  'iddonut' => 'donut5alta',
//                ],
//                [
//                    'cilindrada' => 'Media',
//                    'victorias' => 18,
//                    'iddonut' => 'donut5media',
//                ],
//                [
//                    'cilindrada' => 'Baja',
//                    'victorias' => 18,
//                    'iddonut' => 'donut5baja',
//                ],
//                [
//                  'cilindrada' => 'Alta',
//                  'victorias' => 8,
//                  'iddonut' => 'donut6alta',
//                ],
//                [
//                    'cilindrada' => 'Media',
//                    'victorias' => 2,
//                    'iddonut' => 'donut6media',
//                ],
//                [
//                    'cilindrada' => 'Baja',
//                    'victorias' => 0,
//                    'iddonut' => 'donut6baja',
//                ],
//              ];
        //$datosTablaDB = $em->getRepository(Rankingvelocidad::class)->findAll();
        //$datosScriptDB = $em->getRepository(Googlescriptrankingvelocidad::class)->findAll();        

        $datosTablaDB = file_get_contents("https://motocampeonasrv.azurewebsites.net/api/Motocampeonas");
        $datosTablaDB = json_decode($datosTablaDB, true);
        dump($datosTablaDB);

        $datosScriptDB = file_get_contents("https://motocampeonasgsrv.azurewebsites.net/api/Motocampeonas");
        $datosScriptDB = json_decode($datosScriptDB, true);
        dump($datosScriptDB);

        return $this->render('frontend/rankingVelocidad.html.twig',[
            'datosTabla' => $datosTablaDB,
            'datosScipt' => $datosScriptDB
        ]);
    }
    
    #[Route('/{_locale}/ranking_motocross', name: 'vistaRankingMotocross')]
    public function vistaRankingMotocross(EntityManagerInterface $em)
    {
//        $datosTablaDB = [
//            [
//              'posicion' => 1,
//              'marca' => 'KTM',
//              'iddonutalta' => 'donut1alta',                                
//              'iddonutbaja' => 'donut1baja'
//            ],
//            [
//              'posicion' => 2,
//              'marca' => 'Yamaha',
//              'iddonutalta' => 'donut2alta',                                  
//              'iddonutbaja' => 'donut2baja'
//            ],
//            [
//              'posicion' => 3,
//              'marca' => 'Honda',
//              'iddonutalta' => 'donut3alta',                              
//              'iddonutbaja' => 'donut3baja'
//            ],
//            [
//              'posicion' => 4,
//              'marca' => 'Kawasaki',
//              'iddonutalta' => 'donut4alta',                                  
//              'iddonutbaja' => 'donut4baja'
//            ],                             
//            [
//              'posicion' => 5,
//              'marca' => 'Suzuki',
//              'iddonutalta' => 'donut5alta',                                  
//              'iddonutbaja' => 'donut5baja'
//            ],                       
//          ];
//        $datosScriptDB = [
//            [
//              'cilindrada' => 'Alta',
//              'victorias' => 26,
//              'iddonut' => 'donut1alta',
//            ],
//            [
//                'cilindrada' => 'Baja',
//                'victorias' => 27,
//                'iddonut' => 'donut1baja',
//            ],
//            [
//                'cilindrada' => 'Alta',
//                'victorias' => 18,
//                'iddonut' => 'donut2alta',
//              ],
//              [
//                  'cilindrada' => 'Baja',
//                  'victorias' => 7,
//                  'iddonut' => 'donut2baja',
//              ],
//              [
//                'cilindrada' => 'Alta',
//                'victorias' => 10,
//                'iddonut' => 'donut3alta',
//              ],
//              [
//                  'cilindrada' => 'Baja',
//                  'victorias' => 1,
//                  'iddonut' => 'donut3baja',
//              ],
//              [
//                'cilindrada' => 'Alta',
//                'victorias' => 7,
//                'iddonut' => 'donut4alta',
//              ],
//              [
//                  'cilindrada' => 'Baja',
//                  'victorias' => 1,
//                  'iddonut' => 'donut4baja',
//              ],
//              [
//                'cilindrada' => 'Alta',
//                'victorias' => 1,
//                'iddonut' => 'donut5alta',
//              ],
//              [
//                  'cilindrada' => 'Baja',
//                  'victorias' => 0,
//                  'iddonut' => 'donut5baja',
//              ],                                                                 
//            ];

          $datosTablaDB = file_get_contents("https://motocampeonasrm.azurewebsites.net/api/Motocampeonas");
          $datosTablaDB = json_decode($datosTablaDB, true);
          dump($datosTablaDB);
  
          $datosScriptDB = file_get_contents("https://motocampeonasgsrm.azurewebsites.net/api/Motocampeonas");
          $datosScriptDB = json_decode($datosScriptDB, true);
          dump($datosScriptDB);
        //$datosTablaDB = $em->getRepository(Rankingmotocross::class)->findAll();
        //$datosScriptDB = $em->getRepository(Googlescriptrankingmotocross::class)->findAll();   
        return $this->render('frontend/rankingMotocross.html.twig',[
            'datosTabla' => $datosTablaDB,
            'datosScipt' => $datosScriptDB
        ]);
    }

    #[Route('{_locale}/graficos', name: 'vistaGraficos')]
    public function vistaGraficos()
    {
        return $this->render('frontend/graficos.html.twig');
    }

    #[Route('/{_locale}/registros', name: 'vistaRegistros')]
    public function vistaRegistros(EntityManagerInterface $em)
    {
        $datosTablaDBmotocross = [
            [
              'posicion' => 1,
              'marca' => 'KTM',
              'alta' => 26,                                
              'baja' => 27
            ],
            [
              'posicion' => 2,
              'marca' => 'Yamaha',
              'alta' => 18,                                
              'baja' => 7
            ],
            [
              'posicion' => 3,
              'marca' => 'Honda',
              'alta' => 10,                                
              'baja' => 1
            ],
            [
              'posicion' => 4,
              'marca' => 'Kawasaki',
              'alta' => 7,                                
              'baja' => 1
            ],                             
            [
              'posicion' => 5,
              'marca' => 'Suzuki',
              'alta' => 1,                                
              'baja' => 0
            ],                       
          ];

          $datosTablaDBvelocidad = [
            [
              'posicion' => 1,
              'marca' => 'Honda',
              'alta' => 46,
              'media' => 37,                                
              'baja' => 30
            ],
            [
              'posicion' => 2,
              'marca' => 'Yamaha',
              'alta' => 28,
              'media' => 24,                                
              'baja' => 2
            ],
            [
              'posicion' => 3,
              'marca' => 'Ducati',
              'alta' => 33,
              'media' => 0,                                
              'baja' => 0
            ],                             
            [
              'posicion' => 4,
              'marca' => 'Kawasaki',
              'alta' => 14,
              'media' => 7,                                
              'baja' => 8
          ],
          [
              'posicion' => 5,
              'marca' => 'Aprilia',
              'alta' => 7,
              'media' => 18,                                
              'baja' => 18
          ],  
          [
              'posicion' => 6,
              'marca' => 'Suzuki',
              'alta' => 8,
              'media' => 2,                                
              'baja' => 0
          ],                      
          ];
        //$datosTablaDBvelocidad = $em->getRepository(Rankingvelocidad::class)->findAll();
        //$datosTablaDBmotocross = $em->getRepository(Rankingmotocross::class)->findAll();        
        return $this->render('frontend/registros.html.twig',[
            'datosTablaVelocidad' => $datosTablaDBvelocidad,
            'datosTablaMotocross' => $datosTablaDBmotocross,            
        ]);
    }

    #[Route('/{_locale}/registrosRankingMotocrossPDF', name: 'vistaRegistrosRankingMotocrossPDF')]
    public function vistaRegistrosRankingMotocrossPDF(EntityManagerInterface $em)
    {

      $datosTablaDBmotocross = [
        [
          'posicion' => 1,
          'marca' => 'KTM',
          'alta' => 26,                                
          'baja' => 27
        ],
        [
          'posicion' => 2,
          'marca' => 'Yamaha',
          'alta' => 18,                                
          'baja' => 7
        ],
        [
          'posicion' => 3,
          'marca' => 'Honda',
          'alta' => 10,                                
          'baja' => 1
        ],
        [
          'posicion' => 4,
          'marca' => 'Kawasaki',
          'alta' => 7,                                
          'baja' => 1
        ],
        [
          'posicion' => 5,
          'marca' => 'Suzuki',
          'alta' => 1,                                
          'baja' => 0
        ],                       
      ];
        // $datosTablaDBmotocross = $em->getRepository(Rankingmotocross::class)->findAll();  

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Crea una instancia de Dompdf con nuestras opciones
        $dompdf = new Dompdf($pdfOptions);
        
        // Preparamos la página HTML para generar PDF
        $html = $this->renderView('frontend/rankingMotocrossPDF.html.twig', [
            'datosTabla' => $datosTablaDBmotocross
        ]);
        
        // Ahora se carga la página HTML en Dompdf
        $dompdf->loadHtml($html);
        
        // También podemos de forma opcional indicar el tamaño del papel y la orientación
        $dompdf->setPaper('A4', 'portrait');

        // Renderiza el HTML como PDF
        $dompdf->render();

        // Envíe el PDF generado al navegador. ¡DESCARGA FORZADA!
        $dompdf->stream("RegistrosRankingMotocross-MotoCampeonas.pdf", [
            "Attachment" => true
        ]);

    }

    #[Route('/{_locale}/registrosRankingVelocidadPDF', name: 'vistaRegistrosRankingVelocidadPDF')]
    public function vistaRegistrosRankingVelocidadPDF(EntityManagerInterface $em)
    {
      $datosTablaDBvelocidad = [
        [
          'posicion' => 1,
          'marca' => 'Honda',
          'alta' => 46,
          'media' => 37,                                
          'baja' => 30
        ],
        [
          'posicion' => 2,
          'marca' => 'Yamaha',
          'alta' => 28,
          'media' => 24,                                
          'baja' => 2
        ],
        [
          'posicion' => 3,
          'marca' => 'Ducati',
          'alta' => 33,
          'media' => 0,                                
          'baja' => 0
        ],                             
        [
          'posicion' => 4,
          'marca' => 'Kawasaki',
          'alta' => 14,
          'media' => 7,                                
          'baja' => 8
      ],
      [
          'posicion' => 5,
          'marca' => 'Aprilia',
          'alta' => 7,
          'media' => 18,                                
          'baja' => 18
      ],  
      [
          'posicion' => 6,
          'marca' => 'Suzuki',
          'alta' => 8,
          'media' => 2,                                
          'baja' => 0
      ],                      
      ];
        //$datosTablaDBvelocidad = $em->getRepository(Rankingvelocidad::class)->findAll();  

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Crea una instancia de Dompdf con nuestras opciones
        $dompdf = new Dompdf($pdfOptions);
        
        // Preparamos la página HTML para generar PDF
        $html = $this->renderView('frontend/rankingVelocidadPDF.html.twig', [
            'datosTabla' => $datosTablaDBvelocidad
        ]);
        
        // Ahora se carga la página HTML en Dompdf
        $dompdf->loadHtml($html);
        
        // También podemos de forma opcional indicar el tamaño del papel y la orientación
        $dompdf->setPaper('A4', 'portrait');

        // Renderiza el HTML como PDF
        $dompdf->render();

        // Envíe el PDF generado al navegador. ¡DESCARGA FORZADA!
        $dompdf->stream("RegistrosRankingVelocidad-MotoCampeonas.pdf", [
            "Attachment" => true
        ]);

    }

}
