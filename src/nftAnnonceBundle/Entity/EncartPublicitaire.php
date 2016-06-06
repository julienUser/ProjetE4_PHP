<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncartPublicitaire
 *
 * @ORM\Table(name="encart_publicitaire", indexes={@ORM\Index(name="IDX_C339632C6F0E5B10", columns={"id_fo"})})
 * @ORM\Entity
 */
class EncartPublicitaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ep", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="encart_publicitaire_id_ep_seq", allocationSize=1, initialValue=1)
     */
    private $idEp;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_ep", type="string", nullable=true)
     */
    private $libelleEp;

    /**
     * @var \Format
     *
     * @ORM\ManyToOne(targetEntity="Format")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fo", referencedColumnName="id_fo")
     * })
     */
    private $idFo;



    /**
     * Get idEp
     *
     * @return integer 
     */
    public function getIdEp()
    {
        return $this->idEp;
    }

    /**
     * Set libelleEp
     *
     * @param string $libelleEp
     * @return EncartPublicitaire
     */
    public function setLibelleEp($libelleEp)
    {
        $this->libelleEp = $libelleEp;

        return $this;
    }

    /**
     * Get libelleEp
     *
     * @return string 
     */
    public function getLibelleEp()
    {
        return $this->libelleEp;
    }

    /**
     * Set idFo
     *
     * @param \nftAnnonceBundle\Entity\Format $idFo
     * @return EncartPublicitaire
     */
    public function setIdFo(\nftAnnonceBundle\Entity\Format $idFo = null)
    {
        $this->idFo = $idFo;

        return $this;
    }

    /**
     * Get idFo
     *
     * @return \nftAnnonceBundle\Entity\Format 
     */
    public function getIdFo()
    {
        return $this->idFo;
    }
}
