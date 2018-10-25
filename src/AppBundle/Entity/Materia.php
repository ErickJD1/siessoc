<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table(name="materia")
 * @ORM\Entity
 */
class Materia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDMATERIA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmateria;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="UNIDADESVALORATIVAS", type="integer", nullable=true)
     */
    private $unidadesvalorativas;

    /**
     * @var float
     *
     * @ORM\Column(name="NOTA", type="float", precision=10, scale=0, nullable=true)
     */
    private $nota;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Materia
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
     * Set unidadesvalorativas
     *
     * @param integer $unidadesvalorativas
     *
     * @return Materia
     */
    public function setUnidadesvalorativas($unidadesvalorativas)
    {
        $this->unidadesvalorativas = $unidadesvalorativas;

        return $this;
    }

    /**
     * Get unidadesvalorativas
     *
     * @return integer
     */
    public function getUnidadesvalorativas()
    {
        return $this->unidadesvalorativas;
    }

    /**
     * Set nota
     *
     * @param float $nota
     *
     * @return Materia
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return float
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set anio
     *
     * @param \DateTime $anio
     *
     * @return Materia
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
     * @return Materia
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
     * Get idmateria
     *
     * @return integer
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }
}
