<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventario
 *
 * @ORM\Table(name="inventario")
 * @ORM\Entity
 */
class Inventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDINV", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinv;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREART", type="string", length=20, nullable=true)
     */
    private $nombreart;

    /**
     * @var float
     *
     * @ORM\Column(name="CANTDISPONIBLEART", type="float", precision=10, scale=0, nullable=true)
     */
    private $cantdisponibleart;

    /**
     * @var float
     *
     * @ORM\Column(name="CANTENTREGADOS", type="float", precision=10, scale=0, nullable=true)
     */
    private $cantentregados;



    /**
     * Set nombreart
     *
     * @param string $nombreart
     *
     * @return Inventario
     */
    public function setNombreart($nombreart)
    {
        $this->nombreart = $nombreart;

        return $this;
    }

    /**
     * Get nombreart
     *
     * @return string
     */
    public function getNombreart()
    {
        return $this->nombreart;
    }

    /**
     * Set cantdisponibleart
     *
     * @param float $cantdisponibleart
     *
     * @return Inventario
     */
    public function setCantdisponibleart($cantdisponibleart)
    {
        $this->cantdisponibleart = $cantdisponibleart;

        return $this;
    }

    /**
     * Get cantdisponibleart
     *
     * @return float
     */
    public function getCantdisponibleart()
    {
        return $this->cantdisponibleart;
    }

    /**
     * Set cantentregados
     *
     * @param float $cantentregados
     *
     * @return Inventario
     */
    public function setCantentregados($cantentregados)
    {
        $this->cantentregados = $cantentregados;

        return $this;
    }

    /**
     * Get cantentregados
     *
     * @return float
     */
    public function getCantentregados()
    {
        return $this->cantentregados;
    }

    /**
     * Get idinv
     *
     * @return integer
     */
    public function getIdinv()
    {
        return $this->idinv;
    }
}
