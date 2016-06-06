<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Option
 *
 * @ORM\Table(name="option")
 * @ORM\Entity
 */
class Option
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_op", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="option_id_op_seq", allocationSize=1, initialValue=1)
     */
    private $idOp;

    /**
     * @var string
     *
     * @ORM\Column(name="label_op", type="string", nullable=true)
     */
    private $labelOp;

    /**
     * @var string
     *
     * @ORM\Column(name="description_op", type="string", nullable=true)
     */
    private $descriptionOp;

    /**
     * @var string
     *
     * @ORM\Column(name="link_op", type="string", nullable=true)
     */
    private $linkOp;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_op", type="integer", nullable=true)
     */
    private $prixOp;



    /**
     * Get idOp
     *
     * @return integer 
     */
    public function getIdOp()
    {
        return $this->idOp;
    }

    /**
     * Set labelOp
     *
     * @param string $labelOp
     * @return Option
     */
    public function setLabelOp($labelOp)
    {
        $this->labelOp = $labelOp;

        return $this;
    }

    /**
     * Get labelOp
     *
     * @return string 
     */
    public function getLabelOp()
    {
        return $this->labelOp;
    }

    /**
     * Get descriptionOp
     *
     * @return integer 
     */
    public function getDescriptionOp()
    {
        return $this->descriptionOp;
    }

    /**
     * Set descriptionOp
     *
     * @param string $descriptionOp
     * @return Option
     */
    public function setDescriptionOp($descriptionOp)
    {
        $this->descriptionOp = $descriptionOp;

        return $this;
    }

    /**
     * Get linkOp
     *
     * @return integer 
     */
    public function getLinkOp()
    {
        return $this->linkOp;
    }

    /**
     * Set linkOp
     *
     * @param string $linkOp
     * @return Option
     */
    public function setLinkop($linkOp)
    {
        $this->linkOp = $linkOp;

        return $this;
    }

    /**
     * Set prixOp
     *
     * @param integer $prixOp
     * @return Option
     */
    public function setPrixOp($prixOp)
    {
        $this->prixOp = $prixOp;

        return $this;
    }

    /**
     * Get prixOp
     *
     * @return integer 
     */
    public function getPrixOp()
    {
        return $this->prixOp;
    }
}
