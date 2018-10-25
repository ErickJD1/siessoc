<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Insumoacademico
 *
 * @ORM\Table(name="insumoacademico", indexes={@ORM\Index(name="FK_RELATIONSHIP_21", columns={"IDINV"})})
 * @ORM\Entity
 */
class Insumoacademico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDINSUMO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMINSUMO", type="string", length=150, nullable=true)
     */
    private $nominsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="DISCRIPCIONINSUMO", type="string", length=250, nullable=true)
     */
    private $discripcioninsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPOINSUMO", type="string", length=25, nullable=true)
     */
    private $tipoinsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMTIPOINSUMO", type="string", length=150, nullable=true)
     */
    private $nomtipoinsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONTIPO", type="string", length=250, nullable=true)
     */
    private $descripciontipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var \Inventario
     *
     * @ORM\ManyToOne(targetEntity="Inventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDINV", referencedColumnName="IDINV")
     * })
     */
    private $idinv;



    /**
     * Set nominsumo
     *
     * @param string $nominsumo
     *
     * @return Insumoacademico
     */
    public function setNominsumo($nominsumo)
    {
        $this->nominsumo = $nominsumo;

        return $this;
    }

    /**
     * Get nominsumo
     *
     * @return string
     */
    public function getNominsumo()
    {
        return $this->nominsumo;
    }

    /**
     * Set discripcioninsumo
     *
     * @param string $discripcioninsumo
     *
     * @return Insumoacademico
     */
    public function setDiscripcioninsumo($discripcioninsumo)
    {
        $this->discripcioninsumo = $discripcioninsumo;

        return $this;
    }

    /**
     * Get discripcioninsumo
     *
     * @return string
     */
    public function getDiscripcioninsumo()
    {
        return $this->discripcioninsumo;
    }

    /**
     * Set tipoinsumo
     *
     * @param string $tipoinsumo
     *
     * @return Insumoacademico
     */
    public function setTipoinsumo($tipoinsumo)
    {
        $this->tipoinsumo = $tipoinsumo;

        return $this;
    }

    /**
     * Get tipoinsumo
     *
     * @return string
     */
    public function getTipoinsumo()
    {
        return $this->tipoinsumo;
    }

    /**
     * Set nomtipoinsumo
     *
     * @param string $nomtipoinsumo
     *
     * @return Insumoacademico
     */
    public function setNomtipoinsumo($nomtipoinsumo)
    {
        $this->nomtipoinsumo = $nomtipoinsumo;

        return $this;
    }

    /**
     * Get nomtipoinsumo
     *
     * @return string
     */
    public function getNomtipoinsumo()
    {
        return $this->nomtipoinsumo;
    }

    /**
     * Set descripciontipo
     *
     * @param string $descripciontipo
     *
     * @return Insumoacademico
     */
    public function setDescripciontipo($descripciontipo)
    {
        $this->descripciontipo = $descripciontipo;

        return $this;
    }

    /**
     * Get descripciontipo
     *
     * @return string
     */
    public function getDescripciontipo()
    {
        return $this->descripciontipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Insumoacademico
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
     * Get idinsumo
     *
     * @return integer
     */
    public function getIdinsumo()
    {
        return $this->idinsumo;
    }

    /**
     * Set idinv
     *
     * @param \AppBundle\Entity\Inventario $idinv
     *
     * @return Insumoacademico
     */
    public function setIdinv(\AppBundle\Entity\Inventario $idinv = null)
    {
        $this->idinv = $idinv;

        return $this;
    }

    /**
     * Get idinv
     *
     * @return \AppBundle\Entity\Inventario
     */
    public function getIdinv()
    {
        return $this->idinv;
    }
}
