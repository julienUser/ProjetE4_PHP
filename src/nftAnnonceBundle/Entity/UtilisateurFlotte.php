<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurFlotte
 *
 * @ORM\Table(name="utilisateur_flotte")
 * @ORM\Entity
 */
class UtilisateurFlotte
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
     * @ORM\Column(name="id_fl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFl;



    /**
     * Set idUt
     *
     * @param integer $idUt
     * @return UtilisateurFlotte
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
     * Set idFl
     *
     * @param integer $idFl
     * @return UtilisateurFlotte
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
}
