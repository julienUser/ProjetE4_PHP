<?php

namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="IDX_F65593E5942EC3C0", columns={"id_pa"}), @ORM\Index(name="IDX_F65593E5A175655B", columns={"id_re"}), @ORM\Index(name="IDX_F65593E5BDEDD08C", columns={"id_de"}), @ORM\Index(name="IDX_F65593E58484D36E", columns={"id_ut"}), @ORM\Index(name="IDX_F65593E5A39B25D4", columns={"id_ea"}), @ORM\Index(name="IDX_F65593E5CCAFEC74", columns={"id_vi"})})
 * @ORM\Entity(repositoryClass="AnnonceRepository")
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_an", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="annonce_id_an_seq", allocationSize=1, initialValue=1)
     */
    private $idAn;

    /**
     * @var string
     *
     * @ORM\Column(name="label_an", type="string", nullable=true)
     */
    private $labelAn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication_an", type="date", nullable=true)
     */
    private $datePublicationAn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validation_an", type="date", nullable=true)
     */
    private $dateValidationAn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_an", type="date", nullable=true)
     */
    private $dateFinAn;

    /**
     * @var string
     *
     * @ORM\Column(name="marque_an", type="string", nullable=true)
     */
    private $marqueAn;

    /**
     * @var string
     *
     * @ORM\Column(name="modele_an", type="string", nullable=true)
     */
    private $modeleAn;

    /**
     * @var string
     *
     * @ORM\Column(name="gamme_an", type="string", nullable=true)
     */
    private $gammeAn;

    /**
     * @var string
     *
     * @ORM\Column(name="volant_an", type="string", nullable=true)
     */
    private $volantAn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_immatriculation_an", type="date", nullable=true)
     */
    private $dateImmatriculationAn;

    /**
     * @var float
     *
     * @ORM\Column(name="kilometrage_an", type="float", precision=10, scale=0, nullable=true)
     */
    private $kilometrageAn;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_an", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixAn;

    /**
     * @var integer
     *
     * @ORM\Column(name="puissance_an", type="integer", nullable=true)
     */
    private $puissanceAn;

    /**
     * @var integer
     *
     * @ORM\Column(name="puissancef_an", type="integer", nullable=true)
     */
    private $puissancefAn;

    /**
     * @var string
     *
     * @ORM\Column(name="carburant_an", type="string", nullable=true)
     */
    private $carburantAn;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbplaces_an", type="integer", nullable=true)
     */
    private $nbplacesAn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dernier_passage_mine_an", type="date", nullable=true)
     */
    private $dernierPassageMineAn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dernier_passage_contr_an", type="date", nullable=true)
     */
    private $dernierPassageContrAn;

    /**
     * @var string
     *
     * @ORM\Column(name="equipements_an", type="string", length=255, nullable=true)
     */
    private $equipementsAn;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite_reservoir_an", type="integer", nullable=true)
     */
    private $capaciteReservoirAn;

    /**
     * @var string
     *
     * @ORM\Column(name="classe_env_an", type="string", length=255, nullable=true)
     */
    private $classeEnvAn;

    /**
     * @var string
     *
     * @ORM\Column(name="infos_reservoir_an", type="string", length=255, nullable=true)
     */
    private $infosReservoirAn;

    /**
     * @var string
     *
     * @ORM\Column(name="norme_euro_an", type="string", length=255, nullable=true)
     */
    private $normeEuroAn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="boite_vitesse_an", type="boolean", nullable=true)
     */
    private $boiteVitesseAn;

    /**
     * @var string
     *
     * @ORM\Column(name="embrayage_an", type="string", length=255, nullable=true)
     */
    private $embrayageAn;

    /**
     * @var string
     *
     * @ORM\Column(name="direction_an", type="string", length=255, nullable=true)
     */
    private $directionAn;

    /**
     * @var string
     *
     * @ORM\Column(name="roues_pneus_an", type="string", length=255, nullable=true)
     */
    private $rouesPneusAn;

    /**
     * @var string
     *
     * @ORM\Column(name="freins_an", type="string", length=255, nullable=true)
     */
    private $freinsAn;

    /**
     * @var string
     *
     * @ORM\Column(name="aspiration_echappement_an", type="string", length=255, nullable=true)
     */
    private $aspirationEchappementAn;

    /**
     * @var string
     *
     * @ORM\Column(name="chassis_an", type="string", length=255, nullable=true)
     */
    private $chassisAn;

    /**
     * @var string
     *
     * @ORM\Column(name="cadrans_an", type="string", length=255, nullable=true)
     */
    private $cadransAn;

    /**
     * @var string
     *
     * @ORM\Column(name="circuit_electrique_an", type="string", length=255, nullable=true)
     */
    private $circuitElectriqueAn;

    /**
     * @var string
     *
     * @ORM\Column(name="empattement_an", type="string", length=255, nullable=true)
     */
    private $empattementAn;

    /**
     * @var integer
     *
     * @ORM\Column(name="surface_an", type="integer", nullable=true)
     */
    private $surfaceAn;

    /**
     * @var float
     *
     * @ORM\Column(name="hauteur_an", type="float", precision=10, scale=0, nullable=true)
     */
    private $hauteurAn;

    /**
     * @var float
     *
     * @ORM\Column(name="largeur_an", type="float", precision=10, scale=0, nullable=true)
     */
    private $largeurAn;

    /**
     * @var string
     *
     * @ORM\Column(name="charge_utile_an", type="string", length=255, nullable=true)
     */
    private $chargeUtileAn;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_total_charge_an", type="float", precision=10, scale=0, nullable=true)
     */
    private $poidsTotalChargeAn;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_total_roulant_autorise_an", type="float", precision=10, scale=0, nullable=true)
     */
    private $poidsTotalRoulantAutoriseAn;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_vide_an", type="float", precision=10, scale=0, nullable=true)
     */
    private $poidsVideAn;

    /**
     * @var string
     *
     * @ORM\Column(name="liens_photos_an", type="string", length=255, nullable=true)
     */
    private $liensPhotosAn;

    /**
     * @var integer
     *
     * @ORM\Column(name="cp_an", type="integer", nullable=true)
     */
    private $cpAn;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ca", type="integer", nullable=true)
     */
    private $idCa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_us", type="integer", nullable=true)
     */
    private $idUs;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pa", referencedColumnName="id_pa")
     * })
     */
    private $idPa;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_re", referencedColumnName="id_re")
     * })
     */
    private $idRe;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_de", referencedColumnName="id_de")
     * })
     */
    private $idDe;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ut", referencedColumnName="id")
     * })
     */
    private $idUt;

    /**
     * @var \EtatAnnonce
     *
     * @ORM\ManyToOne(targetEntity="EtatAnnonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ea", referencedColumnName="id_ea")
     * })
     */
    private $idEa;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vi", referencedColumnName="id_vi")
     * })
     */
    private $idVi;



    /**
     * Get idAn
     *
     * @return integer 
     */
    public function getIdAn()
    {
        return $this->idAn;
    }

    /**
     * Set labelAn
     *
     * @param string $labelAn
     * @return Annonce
     */
    public function setLabelAn($labelAn)
    {
        $this->labelAn = $labelAn;

        return $this;
    }

    /**
     * Get labelAn
     *
     * @return string 
     */
    public function getLabelAn()
    {
        return $this->labelAn;
    }

    /**
     * Set datePublicationAn
     *
     * @param \DateTime $datePublicationAn
     * @return Annonce
     */
    public function setDatePublicationAn($datePublicationAn)
    {
        $this->datePublicationAn = $datePublicationAn;

        return $this;
    }

    /**
     * Get datePublicationAn
     *
     * @return \DateTime 
     */
    public function getDatePublicationAn()
    {
        return $this->datePublicationAn;
    }

    /**
     * Set dateValidationAn
     *
     * @param \DateTime $dateValidationAn
     * @return Annonce
     */
    public function setDateValidationAn($dateValidationAn)
    {
        $this->dateValidationAn = $dateValidationAn;

        return $this;
    }

    /**
     * Get dateValidationAn
     *
     * @return \DateTime 
     */
    public function getDateValidationAn()
    {
        return $this->dateValidationAn;
    }

    /**
     * Set dateFinAn
     *
     * @param \DateTime $dateFinAn
     * @return Annonce
     */
    public function setDateFinAn($dateFinAn)
    {
        $this->dateFinAn = $dateFinAn;

        return $this;
    }

    /**
     * Get dateFinAn
     *
     * @return \DateTime 
     */
    public function getDateFinAn()
    {
        return $this->dateFinAn;
    }

    /**
     * Set marqueAn
     *
     * @param string $marqueAn
     * @return Annonce
     */
    public function setMarqueAn($marqueAn)
    {
        $this->marqueAn = $marqueAn;

        return $this;
    }

    /**
     * Get marqueAn
     *
     * @return string 
     */
    public function getMarqueAn()
    {
        return $this->marqueAn;
    }

    /**
     * Set modeleAn
     *
     * @param string $modeleAn
     * @return Annonce
     */
    public function setModeleAn($modeleAn)
    {
        $this->modeleAn = $modeleAn;

        return $this;
    }

    /**
     * Get modeleAn
     *
     * @return string 
     */
    public function getModeleAn()
    {
        return $this->modeleAn;
    }

    /**
     * Set gammeAn
     *
     * @param string $gammeAn
     * @return Annonce
     */
    public function setGammeAn($gammeAn)
    {
        $this->gammeAn = $gammeAn;

        return $this;
    }

    /**
     * Get gammeAn
     *
     * @return string 
     */
    public function getGammeAn()
    {
        return $this->gammeAn;
    }

    /**
     * Set volantAn
     *
     * @param string $volantAn
     * @return Annonce
     */
    public function setVolantAn($volantAn)
    {
        $this->volantAn = $volantAn;

        return $this;
    }

    /**
     * Get volantAn
     *
     * @return string 
     */
    public function getVolantAn()
    {
        return $this->volantAn;
    }

    /**
     * Set dateImmatriculationAn
     *
     * @param \DateTime $dateImmatriculationAn
     * @return Annonce
     */
    public function setDateImmatriculationAn($dateImmatriculationAn)
    {
        $this->dateImmatriculationAn = $dateImmatriculationAn;

        return $this;
    }

    /**
     * Get dateImmatriculationAn
     *
     * @return \DateTime 
     */
    public function getDateImmatriculationAn()
    {
        return $this->dateImmatriculationAn;
    }

    /**
     * Set kilometrageAn
     *
     * @param float $kilometrageAn
     * @return Annonce
     */
    public function setKilometrageAn($kilometrageAn)
    {
        $this->kilometrageAn = $kilometrageAn;

        return $this;
    }

    /**
     * Get kilometrageAn
     *
     * @return float 
     */
    public function getKilometrageAn()
    {
        return $this->kilometrageAn;
    }

    /**
     * Set prixAn
     *
     * @param float $prixAn
     * @return Annonce
     */
    public function setPrixAn($prixAn)
    {
        $this->prixAn = $prixAn;

        return $this;
    }

    /**
     * Get prixAn
     *
     * @return float 
     */
    public function getPrixAn()
    {
        return $this->prixAn;
    }

    /**
     * Set puissanceAn
     *
     * @param integer $puissanceAn
     * @return Annonce
     */
    public function setPuissanceAn($puissanceAn)
    {
        $this->puissanceAn = $puissanceAn;

        return $this;
    }

    /**
     * Get puissanceAn
     *
     * @return integer 
     */
    public function getPuissanceAn()
    {
        return $this->puissanceAn;
    }

    /**
     * Set puissancefAn
     *
     * @param integer $puissancefAn
     * @return Annonce
     */
    public function setPuissancefAn($puissancefAn)
    {
        $this->puissancefAn = $puissancefAn;

        return $this;
    }

    /**
     * Get puissancefAn
     *
     * @return integer 
     */
    public function getPuissancefAn()
    {
        return $this->puissancefAn;
    }

    /**
     * Set carburantAn
     *
     * @param string $carburantAn
     * @return Annonce
     */
    public function setCarburantAn($carburantAn)
    {
        $this->carburantAn = $carburantAn;

        return $this;
    }

    /**
     * Get carburantAn
     *
     * @return string 
     */
    public function getCarburantAn()
    {
        return $this->carburantAn;
    }

    /**
     * Set nbplacesAn
     *
     * @param integer $nbplacesAn
     * @return Annonce
     */
    public function setNbplacesAn($nbplacesAn)
    {
        $this->nbplacesAn = $nbplacesAn;

        return $this;
    }

    /**
     * Get nbplacesAn
     *
     * @return integer 
     */
    public function getNbplacesAn()
    {
        return $this->nbplacesAn;
    }

    /**
     * Set dernierPassageMineAn
     *
     * @param \DateTime $dernierPassageMineAn
     * @return Annonce
     */
    public function setDernierPassageMineAn($dernierPassageMineAn)
    {
        $this->dernierPassageMineAn = $dernierPassageMineAn;

        return $this;
    }

    /**
     * Get dernierPassageMineAn
     *
     * @return \DateTime 
     */
    public function getDernierPassageMineAn()
    {
        return $this->dernierPassageMineAn;
    }

    /**
     * Set dernierPassageContrAn
     *
     * @param \DateTime $dernierPassageContrAn
     * @return Annonce
     */
    public function setDernierPassageContrAn($dernierPassageContrAn)
    {
        $this->dernierPassageContrAn = $dernierPassageContrAn;

        return $this;
    }

    /**
     * Get dernierPassageContrAn
     *
     * @return \DateTime 
     */
    public function getDernierPassageContrAn()
    {
        return $this->dernierPassageContrAn;
    }

    /**
     * Set equipementsAn
     *
     * @param string $equipementsAn
     * @return Annonce
     */
    public function setEquipementsAn($equipementsAn)
    {
        $this->equipementsAn = $equipementsAn;

        return $this;
    }

    /**
     * Get equipementsAn
     *
     * @return string 
     */
    public function getEquipementsAn()
    {
        return $this->equipementsAn;
    }

    /**
     * Set capaciteReservoirAn
     *
     * @param integer $capaciteReservoirAn
     * @return Annonce
     */
    public function setCapaciteReservoirAn($capaciteReservoirAn)
    {
        $this->capaciteReservoirAn = $capaciteReservoirAn;

        return $this;
    }

    /**
     * Get capaciteReservoirAn
     *
     * @return integer 
     */
    public function getCapaciteReservoirAn()
    {
        return $this->capaciteReservoirAn;
    }

    /**
     * Set classeEnvAn
     *
     * @param string $classeEnvAn
     * @return Annonce
     */
    public function setClasseEnvAn($classeEnvAn)
    {
        $this->classeEnvAn = $classeEnvAn;

        return $this;
    }

    /**
     * Get classeEnvAn
     *
     * @return string 
     */
    public function getClasseEnvAn()
    {
        return $this->classeEnvAn;
    }

    /**
     * Set infosReservoirAn
     *
     * @param string $infosReservoirAn
     * @return Annonce
     */
    public function setInfosReservoirAn($infosReservoirAn)
    {
        $this->infosReservoirAn = $infosReservoirAn;

        return $this;
    }

    /**
     * Get infosReservoirAn
     *
     * @return string 
     */
    public function getInfosReservoirAn()
    {
        return $this->infosReservoirAn;
    }

    /**
     * Set normeEuroAn
     *
     * @param string $normeEuroAn
     * @return Annonce
     */
    public function setNormeEuroAn($normeEuroAn)
    {
        $this->normeEuroAn = $normeEuroAn;

        return $this;
    }

    /**
     * Get normeEuroAn
     *
     * @return string 
     */
    public function getNormeEuroAn()
    {
        return $this->normeEuroAn;
    }

    /**
     * Set boiteVitesseAn
     *
     * @param boolean $boiteVitesseAn
     * @return Annonce
     */
    public function setBoiteVitesseAn($boiteVitesseAn)
    {
        $this->boiteVitesseAn = $boiteVitesseAn;

        return $this;
    }

    /**
     * Get boiteVitesseAn
     *
     * @return boolean 
     */
    public function getBoiteVitesseAn()
    {
        return $this->boiteVitesseAn;
    }

    /**
     * Set embrayageAn
     *
     * @param string $embrayageAn
     * @return Annonce
     */
    public function setEmbrayageAn($embrayageAn)
    {
        $this->embrayageAn = $embrayageAn;

        return $this;
    }

    /**
     * Get embrayageAn
     *
     * @return string 
     */
    public function getEmbrayageAn()
    {
        return $this->embrayageAn;
    }

    /**
     * Set directionAn
     *
     * @param string $directionAn
     * @return Annonce
     */
    public function setDirectionAn($directionAn)
    {
        $this->directionAn = $directionAn;

        return $this;
    }

    /**
     * Get directionAn
     *
     * @return string 
     */
    public function getDirectionAn()
    {
        return $this->directionAn;
    }

    /**
     * Set rouesPneusAn
     *
     * @param string $rouesPneusAn
     * @return Annonce
     */
    public function setRouesPneusAn($rouesPneusAn)
    {
        $this->rouesPneusAn = $rouesPneusAn;

        return $this;
    }

    /**
     * Get rouesPneusAn
     *
     * @return string 
     */
    public function getRouesPneusAn()
    {
        return $this->rouesPneusAn;
    }

    /**
     * Set freinsAn
     *
     * @param string $freinsAn
     * @return Annonce
     */
    public function setFreinsAn($freinsAn)
    {
        $this->freinsAn = $freinsAn;

        return $this;
    }

    /**
     * Get freinsAn
     *
     * @return string 
     */
    public function getFreinsAn()
    {
        return $this->freinsAn;
    }

    /**
     * Set aspirationEchappementAn
     *
     * @param string $aspirationEchappementAn
     * @return Annonce
     */
    public function setAspirationEchappementAn($aspirationEchappementAn)
    {
        $this->aspirationEchappementAn = $aspirationEchappementAn;

        return $this;
    }

    /**
     * Get aspirationEchappementAn
     *
     * @return string 
     */
    public function getAspirationEchappementAn()
    {
        return $this->aspirationEchappementAn;
    }

    /**
     * Set chassisAn
     *
     * @param string $chassisAn
     * @return Annonce
     */
    public function setChassisAn($chassisAn)
    {
        $this->chassisAn = $chassisAn;

        return $this;
    }

    /**
     * Get chassisAn
     *
     * @return string 
     */
    public function getChassisAn()
    {
        return $this->chassisAn;
    }

    /**
     * Set cadransAn
     *
     * @param string $cadransAn
     * @return Annonce
     */
    public function setCadransAn($cadransAn)
    {
        $this->cadransAn = $cadransAn;

        return $this;
    }

    /**
     * Get cadransAn
     *
     * @return string 
     */
    public function getCadransAn()
    {
        return $this->cadransAn;
    }

    /**
     * Set circuitElectriqueAn
     *
     * @param string $circuitElectriqueAn
     * @return Annonce
     */
    public function setCircuitElectriqueAn($circuitElectriqueAn)
    {
        $this->circuitElectriqueAn = $circuitElectriqueAn;

        return $this;
    }

    /**
     * Get circuitElectriqueAn
     *
     * @return string 
     */
    public function getCircuitElectriqueAn()
    {
        return $this->circuitElectriqueAn;
    }

    /**
     * Set empattementAn
     *
     * @param string $empattementAn
     * @return Annonce
     */
    public function setEmpattementAn($empattementAn)
    {
        $this->empattementAn = $empattementAn;

        return $this;
    }

    /**
     * Get empattementAn
     *
     * @return string 
     */
    public function getEmpattementAn()
    {
        return $this->empattementAn;
    }

    /**
     * Set surfaceAn
     *
     * @param integer $surfaceAn
     * @return Annonce
     */
    public function setSurfaceAn($surfaceAn)
    {
        $this->surfaceAn = $surfaceAn;

        return $this;
    }

    /**
     * Get surfaceAn
     *
     * @return integer 
     */
    public function getSurfaceAn()
    {
        return $this->surfaceAn;
    }

    /**
     * Set hauteurAn
     *
     * @param float $hauteurAn
     * @return Annonce
     */
    public function setHauteurAn($hauteurAn)
    {
        $this->hauteurAn = $hauteurAn;

        return $this;
    }

    /**
     * Get hauteurAn
     *
     * @return float 
     */
    public function getHauteurAn()
    {
        return $this->hauteurAn;
    }

    /**
     * Set largeurAn
     *
     * @param float $largeurAn
     * @return Annonce
     */
    public function setLargeurAn($largeurAn)
    {
        $this->largeurAn = $largeurAn;

        return $this;
    }

    /**
     * Get largeurAn
     *
     * @return float 
     */
    public function getLargeurAn()
    {
        return $this->largeurAn;
    }

    /**
     * Set chargeUtileAn
     *
     * @param string $chargeUtileAn
     * @return Annonce
     */
    public function setChargeUtileAn($chargeUtileAn)
    {
        $this->chargeUtileAn = $chargeUtileAn;

        return $this;
    }

    /**
     * Get chargeUtileAn
     *
     * @return string 
     */
    public function getChargeUtileAn()
    {
        return $this->chargeUtileAn;
    }

    /**
     * Set poidsTotalChargeAn
     *
     * @param float $poidsTotalChargeAn
     * @return Annonce
     */
    public function setPoidsTotalChargeAn($poidsTotalChargeAn)
    {
        $this->poidsTotalChargeAn = $poidsTotalChargeAn;

        return $this;
    }

    /**
     * Get poidsTotalChargeAn
     *
     * @return float 
     */
    public function getPoidsTotalChargeAn()
    {
        return $this->poidsTotalChargeAn;
    }

    /**
     * Set poidsTotalRoulantAutoriseAn
     *
     * @param float $poidsTotalRoulantAutoriseAn
     * @return Annonce
     */
    public function setPoidsTotalRoulantAutoriseAn($poidsTotalRoulantAutoriseAn)
    {
        $this->poidsTotalRoulantAutoriseAn = $poidsTotalRoulantAutoriseAn;

        return $this;
    }

    /**
     * Get poidsTotalRoulantAutoriseAn
     *
     * @return float 
     */
    public function getPoidsTotalRoulantAutoriseAn()
    {
        return $this->poidsTotalRoulantAutoriseAn;
    }

    /**
     * Set poidsVideAn
     *
     * @param float $poidsVideAn
     * @return Annonce
     */
    public function setPoidsVideAn($poidsVideAn)
    {
        $this->poidsVideAn = $poidsVideAn;

        return $this;
    }

    /**
     * Get poidsVideAn
     *
     * @return float 
     */
    public function getPoidsVideAn()
    {
        return $this->poidsVideAn;
    }

    /**
     * Set liensPhotosAn
     *
     * @param string $liensPhotosAn
     * @return Annonce
     */
    public function setLiensPhotosAn($liensPhotosAn)
    {
        $this->liensPhotosAn = $liensPhotosAn;

        return $this;
    }

    /**
     * Get liensPhotosAn
     *
     * @return string 
     */
    public function getLiensPhotosAn()
    {
        return $this->liensPhotosAn;
    }

    /**
     * Set cpAn
     *
     * @param integer $cpAn
     * @return Annonce
     */
    public function setCpAn($cpAn)
    {
        $this->cpAn = $cpAn;

        return $this;
    }

    /**
     * Get cpAn
     *
     * @return integer 
     */
    public function getCpAn()
    {
        return $this->cpAn;
    }

    /**
     * Set idCa
     *
     * @param integer $idCa
     * @return Annonce
     */
    public function setIdCa($idCa)
    {
        $this->idCa = $idCa;

        return $this;
    }

    /**
     * Get idCa
     *
     * @return integer 
     */
    public function getIdCa()
    {
        return $this->idCa;
    }

    /**
     * Set idUs
     *
     * @param integer $idUs
     * @return Annonce
     */
    public function setIdUs($idUs)
    {
        $this->idUs = $idUs;

        return $this;
    }

    /**
     * Get idUs
     *
     * @return integer 
     */
    public function getIdUs()
    {
        return $this->idUs;
    }

    /**
     * Set idPa
     *
     * @param \nftAnnonceBundle\Entity\Pays $idPa
     * @return Annonce
     */
    public function setIdPa(\nftAnnonceBundle\Entity\Pays $idPa = null)
    {
        $this->idPa = $idPa;

        return $this;
    }

    /**
     * Get idPa
     *
     * @return \nftAnnonceBundle\Entity\Pays 
     */
    public function getIdPa()
    {
        return $this->idPa;
    }

    /**
     * Set idRe
     *
     * @param \nftAnnonceBundle\Entity\Region $idRe
     * @return Annonce
     */
    public function setIdRe(\nftAnnonceBundle\Entity\Region $idRe = null)
    {
        $this->idRe = $idRe;

        return $this;
    }

    /**
     * Get idRe
     *
     * @return \nftAnnonceBundle\Entity\Region 
     */
    public function getIdRe()
    {
        return $this->idRe;
    }

    /**
     * Set idDe
     *
     * @param \nftAnnonceBundle\Entity\Departement $idDe
     * @return Annonce
     */
    public function setIdDe(\nftAnnonceBundle\Entity\Departement $idDe = null)
    {
        $this->idDe = $idDe;

        return $this;
    }

    /**
     * Get idDe
     *
     * @return \nftAnnonceBundle\Entity\Departement 
     */
    public function getIdDe()
    {
        return $this->idDe;
    }

    /**
     * Set idUt
     *
     * @param \nftAnnonceBundle\Entity\Utilisateur $idUt
     * @return Annonce
     */
    public function setIdUt(\nftAnnonceBundle\Entity\Utilisateur $idUt = null)
    {
        $this->idUt = $idUt;

        return $this;
    }

    /**
     * Get idUt
     *
     * @return \nftAnnonceBundle\Entity\Utilisateur 
     */
    public function getIdUt()
    {
        return $this->idUt;
    }

    /**
     * Set idEa
     *
     * @param \nftAnnonceBundle\Entity\EtatAnnonce $idEa
     * @return Annonce
     */
    public function setIdEa(\nftAnnonceBundle\Entity\EtatAnnonce $idEa = null)
    {
        $this->idEa = $idEa;

        return $this;
    }

    /**
     * Get idEa
     *
     * @return \nftAnnonceBundle\Entity\EtatAnnonce 
     */
    public function getIdEa()
    {
        return $this->idEa;
    }

    /**
     * Set idVi
     *
     * @param \nftAnnonceBundle\Entity\Ville $idVi
     * @return Annonce
     */
    public function setIdVi(\nftAnnonceBundle\Entity\Ville $idVi = null)
    {
        $this->idVi = $idVi;

        return $this;
    }

    /**
     * Get idVi
     *
     * @return \nftAnnonceBundle\Entity\Ville 
     */
    public function getIdVi()
    {
        return $this->idVi;
    }
}
