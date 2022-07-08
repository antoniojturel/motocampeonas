<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clasificaciones
 *
 * @ORM\Table(name="clasificaciones", uniqueConstraints={@ORM\UniqueConstraint(name="ID_CLASIFICACION", columns={"ID_CLASIFICACION"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ClasificacionesRepository")
 */
class Clasificaciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CLASIFICACION", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasificacion;

    public function getIdClasificacion(): ?string
    {
        return $this->idClasificacion;
    }


}
