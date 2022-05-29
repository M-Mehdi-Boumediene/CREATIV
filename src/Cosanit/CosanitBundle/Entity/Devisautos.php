<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devisautos
 *
 * @ORM\Table(name="devisautos")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\DevisautosRepository")
 */
class Devisautos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dure", type="string", length=255)
     */
    private $dure;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="nbplace", type="string", length=255)
     */
    private $nbplace;

    /**
     * @var string
     *
     * @ORM\Column(name="puissance", type="string", length=255)
     */
    private $puissance;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepermis", type="date")
     */
    private $datepermis;

    /**
     * @var string
     *
     * @ORM\Column(name="garantie", type="string", length=255)
     */
    private $garantie;

    /**
     * @var string
     *
     * @ORM\Column(name="incendies", type="string", length=255)
     */
    private $incendies;

    /**
     * @var string
     *
     * @ORM\Column(name="vols", type="string", length=255)
     */
    private $vols;

    /**
     * @var string
     *
     * @ORM\Column(name="bris", type="string", length=255)
     */
    private $bris;


    /**
     * @var string
     *
     * @ORM\Column(name="assistance1", type="string", length=255)
     */
    private $assistance1;


    /**
     * @var string
     *
     * @ORM\Column(name="assistance2", type="string", length=255)
     */
    private $assistance2;


    /**
     * @var string
     *
     * @ORM\Column(name="assistance3", type="string", length=255)
     */
    private $assistance3;


    /**
     * @var string
     *
     * @ORM\Column(name="defences", type="string", length=255)
     */
    private $defences;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Devisautos
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Devisautos
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Devisautos
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set nbplace
     *
     * @param string $nbplace
     *
     * @return Devisautos
     */
    public function setNbplace($nbplace)
    {
        $this->nbplace = $nbplace;

        return $this;
    }

    /**
     * Get nbplace
     *
     * @return string
     */
    public function getNbplace()
    {
        return $this->nbplace;
    }

    /**
     * Set puissance
     *
     * @param string $puissance
     *
     * @return Devisautos
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return string
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     *
     * @return Devisautos
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set datepermis
     *
     * @param \DateTime $datepermis
     *
     * @return Devisautos
     */
    public function setDatepermis($datepermis)
    {
        $this->datepermis = $datepermis;

        return $this;
    }

    /**
     * Get datepermis
     *
     * @return \DateTime
     */
    public function getDatepermis()
    {
        return $this->datepermis;
    }

    /**
     * Set garantie
     *
     * @param string $garantie
     *
     * @return Devisautos
     */
    public function setGarantie($garantie)
    {
        $this->garantie = $garantie;

        return $this;
    }

    /**
     * Get garantie
     *
     * @return string
     */
    public function getGarantie()
    {
        return $this->garantie;
    }

    /**
     * Set dure
     *
     * @param string $dure
     *
     * @return Devisautos
     */
    public function setDure($dure)
    {
        $this->dure = $dure;

        return $this;
    }

    /**
     * Get dure
     *
     * @return string
     */
    public function getDure()
    {
        return $this->dure;
    }

    /**
     * Set incendies
     *
     * @param string $incendies
     *
     * @return Devisautos
     */
    public function setIncendies($incendies)
    {
        $this->incendies = $incendies;

        return $this;
    }

    /**
     * Get incendies
     *
     * @return string
     */
    public function getIncendies()
    {
        return $this->incendies;
    }

    /**
     * Set vols
     *
     * @param string $vols
     *
     * @return Devisautos
     */
    public function setVols($vols)
    {
        $this->vols = $vols;

        return $this;
    }

    /**
     * Get vols
     *
     * @return string
     */
    public function getVols()
    {
        return $this->vols;
    }

    /**
     * Set bris
     *
     * @param string $bris
     *
     * @return Devisautos
     */
    public function setBris($bris)
    {
        $this->bris = $bris;

        return $this;
    }

    /**
     * Get bris
     *
     * @return string
     */
    public function getBris()
    {
        return $this->bris;
    }

    /**
     * Set assistance1
     *
     * @param string $assistance1
     *
     * @return Devisautos
     */
    public function setAssistance1($assistance1)
    {
        $this->assistance1 = $assistance1;

        return $this;
    }

    /**
     * Get assistance1
     *
     * @return string
     */
    public function getAssistance1()
    {
        return $this->assistance1;
    }

    /**
     * Set assistance2
     *
     * @param string $assistance2
     *
     * @return Devisautos
     */
    public function setAssistance2($assistance2)
    {
        $this->assistance2 = $assistance2;

        return $this;
    }

    /**
     * Get assistance2
     *
     * @return string
     */
    public function getAssistance2()
    {
        return $this->assistance2;
    }

    /**
     * Set defences
     *
     * @param string $defences
     *
     * @return Devisautos
     */
    public function setDefences($defences)
    {
        $this->defences = $defences;

        return $this;
    }

    /**
     * Get defences
     *
     * @return string
     */
    public function getDefences()
    {
        return $this->defences;
    }

    /**
     * Set assistance3
     *
     * @param string $assistance3
     *
     * @return Devisautos
     */
    public function setAssistance3($assistance3)
    {
        $this->assistance3 = $assistance3;

        return $this;
    }

    /**
     * Get assistance3
     *
     * @return string
     */
    public function getAssistance3()
    {
        return $this->assistance3;
    }
}
