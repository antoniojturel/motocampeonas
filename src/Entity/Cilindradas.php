<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cilindradas
 *
 * @ORM\Table(name="cilindradas")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CilindradasRepository")
 */
class Cilindradas
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CILINDRADA", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCilindrada;

    public function getIdCilindrada(): ?string
    {
        return $this->idCilindrada;
    }


}
