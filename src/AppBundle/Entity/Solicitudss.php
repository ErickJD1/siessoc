<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudss
 *
 * @ORM\Table(name="solicitudss")
 * @ORM\Entity
 */
class Solicitudss
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDSSS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsss;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREPROYECTO", type="string", length=250, nullable=true)
     */
    private $nombreproyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ENCARGADO", type="string", length=50, nullable=true)
     */
    private $encargado;

    /**
     * @var string
     *
     * @ORM\Column(name="LUGAR", type="string", length=100, nullable=true)
     */
    private $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=15, nullable=true)
     */
    private $estado;



    /**
     * Set nombreproyecto
     *
     * @param string $nombreproyecto
     *
     * @return Solicitudss
     */
    public function setNombreproyecto($nombreproyecto)
    {
        $this->nombreproyecto = $nombreproyecto;

        return $this;
    }

    /**
     * Get nombreproyecto
     *
     * @return string
     */
    public function getNombreproyecto()
    {
        return $this->nombreproyecto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Solicitudss
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
     * Set encargado
     *
     * @param string $encargado
     *
     * @return Solicitudss
     */
    public function setEncargado($encargado)
    {
        $this->encargado = $encargado;

        return $this;
    }

    /**
     * Get encargado
     *
     * @return string
     */
    public function getEncargado()
    {
        return $this->encargado;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Solicitudss
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Solicitudss
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get idsss
     *
     * @return integer
     */
    public function getIdsss()
    {
        return $this->idsss;
    }


public function __toString(){
    // to show the name of the Category in the select
    return $this->nombreproyecto;
    // to show the id of the Category in the select
    // return $this->id;
}
}
