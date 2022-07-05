<?php

namespace App\Entity;

use App\Repository\ClasificacionesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasificacionesRepository::class)]
class Clasificaciones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 15)]
    private $ID_CLASIFICACION;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDCLASIFICACION(): ?string
    {
        return $this->ID_CLASIFICACION;
    }

    public function setIDCLASIFICACION(string $ID_CLASIFICACION): self
    {
        $this->ID_CLASIFICACION = $ID_CLASIFICACION;

        return $this;
    }
}
