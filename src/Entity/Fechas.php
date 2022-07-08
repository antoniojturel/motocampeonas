<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fechas
 *
 * @ORM\Table(name="fechas")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\FechasRepository")
 */
class Fechas
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_FECHA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFecha;

    public function getIdFecha(): ?int
    {
        return $this->idFecha;
    }


}
