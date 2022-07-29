<?php

namespace App\Entity;

use App\Repository\RankingmotocrossRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RankingmotocrossRepository::class)]
class Rankingmotocross
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 2)]
    private $posicion;

    #[ORM\Column(type: 'string', length: 15)]
    private $marca;

    #[ORM\Column(type: 'string', length: 3)]
    private $alta;

    #[ORM\Column(type: 'string', length: 3)]
    private $baja;

    #[ORM\Column(type: 'string', length: 15)]
    private $iddonutalta;

    #[ORM\Column(type: 'string', length: 15)]
    private $iddonutbaja;

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
        $this->iddonutalta = $iddonutalta;

        return $this;
    }

    public function getIddonutbaja(): ?string
    {
        return $this->iddonutbaja;
    }

    public function setIddonutbaja(string $iddonutbaja): self
    {
        $this->iddonutbaja = $iddonutbaja;

        return $this;
    }
}
