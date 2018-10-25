<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permiso
 *
 * @ORM\Table(name="permiso")
 * @ORM\Entity
 */
class Permiso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDPERMISO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpermiso;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMPERMISO", type="string", length=15, nullable=true)
     */
    private $nompermiso;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Set nompermiso
     *
     * @param string $nompermiso
     *
     * @return Permiso
     */
    public function setNompermiso($nompermiso)
    {
        $this->nompermiso = $nompermiso;

        return $this;
    }

    /**
     * Get nompermiso
     *
     * @return string
     */
    public function getNompermiso()
    {
        return $this->nompermiso;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Permiso
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
     * Set estado
     *
     * @param integer $estado
     *
     * @return Permiso
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
     * Get idpermiso
     *
     * @return integer
     */
    public function getIdpermiso()
    {
        return $this->idpermiso;
    }
}
