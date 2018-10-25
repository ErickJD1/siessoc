<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 *
 * @ORM\Table(name="carrera", indexes={@ORM\Index(name="FK_RELATIONSHIP_29", columns={"IDMATERIA"})})
 * @ORM\Entity
 */
class Carrera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCARRERA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCARRERA", type="string", length=100, nullable=true)
     */
    private $nomcarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="UNIVERSIDAD", type="string", length=250, nullable=true)
     */
    private $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="TITULO", type="string", length=250, nullable=true)
     */
    private $titulo;

    /**
     * @var \Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMATERIA", referencedColumnName="IDMATERIA")
     * })
     */
    private $idmateria;



    /**
     * Set nomcarrera
     *
     * @param string $nomcarrera
     *
     * @return Carrera
     */
    public function setNomcarrera($nomcarrera)
    {
        $this->nomcarrera = $nomcarrera;

        return $this;
    }

    /**
     * Get nomcarrera
     *
     * @return string
     */
    public function getNomcarrera()
    {
        return $this->nomcarrera;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Carrera
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
     * Set universidad
     *
     * @param string $universidad
     *
     * @return Carrera
     */
    public function setUniversidad($universidad)
    {
        $this->universidad = $universidad;

        return $this;
    }

    /**
     * Get universidad
     *
     * @return string
     */
    public function getUniversidad()
    {
        return $this->universidad;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Carrera
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Get idcarrera
     *
     * @return integer
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }

    /**
     * Set idmateria
     *
     * @param \AppBundle\Entity\Materia $idmateria
     *
     * @return Carrera
     */
    public function setIdmateria(\AppBundle\Entity\Materia $idmateria = null)
    {
        $this->idmateria = $idmateria;

        return $this;
    }

    /**
     * Get idmateria
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }
}
