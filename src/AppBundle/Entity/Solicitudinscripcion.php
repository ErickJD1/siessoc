<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudinscripcion
 *
 * @ORM\Table(name="solicitudinscripcion", indexes={@ORM\Index(name="FK_RELATIONSHIP_9", columns={"IDTIPOSOLICITANTE"})})
 * @ORM\Entity
 */
class Solicitudinscripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDSOLICITUD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRES", type="string", length=25, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="string", length=25, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO", type="string", length=100, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="string", length=10, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESOSFAMILIARES", type="decimal", precision=25, scale=0, nullable=true)
     */
    private $ingresosfamiliares;

    /**
     * @var integer
     *
     * @ORM\Column(name="MIEMBROSFAMILIARES", type="integer", nullable=true)
     */
    private $miembrosfamiliares;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPOCASA", type="string", length=100, nullable=true)
     */
    private $tipocasa;

    /**
     * @var string
     *
     * @ORM\Column(name="CARRERAESTUDIAR", type="string", length=100, nullable=true)
     */
    private $carreraestudiar;

    /**
     * @var string
     *
     * @ORM\Column(name="UNIVERSIDAD", type="string", length=100, nullable=true)
     */
    private $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOMATRICULA", type="decimal", precision=20, scale=0, nullable=true)
     */
    private $montomatricula;

    /**
     * @var string
     *
     * @ORM\Column(name="CUOTAMENSUAL", type="string", length=20, nullable=true)
     */
    private $cuotamensual;

    /**
     * @var string
     *
     * @ORM\Column(name="DURACIONCARRERA", type="string", length=10, nullable=true)
     */
    private $duracioncarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="TRABAJOADICIONAL", type="string", length=2, nullable=true)
     */
    private $trabajoadicional;

    /**
     * @var string
     *
     * @ORM\Column(name="CUOTAMESAPORTAR", type="decimal", precision=20, scale=0, nullable=true)
     */
    private $cuotamesaportar;

    /**
     * @var integer
     *
     * @ORM\Column(name="MESESCOMPROMISO", type="integer", nullable=true)
     */
    private $mesescompromiso;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var \Tiposolicitante
     *
     * @ORM\ManyToOne(targetEntity="Tiposolicitante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTIPOSOLICITANTE", referencedColumnName="IDTIPOSOLICITANTE")
     * })
     */
    private $idtiposolicitante;



    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Solicitudinscripcion
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Solicitudinscripcion
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return Solicitudinscripcion
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Solicitudinscripcion
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set ingresosfamiliares
     *
     * @param string $ingresosfamiliares
     *
     * @return Solicitudinscripcion
     */
    public function setIngresosfamiliares($ingresosfamiliares)
    {
        $this->ingresosfamiliares = $ingresosfamiliares;

        return $this;
    }

    /**
     * Get ingresosfamiliares
     *
     * @return string
     */
    public function getIngresosfamiliares()
    {
        return $this->ingresosfamiliares;
    }

    /**
     * Set miembrosfamiliares
     *
     * @param integer $miembrosfamiliares
     *
     * @return Solicitudinscripcion
     */
    public function setMiembrosfamiliares($miembrosfamiliares)
    {
        $this->miembrosfamiliares = $miembrosfamiliares;

        return $this;
    }

    /**
     * Get miembrosfamiliares
     *
     * @return integer
     */
    public function getMiembrosfamiliares()
    {
        return $this->miembrosfamiliares;
    }

    /**
     * Set tipocasa
     *
     * @param string $tipocasa
     *
     * @return Solicitudinscripcion
     */
    public function setTipocasa($tipocasa)
    {
        $this->tipocasa = $tipocasa;

        return $this;
    }

    /**
     * Get tipocasa
     *
     * @return string
     */
    public function getTipocasa()
    {
        return $this->tipocasa;
    }

    /**
     * Set carreraestudiar
     *
     * @param string $carreraestudiar
     *
     * @return Solicitudinscripcion
     */
    public function setCarreraestudiar($carreraestudiar)
    {
        $this->carreraestudiar = $carreraestudiar;

        return $this;
    }

    /**
     * Get carreraestudiar
     *
     * @return string
     */
    public function getCarreraestudiar()
    {
        return $this->carreraestudiar;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     *
     * @return Solicitudinscripcion
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
     * Set montomatricula
     *
     * @param string $montomatricula
     *
     * @return Solicitudinscripcion
     */
    public function setMontomatricula($montomatricula)
    {
        $this->montomatricula = $montomatricula;

        return $this;
    }

    /**
     * Get montomatricula
     *
     * @return string
     */
    public function getMontomatricula()
    {
        return $this->montomatricula;
    }

    /**
     * Set cuotamensual
     *
     * @param string $cuotamensual
     *
     * @return Solicitudinscripcion
     */
    public function setCuotamensual($cuotamensual)
    {
        $this->cuotamensual = $cuotamensual;

        return $this;
    }

    /**
     * Get cuotamensual
     *
     * @return string
     */
    public function getCuotamensual()
    {
        return $this->cuotamensual;
    }

    /**
     * Set duracioncarrera
     *
     * @param string $duracioncarrera
     *
     * @return Solicitudinscripcion
     */
    public function setDuracioncarrera($duracioncarrera)
    {
        $this->duracioncarrera = $duracioncarrera;

        return $this;
    }

    /**
     * Get duracioncarrera
     *
     * @return string
     */
    public function getDuracioncarrera()
    {
        return $this->duracioncarrera;
    }

    /**
     * Set trabajoadicional
     *
     * @param string $trabajoadicional
     *
     * @return Solicitudinscripcion
     */
    public function setTrabajoadicional($trabajoadicional)
    {
        $this->trabajoadicional = $trabajoadicional;

        return $this;
    }

    /**
     * Get trabajoadicional
     *
     * @return string
     */
    public function getTrabajoadicional()
    {
        return $this->trabajoadicional;
    }

    /**
     * Set cuotamesaportar
     *
     * @param string $cuotamesaportar
     *
     * @return Solicitudinscripcion
     */
    public function setCuotamesaportar($cuotamesaportar)
    {
        $this->cuotamesaportar = $cuotamesaportar;

        return $this;
    }

    /**
     * Get cuotamesaportar
     *
     * @return string
     */
    public function getCuotamesaportar()
    {
        return $this->cuotamesaportar;
    }

    /**
     * Set mesescompromiso
     *
     * @param integer $mesescompromiso
     *
     * @return Solicitudinscripcion
     */
    public function setMesescompromiso($mesescompromiso)
    {
        $this->mesescompromiso = $mesescompromiso;

        return $this;
    }

    /**
     * Get mesescompromiso
     *
     * @return integer
     */
    public function getMesescompromiso()
    {
        return $this->mesescompromiso;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Solicitudinscripcion
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
     * Get idsolicitud
     *
     * @return integer
     */
    public function getIdsolicitud()
    {
        return $this->idsolicitud;
    }

    /**
     * Set idtiposolicitante
     *
     * @param \AppBundle\Entity\Tiposolicitante $idtiposolicitante
     *
     * @return Solicitudinscripcion
     */
    public function setIdtiposolicitante(\AppBundle\Entity\Tiposolicitante $idtiposolicitante = null)
    {
        $this->idtiposolicitante = $idtiposolicitante;

        return $this;
    }

    /**
     * Get idtiposolicitante
     *
     * @return \AppBundle\Entity\Tiposolicitante
     */
    public function getIdtiposolicitante()
    {
        return $this->idtiposolicitante;
    }
}
