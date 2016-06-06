<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele", indexes={@ORM\Index(name="IDX_1002855891AD4756", columns={"id_ga"})})
 * @ORM\Entity
 */
class Modele
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="modele_id_mo_seq", allocationSize=1, initialValue=1)
     */
    private $idMo;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_mo", type="text", nullable=true)
     */
    private $libelleMo;

    /**
     * @var \Gamme
     *
     * @ORM\ManyToOne(targetEntity="Gamme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ga", referencedColumnName="id_ga")
     * })
     */
    private $idGa;



    /**
     * Get idMo
     *
     * @return integer 
     */
    public function getIdMo()
    {
        return $this->idMo;
    }

    /**
     * Set libelleMo
     *
     * @param string $libelleMo
     * @return Modele
     */
    public function setLibelleMo($libelleMo)
    {
        $this->libelleMo = $libelleMo;

        return $this;
    }

    /**
     * Get libelleMo
     *
     * @return string 
     */
    public function getLibelleMo()
    {
        return $this->libelleMo;
    }

    /**
     * Set idGa
     *
     * @param \nftAnnonceBundle\Entity\Gamme $idGa
     * @return Modele
     */
    public function setIdGa(\nftAnnonceBundle\Entity\Gamme $idGa = null)
    {
        $this->idGa = $idGa;

        return $this;
    }

    /**
     * Get idGa
     *
     * @return \nftAnnonceBundle\Entity\Gamme 
     */
    public function getIdGa()
    {
        return $this->idGa;
    }
}
