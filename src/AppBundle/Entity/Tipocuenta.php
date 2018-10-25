<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipocuenta
 *
 * @ORM\Table(name="tipocuenta")
 * @ORM\Entity
 */
class Tipocuenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTIPOCUENTA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipocuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRECUENTA", type="string", length=50, nullable=true)
     */
    private $nombrecuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Set nombrecuenta
     *
     * @param string $nombrecuenta
     *
     * @return Tipocuenta
     */
    public function setNombrecuenta($nombrecuenta)
    {
        $this->nombrecuenta = $nombrecuenta;

        return $this;
    }

    /**
     * Get nombrecuenta
     *
     * @return string
     */
    public function getNombrecuenta()
    {
        return $this->nombrecuenta;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tipocuenta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Tipocuenta
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get idtipocuenta
     *
     * @return integer
     */
    public function getIdtipocuenta()
    {
        return $this->idtipocuenta;
    }
}
