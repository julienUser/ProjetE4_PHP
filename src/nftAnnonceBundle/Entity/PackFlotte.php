<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackFlotte
 *
 * @ORM\Table(name="pack_flotte")
 * @ORM\Entity
 */
class PackFlotte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pack_flotte_id_pf_seq", allocationSize=1, initialValue=1)
     */
    private $idPf;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pf", type="string", nullable=true)
     */
    private $nomPf;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_pf", type="integer", nullable=true)
     */
    private $prixPf;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant_credits_pf", type="integer", nullable=true)
     */
    private $montantCreditsPf;



    /**
     * Get idPf
     *
     * @return integer 
     */
    public function getIdPf()
    {
        return $this->idPf;
    }

    /**
     * Set nomPf
     *
     * @param string $nomPf
     * @return PackFlotte
     */
    public function setNomPf($nomPf)
    {
        $this->nomPf = $nomPf;

        return $this;
    }

    /**
     * Get nomPf
     *
     * @return string 
     */
    public function getNomPf()
    {
        return $this->nomPf;
    }

    /**
     * Set prixPf
     *
     * @param integer $prixPf
     * @return PackFlotte
     */
    public function setPrixPf($prixPf)
    {
        $this->prixPf = $prixPf;

        return $this;
    }

    /**
     * Get prixPf
     *
     * @return integer 
     */
    public function getPrixPf()
    {
        return $this->prixPf;
    }

    /**
     * Set montantCreditsPf
     *
     * @param integer $montantCreditsPf
     * @return PackFlotte
     */
    public function setMontantCreditsPf($montantCreditsPf)
    {
        $this->montantCreditsPf = $montantCreditsPf;

        return $this;
    }

    /**
     * Get montantCreditsPf
     *
     * @return integer 
     */
    public function getMontantCreditsPf()
    {
        return $this->montantCreditsPf;
    }
}
