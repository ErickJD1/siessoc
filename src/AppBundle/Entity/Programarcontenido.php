<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programarcontenido
 *
 * @ORM\Table(name="programarcontenido", indexes={@ORM\Index(name="FK_RELATIONSHIP_12", columns={"IDCONTENIDO"})})
 * @ORM\Entity
 */
class Programarcontenido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDPROGRAMACION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprogramacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HORA", type="time", nullable=true)
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Publicacioncontenido
     *
     * @ORM\ManyToOne(targetEntity="Publicacioncontenido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCONTENIDO", referencedColumnName="IDCONTENIDO")
     * })
     */
    private $idcontenido;



    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Programarcontenido
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
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Programarcontenido
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Programarcontenido
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
     * Get idprogramacion
     *
     * @return integer
     */
    public function getIdprogramacion()
    {
        return $this->idprogramacion;
    }

    /**
     * Set idcontenido
     *
     * @param \AppBundle\Entity\Publicacioncontenido $idcontenido
     *
     * @return Programarcontenido
     */
    public function setIdcontenido(\AppBundle\Entity\Publicacioncontenido $idcontenido = null)
    {
        $this->idcontenido = $idcontenido;

        return $this;
    }

    /**
     * Get idcontenido
     *
     * @return \AppBundle\Entity\Publicacioncontenido
     */
    public function getIdcontenido()
    {
        return $this->idcontenido;
    }
}
