<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colaboracionmonetaria
 *
 * @ORM\Table(name="colaboracionmonetaria")
 * @ORM\Entity
 */
class Colaboracionmonetaria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCOLABORACIONMONETARIA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcolaboracionmonetaria;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOMES", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montomes;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="SALDO", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Set montomes
     *
     * @param string $montomes
     *
     * @return Colaboracionmonetaria
     */
    public function setMontomes($montomes)
    {
        $this->montomes = $montomes;

        return $this;
    }

    /**
     * Get montomes
     *
     * @return string
     */
    public function getMontomes()
    {
        return $this->montomes;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Colaboracionmonetaria
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
     * Set saldo
     *
     * @param string $saldo
     *
     * @return Colaboracionmonetaria
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Colaboracionmonetaria
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
     * Get idcolaboracionmonetaria
     *
     * @return integer
     */
    public function getIdcolaboracionmonetaria()
    {
        return $this->idcolaboracionmonetaria;
    }
}
