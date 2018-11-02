<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bitacora
 *
 * @ORM\Table(name="bitacora", indexes={@ORM\Index(name="FK_RELATIONSHIP_25", columns={"IDSSS"})})
 * @ORM\Entity
 */
class Bitacora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDBITACORA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbitacora;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HORAINICIO", type="time", nullable=true)
     */
    private $horainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HORAFIN", type="time", nullable=true)
     */
    private $horafin;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACION", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var \Solicitudss
     *
     * @ORM\ManyToOne(targetEntity="Solicitudss")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDSSS", referencedColumnName="IDSSS")
     * })
     */
    private $idsss;


    /**
     * Set horainicio
     *
     * @param \DateTime $horainicio
     *
     * @return Bitacora
     */
    public function setHorainicio($horainicio)
    {
        $this->horainicio = $horainicio;

        return $this;
    }

    /**
     * Get horainicio
     *
     * @return \DateTime
     */
    public function getHorainicio()
    {
        return $this->horainicio;
    }

    /**
     * Set horafin
     *
     * @param \DateTime $horafin
     *
     * @return Bitacora
     */
    public function setHorafin($horafin)
    {
        $this->horafin = $horafin;

        return $this;
    }

    /**
     * Get horafin
     *
     * @return \DateTime
     */
    public function getHorafin()
    {
        return $this->horafin;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Bitacora
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Bitacora
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
     * Get idbitacora
     *
     * @return integer
     */
    public function getIdbitacora()
    {
        return $this->idbitacora;
    }

    /**
     * Set idsss
     *
     * @param \AppBundle\Entity\Solicitudss $idsss
     *
     * @return Bitacora
     */
    public function setIdsss(\AppBundle\Entity\Solicitudss $idsss = null)
    {
        $this->idsss = $idsss;

        return $this;
    }

    /**
     * Get idsss
     *
     * @return \AppBundle\Entity\Solicitudss
     */
    public function getIdsss()
    {
        return $this->idsss;
    }
}
