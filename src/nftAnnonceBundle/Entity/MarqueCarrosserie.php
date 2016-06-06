<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarqueCarrosserie
 *
 * @ORM\Table(name="marque_carrosserie")
 * @ORM\Entity
 */
class MarqueCarrosserie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="marque_carrosserie_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_mc", type="string", nullable=true)
     */
    private $libelleMc;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelleMc
     *
     * @param string $libelleMc
     * @return MarqueCarrosserie
     */
    public function setLibelleMc($libelleMc)
    {
        $this->libelleMc = $libelleMc;

        return $this;
    }

    /**
     * Get libelleMc
     *
     * @return string 
     */
    public function getLibelleMc()
    {
        return $this->libelleMc;
    }
}
