<?php

namespace App\Entity;

use App\Repository\VictoriasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VictoriasRepository::class)]
class Victorias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $ID_VICTORIA;

    #[ORM\Column(type: 'string', length: 15)]
    private $ID_CATEGORIA;

    #[ORM\Column(type: 'string', length: 15)]
    private $ID_CLASIFICACION;

    #[ORM\Column(type: 'integer')]
    private $ID_FECHA;

    #[ORM\Column(type: 'string', length: 10)]
    private $ID_MARCA;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDVICTORIA(): ?int
    {
        return $this->ID_VICTORIA;
    }

    public function setIDVICTORIA(int $ID_VICTORIA): self
    {
        $this->ID_VICTORIA = $ID_VICTORIA;

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

    public function getIDCLASIFICACION(): ?string
    {
        return $this->ID_CLASIFICACION;
    }

    public function setIDCLASIFICACION(string $ID_CLASIFICACION): self
    {
        $this->ID_CLASIFICACION = $ID_CLASIFICACION;

        return $this;
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

    public function getIDMARCA(): ?string
    {
        return $this->ID_MARCA;
    }

    public function setIDMARCA(string $ID_MARCA): self
    {
        $this->ID_MARCA = $ID_MARCA;

        return $this;
    }
}
