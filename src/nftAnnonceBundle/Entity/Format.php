<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Format
 *
 * @ORM\Table(name="format")
 * @ORM\Entity
 */
class Format
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="format_id_fo_seq", allocationSize=1, initialValue=1)
     */
    private $idFo;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_fo", type="string", nullable=true)
     */
    private $libelleFo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_fo", type="integer", nullable=true)
     */
    private $prixFo;

    /**
     * @var integer
     *
     * @ORM\Column(name="jours_validation_fo", type="integer", nullable=true)
     */
    private $joursValidationFo;



    /**
     * Get idFo
     *
     * @return integer 
     */
    public function getIdFo()
    {
        return $this->idFo;
    }

    /**
     * Set libelleFo
     *
     * @param string $libelleFo
     * @return Format
     */
    public function setLibelleFo($libelleFo)
    {
        $this->libelleFo = $libelleFo;

        return $this;
    }

    /**
     * Get libelleFo
     *
     * @return string 
     */
    public function getLibelleFo()
    {
        return $this->libelleFo;
    }

    /**
     * Set prixFo
     *
     * @param integer $prixFo
     * @return Format
     */
    public function setPrixFo($prixFo)
    {
        $this->prixFo = $prixFo;

        return $this;
    }

    /**
     * Get prixFo
     *
     * @return integer 
     */
    public function getPrixFo()
    {
        return $this->prixFo;
    }

    /**
     * Set joursValidationFo
     *
     * @param integer $joursValidationFo
     * @return Format
     */
    public function setJoursValidationFo($joursValidationFo)
    {
        $this->joursValidationFo = $joursValidationFo;

        return $this;
    }

    /**
     * Get joursValidationFo
     *
     * @return integer 
     */
    public function getJoursValidationFo()
    {
        return $this->joursValidationFo;
    }
}
