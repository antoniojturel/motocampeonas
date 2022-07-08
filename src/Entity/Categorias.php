<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorias
 *
 * @ORM\Table(name="categorias", uniqueConstraints={@ORM\UniqueConstraint(name="ID_CATEGORIA", columns={"ID_CATEGORIA"})}, indexes={@ORM\Index(name="ID_MODALIDAD", columns={"ID_MODALIDAD"}), @ORM\Index(name="FECHA_COMIENZO", columns={"FECHA_COMIENZO"}), @ORM\Index(name="FECHA_FIN", columns={"FECHA_FIN"}), @ORM\Index(name="ID_CILINDRADA", columns={"ID_CILINDRADA"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CategoriasRepository")
 */
class Categorias
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CATEGORIA", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;

    /**
     * @var \Fechas
     *
     * @ORM\ManyToOne(targetEntity="Fechas")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="FECHA_FIN", referencedColumnName="ID_FECHA")
     * })
     */
    private $fechaFin;

    /**
     * @var \Cilindradas
     *
     * @ORM\ManyToOne(targetEntity="Cilindradas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CILINDRADA", referencedColumnName="ID_CILINDRADA")
     * })
     */
    private $idCilindrada;

    /**
     * @var \Fechas
     *
     * @ORM\ManyToOne(targetEntity="Fechas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FECHA_COMIENZO", referencedColumnName="ID_FECHA")
     * })
     */
    private $fechaComienzo;

    /**
     * @var \Modalidades
     *
     * @ORM\ManyToOne(targetEntity="Modalidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_MODALIDAD", referencedColumnName="ID_MODALIDAD")
     * })
     */
    private $idModalidad;

    public function getIdCategoria(): ?string
    {
        return $this->idCategoria;
    }

    public function getFechaFin(): ?Fechas
    {
        return $this->fechaFin;
    }

    public function setFechaFin(?Fechas $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    public function getIdCilindrada(): ?Cilindradas
    {
        return $this->idCilindrada;
    }

    public function setIdCilindrada(?Cilindradas $idCilindrada): self
    {
        $this->idCilindrada = $idCilindrada;

        return $this;
    }

    public function getFechaComienzo(): ?Fechas
    {
        return $this->fechaComienzo;
    }

    public function setFechaComienzo(?Fechas $fechaComienzo): self
    {
        $this->fechaComienzo = $fechaComienzo;

        return $this;
    }

    public function getIdModalidad(): ?Modalidades
    {
        return $this->idModalidad;
    }

    public function setIdModalidad(?Modalidades $idModalidad): self
    {
        $this->idModalidad = $idModalidad;

        return $this;
    }


}
