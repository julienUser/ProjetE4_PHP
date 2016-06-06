<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_1d1c63b3a0d96fbf", columns={"email_canonical"}), @ORM\UniqueConstraint(name="uniq_1d1c63b392fc23a8", columns={"username_canonical"})})
 * @ORM\Entity
 */
class Utilisateur extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="utilisateur_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ut", type="string", length=255, nullable=true)
     */
    private $nomUt;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbannonces_ut", type="integer", length=255, nullable=true)
     */
    private $nbannoncesUt;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_ut", type="string", length=255, nullable=true)
     */
    private $prenomUt;

    /**
     * @var integer
     *
     * @ORM\Column(name="bourse_ut", type="integer", nullable=true)
     */
    private $bourseUt;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_ut", type="string", length=255, nullable=true)
     */
    private $adresseUt;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_ut", type="string", length=255, nullable=true)
     */
    private $mailUt;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel_ut", type="integer", nullable=true)
     */
    private $telUt;



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
     * Set nomUt
     *
     * @param string $nomUt
     * @return Utilisateur
     */
    public function setNomUt($nomUt)
    {
        $this->nomUt = $nomUt;

        return $this;
    }

    /**
     * Get nomUt
     *
     * @return string 
     */
    public function getNomUt()
    {
        return $this->nomUt;
    }

    /**
     * Set prenomUt
     *
     * @param string $prenomUt
     * @return Utilisateur
     */
    public function setPrenomUt($prenomUt)
    {
        $this->prenomUt = $prenomUt;

        return $this;
    }

    /**
     * Get prenomUt
     *
     * @return string 
     */
    public function getPrenomUt()
    {
        return $this->prenomUt;
    }

    /**
     * Set bourseUt
     *
     * @param integer $bourseUt
     * @return Utilisateur
     */
    public function setBourseUt($bourseUt)
    {
        $this->bourseUt = $bourseUt;

        return $this;
    }

    /**
     * Get bourseUt
     *
     * @return integer 
     */
    public function getBourseUt()
    {
        return $this->bourseUt;
    }

    /**
     * Set adresseUt
     *
     * @param string $adresseUt
     * @return Utilisateur
     */
    public function setAdresseUt($adresseUt)
    {
        $this->adresseUt = $adresseUt;

        return $this;
    }

    /**
     * Get adresseUt
     *
     * @return string 
     */
    public function getAdresseUt()
    {
        return $this->adresseUt;
    }

    /**
     * Set mailUt
     *
     * @param string $mailUt
     * @return Utilisateur
     */
    public function setMailUt($mailUt)
    {
        $this->mailUt = $mailUt;

        return $this;
    }

    /**
     * Get mailUt
     *
     * @return string 
     */
    public function getMailUt()
    {
        return $this->mailUt;
    }

    /**
     * Set telUt
     *
     * @param integer $telUt
     * @return Utilisateur
     */
    public function setTelUt($telUt)
    {
        $this->telUt = $telUt;

        return $this;
    }

    /**
     * Get telUt
     *
     * @return integer 
     */
    public function getTelUt()
    {
        return $this->telUt;
    }

    /**
     * Set nbannoncesUt
     *
     * @param integer $nbannoncesUt
     * @return Utilisateur
     */
    public function setNbAnnoncesUt($nbannoncesUt)
    {
        $this->nbannoncesUt = $nbannoncesUt;

        return $this;
    }

    /**
     * Get nbannoncesUt
     *
     * @return integer 
     */
    public function getNbAnnoncesUt()
    {
        return $this->nbannoncesUt;
    }
}
