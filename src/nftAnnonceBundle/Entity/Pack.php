<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack")
 * @ORM\Entity
 */
class Pack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pack_id_pa_seq", allocationSize=1, initialValue=1)
     */
    private $idPa;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_pa", type="text", nullable=true)
     */
    private $libellePa;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_pa", type="integer", nullable=true)
     */
    private $prixPa;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant_credits_pa", type="integer", nullable=true)
     */
    private $montantCreditsPa;



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
     * Set libellePa
     *
     * @param string $libellePa
     * @return Pack
     */
    public function setLibellePa($libellePa)
    {
        $this->libellePa = $libellePa;

        return $this;
    }

    /**
     * Get libellePa
     *
     * @return string 
     */
    public function getLibellePa()
    {
        return $this->libellePa;
    }

    /**
     * Set prixPa
     *
     * @param integer $prixPa
     * @return Pack
     */
    public function setPrixPa($prixPa)
    {
        $this->prixPa = $prixPa;

        return $this;
    }

    /**
     * Get prixPa
     *
     * @return integer 
     */
    public function getPrixPa()
    {
        return $this->prixPa;
    }

    /**
     * Set montantCreditsPa
     *
     * @param integer $montantCreditsPa
     * @return Pack
     */
    public function setMontantCreditsPa($montantCreditsPa)
    {
        $this->montantCreditsPa = $montantCreditsPa;

        return $this;
    }

    /**
     * Get montantCreditsPa
     *
     * @return integer 
     */
    public function getMontantCreditsPa()
    {
        return $this->montantCreditsPa;
    }
}
