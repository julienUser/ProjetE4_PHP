<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FlotteOptionsFlotte
 *
 * @ORM\Table(name="flotte_options_flotte")
 * @ORM\Entity
 */
class FlotteOptionsFlotte
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
     * @ORM\Column(name="id_of", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_souscription_option", type="datetime", nullable=true)
     */
    private $dateSouscriptionOption;



    /**
     * Set idFl
     *
     * @param integer $idFl
     * @return FlotteOptionsFlotte
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
     * Set idOf
     *
     * @param integer $idOf
     * @return FlotteOptionsFlotte
     */
    public function setIdOf($idOf)
    {
        $this->idOf = $idOf;

        return $this;
    }

    /**
     * Get idOf
     *
     * @return integer 
     */
    public function getIdOf()
    {
        return $this->idOf;
    }

    /**
     * Set dateSouscriptionOption
     *
     * @param \DateTime $dateSouscriptionOption
     * @return FlotteOptionsFlotte
     */
    public function setDateSouscriptionOption($dateSouscriptionOption)
    {
        $this->dateSouscriptionOption = $dateSouscriptionOption;

        return $this;
    }

    /**
     * Get dateSouscriptionOption
     *
     * @return \DateTime 
     */
    public function getDateSouscriptionOption()
    {
        return $this->dateSouscriptionOption;
    }
}
