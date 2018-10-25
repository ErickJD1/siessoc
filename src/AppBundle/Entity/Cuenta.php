<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuenta
 *
 * @ORM\Table(name="cuenta", indexes={@ORM\Index(name="FK_RELATIONSHIP_14", columns={"IDTIPOCUENTA"})})
 * @ORM\Entity
 */
class Cuenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCUENTA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMCUENTA", type="string", length=10, nullable=true)
     */
    private $numcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAAPERTURA", type="datetime", nullable=false)
     */
    private $fechaapertura = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="BANCO", type="string", length=250, nullable=true)
     */
    private $banco;

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
     * @var \Tipocuenta
     *
     * @ORM\ManyToOne(targetEntity="Tipocuenta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTIPOCUENTA", referencedColumnName="IDTIPOCUENTA")
     * })
     */
    private $idtipocuenta;



    /**
     * Set numcuenta
     *
     * @param string $numcuenta
     *
     * @return Cuenta
     */
    public function setNumcuenta($numcuenta)
    {
        $this->numcuenta = $numcuenta;

        return $this;
    }

    /**
     * Get numcuenta
     *
     * @return string
     */
    public function getNumcuenta()
    {
        return $this->numcuenta;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cuenta
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Cuenta
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
     * Set fechaapertura
     *
     * @param \DateTime $fechaapertura
     *
     * @return Cuenta
     */
    public function setFechaapertura($fechaapertura)
    {
        $this->fechaapertura = $fechaapertura;

        return $this;
    }

    /**
     * Get fechaapertura
     *
     * @return \DateTime
     */
    public function getFechaapertura()
    {
        return $this->fechaapertura;
    }

    /**
     * Set banco
     *
     * @param string $banco
     *
     * @return Cuenta
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     *
     * @return Cuenta
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
     * @return Cuenta
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
     * Get idcuenta
     *
     * @return integer
     */
    public function getIdcuenta()
    {
        return $this->idcuenta;
    }

    /**
     * Set idtipocuenta
     *
     * @param \AppBundle\Entity\Tipocuenta $idtipocuenta
     *
     * @return Cuenta
     */
    public function setIdtipocuenta(\AppBundle\Entity\Tipocuenta $idtipocuenta = null)
    {
        $this->idtipocuenta = $idtipocuenta;

        return $this;
    }

    /**
     * Get idtipocuenta
     *
     * @return \AppBundle\Entity\Tipocuenta
     */
    public function getIdtipocuenta()
    {
        return $this->idtipocuenta;
    }
}
