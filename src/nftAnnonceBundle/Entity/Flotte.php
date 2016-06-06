<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flotte
 *
 * @ORM\Table(name="flotte")
 * @ORM\Entity
 */
class Flotte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="flotte_id_fl_seq", allocationSize=1, initialValue=1)
     */
    private $idFl;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_fl", type="string", nullable=true)
     */
    private $libelleFl;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_logo_fl", type="string", nullable=true)
     */
    private $lienLogoFl;



    /**
     * Get idFl
     *
     * @return integer 
     */
    public function getIdFl()
    {
        return $this->idFl;
    }

    /**
     * Set libelleFl
     *
     * @param string $libelleFl
     * @return Flotte
     */
    public function setLibelleFl($libelleFl)
    {
        $this->libelleFl = $libelleFl;

        return $this;
    }

    /**
     * Get libelleFl
     *
     * @return string 
     */
    public function getLibelleFl()
    {
        return $this->libelleFl;
    }

    /**
     * Set lienLogoFl
     *
     * @param string $lienLogoFl
     * @return Flotte
     */
    public function setLienLogoFl($lienLogoFl)
    {
        $this->lienLogoFl = $lienLogoFl;

        return $this;
    }

    /**
     * Get lienLogoFl
     *
     * @return string 
     */
    public function getLienLogoFl()
    {
        return $this->lienLogoFl;
    }
}
