<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pays_id_pa_seq", allocationSize=1, initialValue=1)
     */
    private $idPa;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pa", type="string", length=50, nullable=true)
     */
    private $nomPa;

    /**
     * @var string
     *
     * @ORM\Column(name="shape_leng_pa", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $shapeLengPa;

    /**
     * @var string
     *
     * @ORM\Column(name="shape_area_pa", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $shapeAreaPa;



    /**
     * Get idPa
     *
     * @return integer 
     */
    public function getIdPa()
    {
        return $this->idPa;
    }

    /**
     * Set nomPa
     *
     * @param string $nomPa
     * @return Pays
     */
    public function setNomPa($nomPa)
    {
        $this->nomPa = $nomPa;

        return $this;
    }

    /**
     * Get nomPa
     *
     * @return string 
     */
    public function getNomPa()
    {
        return $this->nomPa;
    }

    /**
     * Set shapeLengPa
     *
     * @param string $shapeLengPa
     * @return Pays
     */
    public function setShapeLengPa($shapeLengPa)
    {
        $this->shapeLengPa = $shapeLengPa;

        return $this;
    }

    /**
     * Get shapeLengPa
     *
     * @return string 
     */
    public function getShapeLengPa()
    {
        return $this->shapeLengPa;
    }

    /**
     * Set shapeAreaPa
     *
     * @param string $shapeAreaPa
     * @return Pays
     */
    public function setShapeAreaPa($shapeAreaPa)
    {
        $this->shapeAreaPa = $shapeAreaPa;

        return $this;
    }

    /**
     * Get shapeAreaPa
     *
     * @return string 
     */
    public function getShapeAreaPa()
    {
        return $this->shapeAreaPa;
    }
}
