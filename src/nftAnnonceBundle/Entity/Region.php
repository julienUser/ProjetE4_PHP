<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region", indexes={@ORM\Index(name="IDX_F62F176942EC3C0", columns={"id_pa"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_re", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="region_id_re_seq", allocationSize=1, initialValue=1)
     */
    private $idRe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_re", type="string", length=80, nullable=true)
     */
    private $nomRe;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_re", type="string", nullable=true)
     */
    private $commentaireRe;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pa", referencedColumnName="id_pa")
     * })
     */
    private $idPa;



    /**
     * Get idRe
     *
     * @return integer 
     */
    public function getIdRe()
    {
        return $this->idRe;
    }

    /**
     * Set nomRe
     *
     * @param string $nomRe
     * @return Region
     */
    public function setNomRe($nomRe)
    {
        $this->nomRe = $nomRe;

        return $this;
    }

    /**
     * Get nomRe
     *
     * @return string 
     */
    public function getNomRe()
    {
        return $this->nomRe;
    }

    /**
     * Set commentaireRe
     *
     * @param string $commentaireRe
     * @return Region
     */
    public function setCommentaireRe($commentaireRe)
    {
        $this->commentaireRe = $commentaireRe;

        return $this;
    }

    /**
     * Get commentaireRe
     *
     * @return string 
     */
    public function getCommentaireRe()
    {
        return $this->commentaireRe;
    }

    /**
     * Set idPa
     *
     * @param \nftAnnonceBundle\Entity\Pays $idPa
     * @return Region
     */
    public function setIdPa(\nftAnnonceBundle\Entity\Pays $idPa = null)
    {
        $this->idPa = $idPa;

        return $this;
    }

    /**
     * Get idPa
     *
     * @return \nftAnnonceBundle\Entity\Pays 
     */
    public function getIdPa()
    {
        return $this->idPa;
    }
}
