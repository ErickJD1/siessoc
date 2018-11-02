<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad", indexes={@ORM\Index(name="FK_RELATIONSHIP_32", columns={"IDREQUISITO"})})
 * @ORM\Entity
 */
class Actividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDACTIVIDAD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactividad;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMACTIVIDAD", type="string", length=100, nullable=true)
     */
    private $nomactividad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAACTIVIDAD", type="date", nullable=true)
     */
    private $fechaactividad;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONACTIVIDAD", type="string", length=250, nullable=true)
     */
    private $descripcionactividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="VALIDACION", type="smallint", nullable=true)
     */
    private $validacion;

    /**
     * @var string
     *
     * @ORM\Column(name="BECARIO", type="string", length=100, nullable=true)
     */
    private $becario;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var \Requisito
     *
     * @ORM\ManyToOne(targetEntity="Requisito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDREQUISITO", referencedColumnName="IDREQUISITO")
     * })
     */
    private $idrequisito;



    /**
     * Set nomactividad
     *
     * @param string $nomactividad
     *
     * @return Actividad
     */
    public function setNomactividad($nomactividad)
    {
        $this->nomactividad = $nomactividad;

        return $this;
    }

    /**
     * Get nomactividad
     *
     * @return string
     */
    public function getNomactividad()
    {
        return $this->nomactividad;
    }

    /**
     * Set fechaactividad
     *
     * @param \DateTime $fechaactividad
     *
     * @return Actividad
     */
    public function setFechaactividad($fechaactividad)
    {
        $this->fechaactividad = $fechaactividad;

        return $this;
    }

    /**
     * Get fechaactividad
     *
     * @return \DateTime
     */
    public function getFechaactividad()
    {
        return $this->fechaactividad;
    }

    /**
     * Set descripcionactividad
     *
     * @param string $descripcionactividad
     *
     * @return Actividad
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
     * Set validacion
     *
     * @param integer $validacion
     *
     * @return Actividad
     */
    public function setValidacion($validacion)
    {
        $this->validacion = $validacion;

        return $this;
    }

    /**
     * Get validacion
     *
     * @return integer
     */
    public function getValidacion()
    {
        return $this->validacion;
    }

    /**
     * Set becario
     *
     * @param string $becario
     *
     * @return Actividad
     */
    public function setBecario($becario)
    {
        $this->becario = $becario;

        return $this;
    }

    /**
     * Get becario
     *
     * @return string
     */
    public function getBecario()
    {
        return $this->becario;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Actividad
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
     * Get idactividad
     *
     * @return integer
     */
    public function getIdactividad()
    {
        return $this->idactividad;
    }

    /**
     * Set idrequisito
     *
     * @param \AppBundle\Entity\Requisito $idrequisito
     *
     * @return Actividad
     */
    public function setIdrequisito(\AppBundle\Entity\Requisito $idrequisito = null)
    {
        $this->idrequisito = $idrequisito;

        return $this;
    }

    /**
     * Get idrequisito
     *
     * @return \AppBundle\Entity\Requisito
     */
    public function getIdrequisito()
    {
        return $this->idrequisito;
    }
    public function __toString(){
        // to show the name of the Category in the select
        return $this->nombre;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
