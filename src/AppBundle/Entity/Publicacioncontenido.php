<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicacioncontenido
 *
 * @ORM\Table(name="publicacioncontenido")
 * @ORM\Entity
 */
class Publicacioncontenido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCONTENIDO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontenido;

    /**
     * @var string
     *
     * @ORM\Column(name="TITULO", type="string", length=250, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTITULO", type="string", length=250, nullable=true)
     */
    private $subtitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAPUBLICACION", type="date", nullable=true)
     */
    private $fechapublicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Publicacioncontenido
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
     * Set subtitulo
     *
     * @param string $subtitulo
     *
     * @return Publicacioncontenido
     */
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * Get subtitulo
     *
     * @return string
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Publicacioncontenido
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
     * Set fechapublicacion
     *
     * @param \DateTime $fechapublicacion
     *
     * @return Publicacioncontenido
     */
    public function setFechapublicacion($fechapublicacion)
    {
        $this->fechapublicacion = $fechapublicacion;

        return $this;
    }

    /**
     * Get fechapublicacion
     *
     * @return \DateTime
     */
    public function getFechapublicacion()
    {
        return $this->fechapublicacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Publicacioncontenido
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
     * Get idcontenido
     *
     * @return integer
     */
    public function getIdcontenido()
    {
        return $this->idcontenido;
    }
}
