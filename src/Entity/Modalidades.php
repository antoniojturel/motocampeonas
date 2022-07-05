<?php

namespace App\Entity;

use App\Repository\ModalidadesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModalidadesRepository::class)]
class Modalidades
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 10)]
    private $ID_MODALIDAD;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDMODALIDAD(): ?string
    {
        return $this->ID_MODALIDAD;
    }

    public function setIDMODALIDAD(string $ID_MODALIDAD): self
    {
        $this->ID_MODALIDAD = $ID_MODALIDAD;

        return $this;
    }
}
