<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDPERSONA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersona;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=25, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="string", length=25, nullable=true)
     */
    private $apellidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHANACIMIENTO", type="date", nullable=true)
     */
    private $fechanacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="DUI", type="string", length=10, nullable=true)
     */
    private $dui;

    /**
     * @var string
     *
     * @ORM\Column(name="NIT", type="string", length=20, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="PASAPORTE", type="string", length=10, nullable=true)
     */
    private $pasaporte;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="string", length=25, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO", type="string", length=100, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="SEXO", type="string", length=10, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="string", length=250, nullable=true)
     */
    private $direccion;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Persona
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Persona
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
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     *
     * @return Persona
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set dui
     *
     * @param string $dui
     *
     * @return Persona
     */
    public function setDui($dui)
    {
        $this->dui = $dui;

        return $this;
    }

    /**
     * Get dui
     *
     * @return string
     */
    public function getDui()
    {
        return $this->dui;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return Persona
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set pasaporte
     *
     * @param string $pasaporte
     *
     * @return Persona
     */
    public function setPasaporte($pasaporte)
    {
        $this->pasaporte = $pasaporte;

        return $this;
    }

    /**
     * Get pasaporte
     *
     * @return string
     */
    public function getPasaporte()
    {
        return $this->pasaporte;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Persona
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
     * Set correo
     *
     * @param string $correo
     *
     * @return Persona
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
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Persona
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Persona
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Get idpersona
     *
     * @return integer
     */
    public function getIdpersona()
    {
        return $this->idpersona;
    }
}
