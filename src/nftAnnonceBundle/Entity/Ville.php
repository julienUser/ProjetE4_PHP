<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville", indexes={@ORM\Index(name="ville_geom_gix", columns={"geom_vi"}), @ORM\Index(name="IDX_43C3D9C3BDEDD08C", columns={"id_de"})})
 * @ORM\Entity
 */
class Ville
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ville_id_vi_seq", allocationSize=1, initialValue=1)
     */
    private $idVi;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_vi", type="string", nullable=true)
     */
    private $cpVi;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vi", type="string", nullable=true)
     */
    private $nomVi;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_maj_vi", type="string", nullable=true)
     */
    private $nomMajVi;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_vi", type="string", nullable=true)
     */
    private $libelleVi;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_dep_vi", type="string", nullable=true)
     */
    private $nomDepVi;

    /**
     * @var float
     *
     * @ORM\Column(name="lat_vi", type="float", precision=10, scale=0, nullable=true)
     */
    private $latVi;

    /**
     * @var float
     *
     * @ORM\Column(name="long_vi", type="float", precision=10, scale=0, nullable=true)
     */
    private $longVi;

    /**
     * @var geometry
     *
     * @ORM\Column(name="geom_vi", type="geometry", nullable=true)
     */
    private $geomVi;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_vi", type="string", length=255, nullable=true)
     */
    private $commentaireVi;

    /**
     * @var geometry
     *
     * @ORM\Column(name="poly_vi", type="geometry", nullable=true)
     */
    private $polyVi;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_de", referencedColumnName="id_de")
     * })
     */
    private $idDe;



    /**
     * Get idVi
     *
     * @return integer 
     */
    public function getIdVi()
    {
        return $this->idVi;
    }

    /**
     * Set cpVi
     *
     * @param string $cpVi
     * @return Ville
     */
    public function setCpVi($cpVi)
    {
        $this->cpVi = $cpVi;

        return $this;
    }

    /**
     * Get cpVi
     *
     * @return string 
     */
    public function getCpVi()
    {
        return $this->cpVi;
    }

    /**
     * Set nomVi
     *
     * @param string $nomVi
     * @return Ville
     */
    public function setNomVi($nomVi)
    {
        $this->nomVi = $nomVi;

        return $this;
    }

    /**
     * Get nomVi
     *
     * @return string 
     */
    public function getNomVi()
    {
        return $this->nomVi;
    }

    /**
     * Set nomMajVi
     *
     * @param string $nomMajVi
     * @return Ville
     */
    public function setNomMajVi($nomMajVi)
    {
        $this->nomMajVi = $nomMajVi;

        return $this;
    }

    /**
     * Get nomMajVi
     *
     * @return string 
     */
    public function getNomMajVi()
    {
        return $this->nomMajVi;
    }

    /**
     * Set libelleVi
     *
     * @param string $libelleVi
     * @return Ville
     */
    public function setLibelleVi($libelleVi)
    {
        $this->libelleVi = $libelleVi;

        return $this;
    }

    /**
     * Get libelleVi
     *
     * @return string 
     */
    public function getLibelleVi()
    {
        return $this->libelleVi;
    }

    /**
     * Set nomDepVi
     *
     * @param string $nomDepVi
     * @return Ville
     */
    public function setNomDepVi($nomDepVi)
    {
        $this->nomDepVi = $nomDepVi;

        return $this;
    }

    /**
     * Get nomDepVi
     *
     * @return string 
     */
    public function getNomDepVi()
    {
        return $this->nomDepVi;
    }

    /**
     * Set latVi
     *
     * @param float $latVi
     * @return Ville
     */
    public function setLatVi($latVi)
    {
        $this->latVi = $latVi;

        return $this;
    }

    /**
     * Get latVi
     *
     * @return float 
     */
    public function getLatVi()
    {
        return $this->latVi;
    }

    /**
     * Set longVi
     *
     * @param float $longVi
     * @return Ville
     */
    public function setLongVi($longVi)
    {
        $this->longVi = $longVi;

        return $this;
    }

    /**
     * Get longVi
     *
     * @return float 
     */
    public function getLongVi()
    {
        return $this->longVi;
    }

    /**
     * Set geomVi
     *
     * @param geometry $geomVi
     * @return Ville
     */
    public function setGeomVi($geomVi)
    {
        $this->geomVi = $geomVi;

        return $this;
    }

    /**
     * Get geomVi
     *
     * @return geometry 
     */
    public function getGeomVi()
    {
        return $this->geomVi;
    }

    /**
     * Set commentaireVi
     *
     * @param string $commentaireVi
     * @return Ville
     */
    public function setCommentaireVi($commentaireVi)
    {
        $this->commentaireVi = $commentaireVi;

        return $this;
    }

    /**
     * Get commentaireVi
     *
     * @return string 
     */
    public function getCommentaireVi()
    {
        return $this->commentaireVi;
    }

    /**
     * Set polyVi
     *
     * @param geometry $polyVi
     * @return Ville
     */
    public function setPolyVi($polyVi)
    {
        $this->polyVi = $polyVi;

        return $this;
    }

    /**
     * Get polyVi
     *
     * @return geometry 
     */
    public function getPolyVi()
    {
        return $this->polyVi;
    }

    /**
     * Set idDe
     *
     * @param \nftAnnonceBundle\Entity\Departement $idDe
     * @return Ville
     */
    public function setIdDe(\nftAnnonceBundle\Entity\Departement $idDe = null)
    {
        $this->idDe = $idDe;

        return $this;
    }

    /**
     * Get idDe
     *
     * @return \nftAnnonceBundle\Entity\Departement 
     */
    public function getIdDe()
    {
        return $this->idDe;
    }
}
