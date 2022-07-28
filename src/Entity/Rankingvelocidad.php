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
}
