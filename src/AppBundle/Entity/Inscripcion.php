<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscripcion
 *
 * @ORM\Table(name="inscripcion")
 * @ORM\Entity
 */
class Inscripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDINSCRIPCION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinscripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODEXPEDIENTE", type="integer", nullable=true)
     */
    private $codexpediente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ANIO", type="date", nullable=true)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMCICLO", type="integer", nullable=true)
     */
    private $numciclo;

    /**
     * @var float
     *
     * @ORM\Column(name="PRECIOMATRICULA", type="float", precision=10, scale=0, nullable=true)
     */
    private $preciomatricula;

    /**
     * @var float
     *
     * @ORM\Column(name="PRECIOMENSUALIDAD", type="float", precision=10, scale=0, nullable=true)
     */
    private $preciomensualidad;



    /**
     * Set codexpediente
     *
     * @param integer $codexpediente
     *
     * @return Inscripcion
     */
    public function setCodexpediente($codexpediente)
    {
        $this->codexpediente = $codexpediente;

        return $this;
    }

    /**
     * Get codexpediente
     *
     * @return integer
     */
    public function getCodexpediente()
    {
        return $this->codexpediente;
    }

    /**
     * Set anio
     *
     * @param \DateTime $anio
     *
     * @return Inscripcion
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return \DateTime
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set numciclo
     *
     * @param integer $numciclo
     *
     * @return Inscripcion
     */
    public function setNumciclo($numciclo)
    {
        $this->numciclo = $numciclo;

        return $this;
    }

    /**
     * Get numciclo
     *
     * @return integer
     */
    public function getNumciclo()
    {
        return $this->numciclo;
    }

    /**
     * Set preciomatricula
     *
     * @param float $preciomatricula
     *
     * @return Inscripcion
     */
    public function setPreciomatricula($preciomatricula)
    {
        $this->preciomatricula = $preciomatricula;

        return $this;
    }

    /**
     * Get preciomatricula
     *
     * @return float
     */
    public function getPreciomatricula()
    {
        return $this->preciomatricula;
    }

    /**
     * Set preciomensualidad
     *
     * @param float $preciomensualidad
     *
     * @return Inscripcion
     */
    public function setPreciomensualidad($preciomensualidad)
    {
        $this->preciomensualidad = $preciomensualidad;

        return $this;
    }

    /**
     * Get preciomensualidad
     *
     * @return float
     */
    public function getPreciomensualidad()
    {
        return $this->preciomensualidad;
    }

    /**
     * Get idinscripcion
     *
     * @return integer
     */
    public function getIdinscripcion()
    {
        return $this->idinscripcion;
    }
}
