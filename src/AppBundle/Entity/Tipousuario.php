<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipousuario
 *
 * @ORM\Table(name="tipousuario")
 * @ORM\Entity
 */
class Tipousuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTIPOUSUARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipousuario;

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
     * @return Tipousuario
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
     * @return Tipousuario
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
     * @return Tipousuario
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
     * Get idtipousuario
     *
     * @return integer
     */
    public function getIdtipousuario()
    {
        return $this->idtipousuario;
    }
}
