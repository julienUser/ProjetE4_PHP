<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement", indexes={@ORM\Index(name="IDX_C1765B63A175655B", columns={"id_re"})})
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_de", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="departement_id_de_seq", allocationSize=1, initialValue=1)
     */
    private $idDe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_de", type="string", nullable=true)
     */
    private $nomDe;

    /**
     * @var string
     *
     * @ORM\Column(name="num_de", type="string", nullable=true)
     */
    private $numDe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_slug_de", type="string", nullable=true)
     */
    private $nomSlugDe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_maj_de", type="string", nullable=true)
     */
    private $nomMajDe;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_reg_de", type="string", nullable=true)
     */
    private $nomRegDe;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_re", referencedColumnName="id_re")
     * })
     */
    private $idRe;



    /**
     * Get idDe
     *
     * @return integer 
     */
    public function getIdDe()
    {
        return $this->idDe;
    }

    /**
     * Set nomDe
     *
     * @param string $nomDe
     * @return Departement
     */
    public function setNomDe($nomDe)
    {
        $this->nomDe = $nomDe;

        return $this;
    }

    /**
     * Get nomDe
     *
     * @return string 
     */
    public function getNomDe()
    {
        return $this->nomDe;
    }

    /**
     * Set numDe
     *
     * @param string $numDe
     * @return Departement
     */
    public function setNumDe($numDe)
    {
        $this->numDe = $numDe;

        return $this;
    }

    /**
     * Get numDe
     *
     * @return string 
     */
    public function getNumDe()
    {
        return $this->numDe;
    }

    /**
     * Set nomSlugDe
     *
     * @param string $nomSlugDe
     * @return Departement
     */
    public function setNomSlugDe($nomSlugDe)
    {
        $this->nomSlugDe = $nomSlugDe;

        return $this;
    }

    /**
     * Get nomSlugDe
     *
     * @return string 
     */
    public function getNomSlugDe()
    {
        return $this->nomSlugDe;
    }

    /**
     * Set nomMajDe
     *
     * @param string $nomMajDe
     * @return Departement
     */
    public function setNomMajDe($nomMajDe)
    {
        $this->nomMajDe = $nomMajDe;

        return $this;
    }

    /**
     * Get nomMajDe
     *
     * @return string 
     */
    public function getNomMajDe()
    {
        return $this->nomMajDe;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Departement
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set nomRegDe
     *
     * @param string $nomRegDe
     * @return Departement
     */
    public function setNomRegDe($nomRegDe)
    {
        $this->nomRegDe = $nomRegDe;

        return $this;
    }

    /**
     * Get nomRegDe
     *
     * @return string 
     */
    public function getNomRegDe()
    {
        return $this->nomRegDe;
    }

    /**
     * Set idRe
     *
     * @param \nftAnnonceBundle\Entity\Region $idRe
     * @return Departement
     */
    public function setIdRe(\nftAnnonceBundle\Entity\Region $idRe = null)
    {
        $this->idRe = $idRe;

        return $this;
    }

    /**
     * Get idRe
     *
     * @return \nftAnnonceBundle\Entity\Region 
     */
    public function getIdRe()
    {
        return $this->idRe;
    }
}
