<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccioncolaboracion
 *
 * @ORM\Table(name="transaccioncolaboracion", indexes={@ORM\Index(name="FK_RELATIONSHIP_19", columns={"IDCOLABORACIONMONETARIA"})})
 * @ORM\Entity
 */
class Transaccioncolaboracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTRANSACCION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA", type="datetime", nullable=false)
     */
    private $fecha = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=200, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO", type="string", length=200, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $monto;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var \Colaboracionmonetaria
     *
     * @ORM\ManyToOne(targetEntity="Colaboracionmonetaria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCOLABORACIONMONETARIA", referencedColumnName="IDCOLABORACIONMONETARIA")
     * })
     */
    private $idcolaboracionmonetaria;



    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Transaccioncolaboracion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Transaccioncolaboracion
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Transaccioncolaboracion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set monto
     *
     * @param string $monto
     *
     * @return Transaccioncolaboracion
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
     * @return Transaccioncolaboracion
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
     * Get idtransaccion
     *
     * @return integer
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }

    /**
     * Set idcolaboracionmonetaria
     *
     * @param \AppBundle\Entity\Colaboracionmonetaria $idcolaboracionmonetaria
     *
     * @return Transaccioncolaboracion
     */
    public function setIdcolaboracionmonetaria(\AppBundle\Entity\Colaboracionmonetaria $idcolaboracionmonetaria = null)
    {
        $this->idcolaboracionmonetaria = $idcolaboracionmonetaria;

        return $this;
    }

    /**
     * Get idcolaboracionmonetaria
     *
     * @return \AppBundle\Entity\Colaboracionmonetaria
     */
    public function getIdcolaboracionmonetaria()
    {
        return $this->idcolaboracionmonetaria;
    }
}
