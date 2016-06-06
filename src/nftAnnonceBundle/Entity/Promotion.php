<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="IDX_C11D7DD1942EC3C0", columns={"id_pa"})})
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_promo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="promotion_id_promo_seq", allocationSize=1, initialValue=1)
     */
    private $idPromo;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_promo", type="integer", nullable=true)
     */
    private $codePromo;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_promo", type="string", nullable=true)
     */
    private $montantPromo;

    /**
     * @var integer
     *
     * @ORM\Column(name="temps_validite_promo", type="integer", nullable=true)
     */
    private $tempsValiditePromo;

    /**
     * @var \Pack
     *
     * @ORM\ManyToOne(targetEntity="Pack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pa", referencedColumnName="id_pa")
     * })
     */
    private $idPa;



    /**
     * Get idPromo
     *
     * @return integer 
     */
    public function getIdPromo()
    {
        return $this->idPromo;
    }

    /**
     * Set codePromo
     *
     * @param integer $codePromo
     * @return Promotion
     */
    public function setCodePromo($codePromo)
    {
        $this->codePromo = $codePromo;

        return $this;
    }

    /**
     * Get codePromo
     *
     * @return integer 
     */
    public function getCodePromo()
    {
        return $this->codePromo;
    }

    /**
     * Set montantPromo
     *
     * @param string $montantPromo
     * @return Promotion
     */
    public function setMontantPromo($montantPromo)
    {
        $this->montantPromo = $montantPromo;

        return $this;
    }

    /**
     * Get montantPromo
     *
     * @return string 
     */
    public function getMontantPromo()
    {
        return $this->montantPromo;
    }

    /**
     * Set tempsValiditePromo
     *
     * @param integer $tempsValiditePromo
     * @return Promotion
     */
    public function setTempsValiditePromo($tempsValiditePromo)
    {
        $this->tempsValiditePromo = $tempsValiditePromo;

        return $this;
    }

    /**
     * Get tempsValiditePromo
     *
     * @return integer 
     */
    public function getTempsValiditePromo()
    {
        return $this->tempsValiditePromo;
    }

    /**
     * Set idPa
     *
     * @param \nftAnnonceBundle\Entity\Pack $idPa
     * @return Promotion
     */
    public function setIdPa(\nftAnnonceBundle\Entity\Pack $idPa = null)
    {
        $this->idPa = $idPa;

        return $this;
    }

    /**
     * Get idPa
     *
     * @return \nftAnnonceBundle\Entity\Pack 
     */
    public function getIdPa()
    {
        return $this->idPa;
    }
}
