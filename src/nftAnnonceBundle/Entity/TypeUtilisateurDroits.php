<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUtilisateurDroits
 *
 * @ORM\Table(name="type_utilisateur_droits")
 * @ORM\Entity
 */
class TypeUtilisateurDroits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDr;



    /**
     * Set idTu
     *
     * @param integer $idTu
     * @return TypeUtilisateurDroits
     */
    public function setIdTu($idTu)
    {
        $this->idTu = $idTu;

        return $this;
    }

    /**
     * Get idTu
     *
     * @return integer 
     */
    public function getIdTu()
    {
        return $this->idTu;
    }

    /**
     * Set idDr
     *
     * @param integer $idDr
     * @return TypeUtilisateurDroits
     */
    public function setIdDr($idDr)
    {
        $this->idDr = $idDr;

        return $this;
    }

    /**
     * Get idDr
     *
     * @return integer 
     */
    public function getIdDr()
    {
        return $this->idDr;
    }
}
