<?php

namespace App\Entity;

use App\Repository\GooglescriptrankingvelocidadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GooglescriptrankingvelocidadRepository::class)]
class Googlescriptrankingvelocidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 5)]
    private $cilindrada;

    #[ORM\Column(type: 'string', length: 3)]
    private $victorias;

    #[ORM\Column(type: 'string', length: 15)]
    private $iddonut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCilindrada(): ?string
    {
        return $this->cilindrada;
    }

    public function setCilindrada(string $cilindrada): self
    {
        $this->cilindrada = $cilindrada;

        return $this;
    }

    public function getVictorias(): ?string
    {
        return $this->victorias;
    }

    public function setVictorias(string $victorias): self
    {
        $this->victorias = $victorias;

        return $this;
    }

    public function getIddonut(): ?string
    {
        return $this->iddonut;
    }

    public function setIddonut(string $iddonut): self
    {
        $this->iddonut = $iddonut;

        return $this;
    }
}
