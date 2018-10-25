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
     * @var string
     *
     * @ORM\Column(name="DETALLESSS", type="string", length=250, nullable=true)
     */
    private $detallesss;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAINICIO", type="datetime", nullable=false)
     */
    private $fechainicio = 'CURRENT_TIMESTAMP';

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
     * @ORM\Column(name="DESCRIPCIONACTIVIDAD", type="string", length=250, nullable=true)
     */
    private $descripcionactividad;

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
     * Set detallesss
     *
     * @param string $detallesss
     *
     * @return Bitacora
     */
    public function setDetallesss($detallesss)
    {
        $this->detallesss = $detallesss;

        return $this;
    }

    /**
     * Get detallesss
     *
     * @return string
     */
    public function getDetallesss()
    {
        return $this->detallesss;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return Bitacora
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

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
     * Set descripcionactividad
     *
     * @param string $descripcionactividad
     *
     * @return Bitacora
     */
    public function setDescripcionactividad($descripcionactividad)
    {
        $this->descripcionactividad = $descripcionactividad;

        return $this;
    }

    /**
     * Get descripcionactividad
     *
     * @return string
     */
    public function getDescripcionactividad()
    {
        return $this->descripcionactividad;
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
