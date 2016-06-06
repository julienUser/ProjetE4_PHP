<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FlottePackFlotte
 *
 * @ORM\Table(name="flotte_pack_flotte")
 * @ORM\Entity
 */
class FlottePackFlotte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFl;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_souscription_pack", type="datetime", nullable=true)
     */
    private $dateSouscriptionPack;



    /**
     * Set idFl
     *
     * @param integer $idFl
     * @return FlottePackFlotte
     */
    public function setIdFl($idFl)
    {
        $this->idFl = $idFl;

        return $this;
    }

    /**
     * Get idFl
     *
     * @return integer 
     */
    public function getIdFl()
    {
        return $this->idFl;
    }

    /**
     * Set idPf
     *
     * @param integer $idPf
     * @return FlottePackFlotte
     */
    public function setIdPf($idPf)
    {
        $this->idPf = $idPf;

        return $this;
    }

    /**
     * Get idPf
     *
     * @return integer 
     */
    public function getIdPf()
    {
        return $this->idPf;
    }

    /**
     * Set dateSouscriptionPack
     *
     * @param \DateTime $dateSouscriptionPack
     * @return FlottePackFlotte
     */
    public function setDateSouscriptionPack($dateSouscriptionPack)
    {
        $this->dateSouscriptionPack = $dateSouscriptionPack;

        return $this;
    }

    /**
     * Get dateSouscriptionPack
     *
     * @return \DateTime 
     */
    public function getDateSouscriptionPack()
    {
        return $this->dateSouscriptionPack;
    }
}
