<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurHistoriqueCredits
 *
 * @ORM\Table(name="utilisateur_historique_credits")
 * @ORM\Entity
 */
class UtilisateurHistoriqueCredits
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
     * @ORM\Column(name="id_hc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idHc;



    /**
     * Set idUt
     *
     * @param integer $idUt
     * @return UtilisateurHistoriqueCredits
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
     * Set idHc
     *
     * @param integer $idHc
     * @return UtilisateurHistoriqueCredits
     */
    public function setIdHc($idHc)
    {
        $this->idHc = $idHc;

        return $this;
    }

    /**
     * Get idHc
     *
     * @return integer 
     */
    public function getIdHc()
    {
        return $this->idHc;
    }
}
