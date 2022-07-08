<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marcas
 *
 * @ORM\Table(name="marcas", indexes={@ORM\Index(name="ID_PAIS", columns={"ID_PAIS"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\MarcasRepository")
 */
class Marcas
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MARCA", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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

    public function getIdMarca(): ?string
    {
        return $this->idMarca;
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
