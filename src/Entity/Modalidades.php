<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modalidades
 *
 * @ORM\Table(name="modalidades")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ModalidadesRepository")
 */
class Modalidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MODALIDAD", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModalidad;

    public function getIdModalidad(): ?string
    {
        return $this->idModalidad;
    }


}
