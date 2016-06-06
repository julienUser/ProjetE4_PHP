<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatAnnonce
 *
 * @ORM\Table(name="etat_annonce")
 * @ORM\Entity
 */
class EtatAnnonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="etat_annonce_id_ea_seq", allocationSize=1, initialValue=1)
     */
    private $idEa;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_ea", type="text", nullable=true)
     */
    private $etatEa;



    /**
     * Get idEa
     *
     * @return integer 
     */
    public function getIdEa()
    {
        return $this->idEa;
    }

    /**
     * Set etatEa
     *
     * @param string $etatEa
     * @return EtatAnnonce
     */
    public function setEtatEa($etatEa)
    {
        $this->etatEa = $etatEa;

        return $this;
    }

    /**
     * Get etatEa
     *
     * @return string 
     */
    public function getEtatEa()
    {
        return $this->etatEa;
    }
}
