<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimientoinventario
 *
 * @ORM\Table(name="movimientoinventario", indexes={@ORM\Index(name="FK_RELATIONSHIP_22", columns={"IDINSUMO"})})
 * @ORM\Entity
 */
class Movimientoinventario
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
     * @ORM\Column(name="TIPOMOVIMIENTO", type="string", length=100, nullable=true)
     */
    private $tipomovimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAEMISION", type="datetime", nullable=false)
     */
    private $fechaemision = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAENTREGA", type="datetime", nullable=false)
     */
    private $fechaentrega = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="REFERENCIA", type="string", length=250, nullable=true)
     */
    private $referencia;

    /**
     * @var \Insumoacademico
     *
     * @ORM\ManyToOne(targetEntity="Insumoacademico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDINSUMO", referencedColumnName="IDINSUMO")
     * })
     */
    private $idinsumo;



    /**
     * Set tipomovimiento
     *
     * @param string $tipomovimiento
     *
     * @return Movimientoinventario
     */
    public function setTipomovimiento($tipomovimiento)
    {
        $this->tipomovimiento = $tipomovimiento;

        return $this;
    }

    /**
     * Get tipomovimiento
     *
     * @return string
     */
    public function getTipomovimiento()
    {
        return $this->tipomovimiento;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     *
     * @return Movimientoinventario
     */
    public function setFechaemision($fechaemision)
    {
        $this->fechaemision = $fechaemision;

        return $this;
    }

    /**
     * Get fechaemision
     *
     * @return \DateTime
     */
    public function getFechaemision()
    {
        return $this->fechaemision;
    }

    /**
     * Set fechaentrega
     *
     * @param \DateTime $fechaentrega
     *
     * @return Movimientoinventario
     */
    public function setFechaentrega($fechaentrega)
    {
        $this->fechaentrega = $fechaentrega;

        return $this;
    }

    /**
     * Get fechaentrega
     *
     * @return \DateTime
     */
    public function getFechaentrega()
    {
        return $this->fechaentrega;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     *
     * @return Movimientoinventario
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
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
     * Set idinsumo
     *
     * @param \AppBundle\Entity\Insumoacademico $idinsumo
     *
     * @return Movimientoinventario
     */
    public function setIdinsumo(\AppBundle\Entity\Insumoacademico $idinsumo = null)
    {
        $this->idinsumo = $idinsumo;

        return $this;
    }

    /**
     * Get idinsumo
     *
     * @return \AppBundle\Entity\Insumoacademico
     */
    public function getIdinsumo()
    {
        return $this->idinsumo;
    }
}
