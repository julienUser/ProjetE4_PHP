<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droits
 *
 * @ORM\Table(name="droits")
 * @ORM\Entity
 */
class Droits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="droits_id_dr_seq", allocationSize=1, initialValue=1)
     */
    private $idDr;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_dr", type="string", nullable=true)
     */
    private $libelleDr;



    /**
     * Get idDr
     *
     * @return integer 
     */
    public function getIdDr()
    {
        return $this->idDr;
    }

    /**
     * Set libelleDr
     *
     * @param string $libelleDr
     * @return Droits
     */
    public function setLibelleDr($libelleDr)
    {
        $this->libelleDr = $libelleDr;

        return $this;
    }

    /**
     * Get libelleDr
     *
     * @return string 
     */
    public function getLibelleDr()
    {
        return $this->libelleDr;
    }
}
