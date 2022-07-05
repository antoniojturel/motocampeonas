<?php

namespace App\Entity;

use App\Repository\MarcasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarcasRepository::class)]
class Marcas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 10)]
    private $ID_MARCA;

    #[ORM\Column(type: 'string', length: 10)]
    private $ID_PAIS;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIDPAIS(): ?string
    {
        return $this->ID_PAIS;
    }

    public function setIDPAIS(string $ID_PAIS): self
    {
        $this->ID_PAIS = $ID_PAIS;

        return $this;
    }
}
