<?php

namespace App\Entity;

use App\Repository\PaisesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaisesRepository::class)]
class Paises
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 10)]
    private $ID_PAIS;

    public function getId(): ?int
    {
        return $this->id;
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
