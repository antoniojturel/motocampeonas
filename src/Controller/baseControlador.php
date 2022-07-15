<?php

// paquetes/espacio de nombre
namespace App\Controller;

// equivalente a include/import
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Categorias;
use App\Entity\Cilindradas;
use App\Entity\Clasificaciones;
use App\Entity\Fechas;
use App\Entity\Marcas;
use App\Entity\Modalidades;
use App\Entity\Paises;
use App\Entity\Usuarios;
use App\Entity\Victorias;
use App\Entity\Votos;

use App\Repository\CategoriasRepository;
use App\Repository\CilindradasRepository;
use App\Repository\ClasificacionesRepository;
use App\Repository\FechasRepository;
use App\Repository\MarcasRepository;
use App\Repository\ModalidadesRepository;
use App\Repository\PaisesRepository;
use App\Repository\UsuariosRepository;
use App\Repository\VictoriasRepository;
use App\Repository\VotosRepository;

use Doctrine\ORM\EntityManagerInterface;
//use Doctrine\ORM\Mapping\Id;

class baseControlador extends AbstractController {

    #[Route('/MotoCampeonas', name: 'MotoCampeona')]
    public function MotoCampeona()
    {
        return $this->render('home.html.twig');
    }

}