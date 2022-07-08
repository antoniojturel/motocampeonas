<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votos
 *
 * @ORM\Table(name="votos", indexes={@ORM\Index(name="ID_MARCA", columns={"ID_MARCA"}), @ORM\Index(name="ID_FECHA", columns={"ID_FECHA"}), @ORM\Index(name="ID_CATEGORIA", columns={"ID_CATEGORIA"}), @ORM\Index(name="ID_CLASIFICACION", columns={"ID_CLASIFICACION"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\VotosRepository")
 */
class Votos
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_VOTO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVoto;

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
     * @var \Clasificaciones
     *
     * @ORM\ManyToOne(targetEntity="Clasificaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CLASIFICACION", referencedColumnName="ID_CLASIFICACION")
     * })
     */
    private $idClasificacion;

    public function getIdVoto(): ?int
    {
        return $this->idVoto;
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

    public function getIdMarca(): ?Marcas
    {
        return $this->idMarca;
    }

    public function setIdMarca(?Marcas $idMarca): self
    {
        $this->idMarca = $idMarca;

        return $this;
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


}
