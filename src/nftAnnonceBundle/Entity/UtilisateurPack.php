<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurPack
 *
 * @ORM\Table(name="utilisateur_pack")
 * @ORM\Entity
 */
class UtilisateurPack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ut", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_souscription_pack", type="datetime", nullable=true)
     */
    private $dateSouscriptionPack;



    /**
     * Set idUt
     *
     * @param integer $idUt
     * @return UtilisateurPack
     */
    public function setIdUt($idUt)
    {
        $this->idUt = $idUt;

        return $this;
    }

    /**
     * Get idUt
     *
     * @return integer 
     */
    public function getIdUt()
    {
        return $this->idUt;
    }

    /**
     * Set idPa
     *
     * @param integer $idPa
     * @return UtilisateurPack
     */
    public function setIdPa($idPa)
    {
        $this->idPa = $idPa;

        return $this;
    }

    /**
     * Get idPa
     *
     * @return integer 
     */
    public function getIdPa()
    {
        return $this->idPa;
    }

    /**
     * Set dateSouscriptionPack
     *
     * @param \DateTime $dateSouscriptionPack
     * @return UtilisateurPack
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
