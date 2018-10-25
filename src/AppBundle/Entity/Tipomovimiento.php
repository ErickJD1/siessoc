<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipomovimiento
 *
 * @ORM\Table(name="tipomovimiento")
 * @ORM\Entity
 */
class Tipomovimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTIPOMOV", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipomov;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRETIPO", type="string", length=50, nullable=true)
     */
    private $nombretipo;

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
     * Set nombretipo
     *
     * @param string $nombretipo
     *
     * @return Tipomovimiento
     */
    public function setNombretipo($nombretipo)
    {
        $this->nombretipo = $nombretipo;

        return $this;
    }

    /**
     * Get nombretipo
     *
     * @return string
     */
    public function getNombretipo()
    {
        return $this->nombretipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tipomovimiento
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
     * @return Tipomovimiento
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
     * Get idtipomov
     *
     * @return integer
     */
    public function getIdtipomov()
    {
        return $this->idtipomov;
    }
}
