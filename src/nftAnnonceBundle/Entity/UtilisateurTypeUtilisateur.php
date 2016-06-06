<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurTypeUtilisateur
 *
 * @ORM\Table(name="utilisateur_type_utilisateur")
 * @ORM\Entity
 */
class UtilisateurTypeUtilisateur
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
     * @ORM\Column(name="id_tu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTu;



    /**
     * Set idUt
     *
     * @param integer $idUt
     * @return UtilisateurTypeUtilisateur
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
     * Set idTu
     *
     * @param integer $idTu
     * @return UtilisateurTypeUtilisateur
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
}
