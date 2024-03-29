<?php

namespace App\Entity;

use App\Repository\RankingvelocidadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RankingvelocidadRepository::class)]
class Rankingvelocidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 2)]
    private ?string $posicion = null;

    #[ORM\Column(length: 15)]
    private ?string $marca = null;

    #[ORM\Column(length: 3)]
    private ?string $alta = null;

    #[ORM\Column(length: 3)]
    private ?string $media = null;

    #[ORM\Column(length: 3)]
    private ?string $baja = null;

    #[ORM\Column(length: 15)]
    private ?string $iddonutalta = null;

    #[ORM\Column(length: 15)]
    private ?string $iddonutmedia = null;

    #[ORM\Column(length: 15)]
    private ?string $iddonutbaja = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosicion(): ?string
    {
        return $this->posicion;
    }

    public function setPosicion(string $posicion): self
    {
        $this->posicion = $posicion;

        return $this;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAlta(): ?string
    {
        return $this->alta;
    }

    public function setAlta(string $alta): self
    {
        $this->alta = $alta;

        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(string $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getBaja(): ?string
    {
        return $this->baja;
    }

    public function setBaja(string $baja): self
    {
        $this->baja = $baja;

        return $this;
    }

    public function getIddonutalta(): ?string
    {
        return $this->iddonutalta;
    }

    public function setIddonutalta(string $iddonutalta): self
    {
        $this->baja = $iddonutalta;

        return $this;
    }

    public function getIddonutmedia(): ?string
    {
        return $this->iddonutmedia;
    }

    public function setIddonutmedia(string $iddonutmedia): self
    {
        $this->baja = $iddonutmedia;

        return $this;
    }

    public function getIddonutbaja(): ?string
    {
        return $this->iddonutbaja;
    }

    public function setIddonutbaja(string $iddonutbaja): self
    {
        $this->baja = $iddonutbaja;

        return $this;
    }
}
