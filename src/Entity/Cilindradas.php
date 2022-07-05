<?php

namespace App\Entity;

use App\Repository\CilindradasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CilindradasRepository::class)]
class Cilindradas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 5)]
    private $ID_CILINDRADA;

    public function getId(): ?int
    {
        return $this->id;
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
}
