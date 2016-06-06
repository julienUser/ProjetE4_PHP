<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table(name="marque", indexes={@ORM\Index(name="IDX_5A6F91CE91AD4756", columns={"id_ga"})})
 * @ORM\Entity
 */
class Marque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ma", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="marque_id_ma_seq", allocationSize=1, initialValue=1)
     */
    private $idMa;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_ma", type="text", nullable=true)
     */
    private $libelleMa;

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
     * Get idMa
     *
     * @return integer 
     */
    public function getIdMa()
    {
        return $this->idMa;
    }

    /**
     * Set libelleMa
     *
     * @param string $libelleMa
     * @return Marque
     */
    public function setLibelleMa($libelleMa)
    {
        $this->libelleMa = $libelleMa;

        return $this;
    }

    /**
     * Get libelleMa
     *
     * @return string 
     */
    public function getLibelleMa()
    {
        return $this->libelleMa;
    }

    /**
     * Set idGa
     *
     * @param \nftAnnonceBundle\Entity\Gamme $idGa
     * @return Marque
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
