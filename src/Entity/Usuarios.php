<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", uniqueConstraints={@ORM\UniqueConstraint(name="ID_USUARIO", columns={"ID_USUARIO"})}, indexes={@ORM\Index(name="ID_PAIS", columns={"ID_PAIS"}), @ORM\Index(name="ID_MARCA", columns={"ID_MARCA"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_REGISTRO", type="date", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMBRE_MOTE", type="string", length=15, nullable=true)
     */
    private $nombreMote;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PASSWORD", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var \Marcas
     *
     * @ORM\ManyToOne(targetEntity="Marcas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_MARCA", referencedColumnName="ID_MARCA")
     * })
     */
    private $idMarca;

    /**
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PAIS", referencedColumnName="ID_PAIS")
     * })
     */
    private $idPais;

    public function getIdUsuario(): ?int
    {
        return $this->idUsuario;
    }

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro(\DateTimeInterface $fechaRegistro): self
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    public function getNombreMote(): ?string
    {
        return $this->nombreMote;
    }

    public function setNombreMote(?string $nombreMote): self
    {
        $this->nombreMote = $nombreMote;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIdMarca(): ?Marcas
    {
        return $this->idMarca;
    }

    public function setIdMarca(?Marcas $idMarca): self
    {
        $this->idMarca = $idMarca;

        return $this;
    }

    public function getIdPais(): ?Paises
    {
        return $this->idPais;
    }

    public function setIdPais(?Paises $idPais): self
    {
        $this->idPais = $idPais;

        return $this;
    }


}
