<?php

namespace App\Entity;

use App\Repository\FechasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FechasRepository::class)]
class Fechas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $ID_FECHA;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDFECHA(): ?int
    {
        return $this->ID_FECHA;
    }

    public function setIDFECHA(int $ID_FECHA): self
    {
        $this->ID_FECHA = $ID_FECHA;

        return $this;
    }
}
