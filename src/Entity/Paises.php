<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paises
 *
 * @ORM\Table(name="paises")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\PaisesRepository")
 */
class Paises
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_PAIS", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPais;

    public function getIdPais(): ?string
    {
        return $this->idPais;
    }


}
