<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gamme
 *
 * @ORM\Table(name="gamme")
 * @ORM\Entity
 */
class Gamme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ga", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gamme_id_ga_seq", allocationSize=1, initialValue=1)
     */
    private $idGa;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_ga", type="text", nullable=true)
     */
    private $libelleGa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ma", type="integer", nullable=true)
     */
    private $idMa;



    /**
     * Get idGa
     *
     * @return integer 
     */
    public function getIdGa()
    {
        return $this->idGa;
    }

    /**
     * Set libelleGa
     *
     * @param string $libelleGa
     * @return Gamme
     */
    public function setLibelleGa($libelleGa)
    {
        $this->libelleGa = $libelleGa;

        return $this;
    }

    /**
     * Get libelleGa
     *
     * @return string 
     */
    public function getLibelleGa()
    {
        return $this->libelleGa;
    }

    /**
     * Set idMa
     *
     * @param integer $idMa
     * @return Gamme
     */
    public function setIdMa($idMa)
    {
        $this->idMa = $idMa;

        return $this;
    }

    /**
     * Get idMa
     *
     * @return integer 
     */
    public function getIdMa()
    {
        return $this->idMa;
    }
}
