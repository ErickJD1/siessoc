<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimiento
 *
 * @ORM\Table(name="movimiento", indexes={@ORM\Index(name="FK_RELATIONSHIP_13", columns={"IDTIPOMOV"}), @ORM\Index(name="FK_RELATIONSHIP_15", columns={"IDCUENTA"})})
 * @ORM\Entity
 */
class Movimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDMOV", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmov;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO", type="decimal", precision=20, scale=0, nullable=true)
     */
    private $monto;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var \Tipomovimiento
     *
     * @ORM\ManyToOne(targetEntity="Tipomovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTIPOMOV", referencedColumnName="IDTIPOMOV")
     * })
     */
    private $idtipomov;

    /**
     * @var \Cuenta
     *
     * @ORM\ManyToOne(targetEntity="Cuenta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCUENTA", referencedColumnName="IDCUENTA")
     * })
     */
    private $idcuenta;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Movimiento
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
     * Set monto
     *
     * @param string $monto
     *
     * @return Movimiento
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Movimiento
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
     * Get idmov
     *
     * @return integer
     */
    public function getIdmov()
    {
        return $this->idmov;
    }

    /**
     * Set idcuenta
     *
     * @param \AppBundle\Entity\Cuenta $idcuenta
     *
     * @return Movimiento
     */
    public function setIdcuenta(\AppBundle\Entity\Cuenta $idcuenta = null)
    {
        $this->idcuenta = $idcuenta;

        return $this;
    }

    /**
     * Get idcuenta
     *
     * @return \AppBundle\Entity\Cuenta
     */
    public function getIdcuenta()
    {
        return $this->idcuenta;
    }

    /**
     * Set idtipomov
     *
     * @param \AppBundle\Entity\Tipomovimiento $idtipomov
     *
     * @return Movimiento
     */
    public function setIdtipomov(\AppBundle\Entity\Tipomovimiento $idtipomov = null)
    {
        $this->idtipomov = $idtipomov;

        return $this;
    }

    /**
     * Get idtipomov
     *
     * @return \AppBundle\Entity\Tipomovimiento
     */
    public function getIdtipomov()
    {
        return $this->idtipomov;
    }
}
