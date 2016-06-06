<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUtilisateur
 *
 * @ORM\Table(name="type_utilisateur", indexes={@ORM\Index(name="IDX_5605B422219E6123", columns={"id_droits"})})
 * @ORM\Entity
 */
class TypeUtilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="type_utilisateur_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_tu", type="string", nullable=true)
     */
    private $libelleTu;

    /**
     * @var \Droits
     *
     * @ORM\ManyToOne(targetEntity="Droits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_droits", referencedColumnName="id_dr")
     * })
     */
    private $idDroits;



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
     * Set libelleTu
     *
     * @param string $libelleTu
     * @return TypeUtilisateur
     */
    public function setLibelleTu($libelleTu)
    {
        $this->libelleTu = $libelleTu;

        return $this;
    }

    /**
     * Get libelleTu
     *
     * @return string 
     */
    public function getLibelleTu()
    {
        return $this->libelleTu;
    }

    /**
     * Set idDroits
     *
     * @param \nftAnnonceBundle\Entity\Droits $idDroits
     * @return TypeUtilisateur
     */
    public function setIdDroits(\nftAnnonceBundle\Entity\Droits $idDroits = null)
    {
        $this->idDroits = $idDroits;

        return $this;
    }

    /**
     * Get idDroits
     *
     * @return \nftAnnonceBundle\Entity\Droits 
     */
    public function getIdDroits()
    {
        return $this->idDroits;
    }
}
