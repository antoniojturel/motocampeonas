<?php

namespace App\Entity;

use App\Repository\CategoriasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriasRepository::class)]
class Categorias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 10)]
    private $ID_MODALIDAD;

    #[ORM\Column(type: 'string', length: 5)]
    private $ID_CILINDRADA;

    #[ORM\Column(type: 'string', length: 15)]
    private $ID_CATEGORIA;

    #[ORM\Column(type: 'integer')]
    private $FECHA_COMIENZO;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $FECHA_FIN;

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

    public function getIDCILINDRADA(): ?string
    {
        return $this->ID_CILINDRADA;
    }

    public function setIDCILINDRADA(string $ID_CILINDRADA): self
    {
        $this->ID_CILINDRADA = $ID_CILINDRADA;

        return $this;
    }

    public function getIDCATEGORIA(): ?string
    {
        return $this->ID_CATEGORIA;
    }

    public function setIDCATEGORIA(string $ID_CATEGORIA): self
    {
        $this->ID_CATEGORIA = $ID_CATEGORIA;

        return $this;
    }

    public function getFECHACOMIENZO(): ?int
    {
        return $this->FECHA_COMIENZO;
    }

    public function setFECHACOMIENZO(int $FECHA_COMIENZO): self
    {
        $this->FECHA_COMIENZO = $FECHA_COMIENZO;

        return $this;
    }

    public function getFECHAFIN(): ?int
    {
        return $this->FECHA_FIN;
    }

    public function setFECHAFIN(?int $FECHA_FIN): self
    {
        $this->FECHA_FIN = $FECHA_FIN;

        return $this;
    }
}
