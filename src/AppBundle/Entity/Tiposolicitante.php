<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposolicitante
 *
 * @ORM\Table(name="tiposolicitante")
 * @ORM\Entity
 */
class Tiposolicitante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTIPOSOLICITANTE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtiposolicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=25, nullable=true)
     */
    private $nombre;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tiposolicitante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tiposolicitante
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
     * @return Tiposolicitante
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
     * Get idtiposolicitante
     *
     * @return integer
     */
    public function getIdtiposolicitante()
    {
        return $this->idtiposolicitante;
    }
}
