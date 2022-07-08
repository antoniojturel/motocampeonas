<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Victorias
 *
 * @ORM\Table(name="victorias", uniqueConstraints={@ORM\UniqueConstraint(name="ID_VICTORIA", columns={"ID_VICTORIA"})}, indexes={@ORM\Index(name="ID_CATEGORIA", columns={"ID_CATEGORIA"}), @ORM\Index(name="ID_FECHA", columns={"ID_FECHA"}), @ORM\Index(name="ID_CLASIFICACION", columns={"ID_CLASIFICACION"}), @ORM\Index(name="ID_MARCA", columns={"ID_MARCA"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\VictoriasRepository")
 */
class Victorias
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_VICTORIA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVictoria;

    /**
     * @var \Clasificaciones
     *
     * @ORM\ManyToOne(targetEntity="Clasificaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CLASIFICACION", referencedColumnName="ID_CLASIFICACION")
     * })
     */
    private $idClasificacion;

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
     * @var \Fechas
     *
     * @ORM\ManyToOne(targetEntity="Fechas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FECHA", referencedColumnName="ID_FECHA")
     * })
     */
    private $idFecha;

    /**
     * @var \Categorias
     *
     * @ORM\ManyToOne(targetEntity="Categorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CATEGORIA", referencedColumnName="ID_CATEGORIA")
     * })
     */
    private $idCategoria;

    public function getIdVictoria(): ?int
    {
        return $this->idVictoria;
    }

    public function getIdClasificacion(): ?Clasificaciones
    {
        return $this->idClasificacion;
    }

    public function setIdClasificacion(?Clasificaciones $idClasificacion): self
    {
        $this->idClasificacion = $idClasificacion;

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

    public function getIdFecha(): ?Fechas
    {
        return $this->idFecha;
    }

    public function setIdFecha(?Fechas $idFecha): self
    {
        $this->idFecha = $idFecha;

        return $this;
    }

    public function getIdCategoria(): ?Categorias
    {
        return $this->idCategoria;
    }

    public function setIdCategoria(?Categorias $idCategoria): self
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }


}
