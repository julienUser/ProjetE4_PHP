<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueCredits
 *
 * @ORM\Table(name="historique_credits")
 * @ORM\Entity
 */
class HistoriqueCredits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_hc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historique_credits_id_hc_seq", allocationSize=1, initialValue=1)
     */
    private $idHc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mouvement_hc", type="datetime", nullable=true)
     */
    private $dateMouvementHc;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_mouvement_hc", type="string", nullable=true)
     */
    private $libelleMouvementHc;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant_total_mouvement_hc", type="integer", nullable=true)
     */
    private $montantTotalMouvementHc;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant_mouvement_hc", type="integer", nullable=true)
     */
    private $montantMouvementHc;



    /**
     * Get idHc
     *
     * @return integer 
     */
    public function getIdHc()
    {
        return $this->idHc;
    }

    /**
     * Set dateMouvementHc
     *
     * @param \DateTime $dateMouvementHc
     * @return HistoriqueCredits
     */
    public function setDateMouvementHc($dateMouvementHc)
    {
        $this->dateMouvementHc = $dateMouvementHc;

        return $this;
    }

    /**
     * Get dateMouvementHc
     *
     * @return \DateTime 
     */
    public function getDateMouvementHc()
    {
        return $this->dateMouvementHc;
    }

    /**
     * Set libelleMouvementHc
     *
     * @param string $libelleMouvementHc
     * @return HistoriqueCredits
     */
    public function setLibelleMouvementHc($libelleMouvementHc)
    {
        $this->libelleMouvementHc = $libelleMouvementHc;

        return $this;
    }

    /**
     * Get libelleMouvementHc
     *
     * @return string 
     */
    public function getLibelleMouvementHc()
    {
        return $this->libelleMouvementHc;
    }

    /**
     * Set montantTotalMouvementHc
     *
     * @param integer $montantTotalMouvementHc
     * @return HistoriqueCredits
     */
    public function setMontantTotalMouvementHc($montantTotalMouvementHc)
    {
        $this->montantTotalMouvementHc = $montantTotalMouvementHc;

        return $this;
    }

    /**
     * Get montantTotalMouvementHc
     *
     * @return integer 
     */
    public function getMontantTotalMouvementHc()
    {
        return $this->montantTotalMouvementHc;
    }

    /**
     * Set montantMouvementHc
     *
     * @param integer $montantMouvementHc
     * @return HistoriqueCredits
     */
    public function setMontantMouvementHc($montantMouvementHc)
    {
        $this->montantMouvementHc = $montantMouvementHc;

        return $this;
    }

    /**
     * Get montantMouvementHc
     *
     * @return integer 
     */
    public function getMontantMouvementHc()
    {
        return $this->montantMouvementHc;
    }
}
