<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cheque
 *
 * @ORM\Table(name="cheque")
 * @ORM\Entity
 */
class Cheque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCHEQUE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcheque;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO", type="string", length=25, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="DESTINATARIO", type="string", length=50, nullable=true)
     */
    private $destinatario;

    /**
     * @var string
     *
     * @ORM\Column(name="BANCO", type="string", length=250, nullable=true)
     */
    private $banco;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAVENCIMIENTO", type="date", nullable=true)
     */
    private $fechavencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=25, nullable=true)
     */
    private $estado;



    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Cheque
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set monto
     *
     * @param string $monto
     *
     * @return Cheque
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
     * Set destinatario
     *
     * @param string $destinatario
     *
     * @return Cheque
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return string
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Set banco
     *
     * @param string $banco
     *
     * @return Cheque
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
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     *
     * @return Cheque
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Cheque
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get idcheque
     *
     * @return integer
     */
    public function getIdcheque()
    {
        return $this->idcheque;
    }
}
