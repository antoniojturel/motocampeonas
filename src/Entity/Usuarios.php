<?php

namespace App\Entity;

use App\Repository\UsuariosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuariosRepository::class)]
class Usuarios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $FECHA_REGISTRO;

    #[ORM\Column(type: 'string', length: 15)]
    private $NOMBRE_MOTE;

    #[ORM\Column(type: 'string', length: 100)]
    private $EMAIL;

    #[ORM\Column(type: 'string', length: 50)]
    private $PASSWORD;

    #[ORM\Column(type: 'string', length: 10)]
    private $ID_MARCA;

    #[ORM\Column(type: 'string', length: 10)]
    private $ID_PAIS;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFECHAREGISTRO(): ?\DateTimeInterface
    {
        return $this->FECHA_REGISTRO;
    }

    public function setFECHAREGISTRO(\DateTimeInterface $FECHA_REGISTRO): self
    {
        $this->FECHA_REGISTRO = $FECHA_REGISTRO;

        return $this;
    }

    public function getNOMBREMOTE(): ?string
    {
        return $this->NOMBRE_MOTE;
    }

    public function setNOMBREMOTE(string $NOMBRE_MOTE): self
    {
        $this->NOMBRE_MOTE = $NOMBRE_MOTE;

        return $this;
    }

    public function getEMAIL(): ?string
    {
        return $this->EMAIL;
    }

    public function setEMAIL(string $EMAIL): self
    {
        $this->EMAIL = $EMAIL;

        return $this;
    }

    public function getPASSWORD(): ?string
    {
        return $this->PASSWORD;
    }

    public function setPASSWORD(string $PASSWORD): self
    {
        $this->PASSWORD = $PASSWORD;

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
