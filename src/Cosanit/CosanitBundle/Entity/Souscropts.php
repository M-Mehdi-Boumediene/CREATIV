<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souscropts
 *
 * @ORM\Table(name="souscropts")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\SouscroptsRepository")
 */
class Souscropts
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;



    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;



    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;


    /**
     * @var string
     *
     * @ORM\Column(name="npermis", type="string", nullable=true, length=255)
     */
    private $npermis;


    /**
     * @var string
     *
     * @ORM\Column(name="catpermis", type="string", nullable=true, length=255)
     */
    private $catpermis;



    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", nullable=true, length=255)
     */
    private $genre;


    /**
     * @var string
     *
     * @ORM\Column(name="wilaya", type="string", nullable=true, length=255)
     */
    private $wilaya;


    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", nullable=true, length=255)
     */
    private $matricule;


    /**
     * @var string
     *
     * @ORM\Column(name="nserie", type="string", nullable=true, length=255)
     */
    private $nserie;


    /**
     * @var string
     *
     * @ORM\Column(name="ntype", type="string", nullable=true, length=255)
     */
    private $ntype;



    /**
     * @var string
     *
     * @ORM\Column(name="anneecircule", type="date", nullable=true, length=255)
     */
    private $anneecircule;


    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", nullable=true, length=255)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", nullable=true, length=255)
     */
    private $modele;


    /**
     * @var string
     *
     * @ORM\Column(name="usage", type="string", nullable=true, length=255)
     */
    private $usage;


    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", nullable=true, length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="nbplace", type="string", nullable=true, length=255)
     */
    private $nbplace;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepermis", nullable=true, type="date")
     */
    private $datepermis;



    /**
     * @ORM\OneToOne(targetEntity="Media", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $photopermis;


    /**
     * @ORM\OneToOne(targetEntity="Media", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $photocartegrise;




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
     * @return Souscropts
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Souscropts
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Souscropts
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set npermis
     *
     * @param string $npermis
     *
     * @return Souscropts
     */
    public function setNpermis($npermis)
    {
        $this->npermis = $npermis;

        return $this;
    }

    /**
     * Get npermis
     *
     * @return string
     */
    public function getNpermis()
    {
        return $this->npermis;
    }

    /**
     * Set catpermis
     *
     * @param string $catpermis
     *
     * @return Souscropts
     */
    public function setCatpermis($catpermis)
    {
        $this->catpermis = $catpermis;

        return $this;
    }

    /**
     * Get catpermis
     *
     * @return string
     */
    public function getCatpermis()
    {
        return $this->catpermis;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Souscropts
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set wilaya
     *
     * @param string $wilaya
     *
     * @return Souscropts
     */
    public function setWilaya($wilaya)
    {
        $this->wilaya = $wilaya;

        return $this;
    }

    /**
     * Get wilaya
     *
     * @return string
     */
    public function getWilaya()
    {
        return $this->wilaya;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Souscropts
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nserie
     *
     * @param string $nserie
     *
     * @return Souscropts
     */
    public function setNserie($nserie)
    {
        $this->nserie = $nserie;

        return $this;
    }

    /**
     * Get nserie
     *
     * @return string
     */
    public function getNserie()
    {
        return $this->nserie;
    }

    /**
     * Set ntype
     *
     * @param string $ntype
     *
     * @return Souscropts
     */
    public function setNtype($ntype)
    {
        $this->ntype = $ntype;

        return $this;
    }

    /**
     * Get ntype
     *
     * @return string
     */
    public function getNtype()
    {
        return $this->ntype;
    }

    /**
     * Set anneecircule
     *
     * @param \DateTime $anneecircule
     *
     * @return Souscropts
     */
    public function setAnneecircule($anneecircule)
    {
        $this->anneecircule = $anneecircule;

        return $this;
    }

    /**
     * Get anneecircule
     *
     * @return \DateTime
     */
    public function getAnneecircule()
    {
        return $this->anneecircule;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Souscropts
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return Souscropts
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set usage
     *
     * @param string $usage
     *
     * @return Souscropts
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;

        return $this;
    }

    /**
     * Get usage
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Souscropts
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
     * @return Souscropts
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
     * Set datepermis
     *
     * @param \DateTime $datepermis
     *
     * @return Souscropts
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
     * Set photopermis
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $photopermis
     *
     * @return Souscropts
     */
    public function setPhotopermis(\Cosanit\CosanitBundle\Entity\Media $photopermis = null)
    {
        $this->photopermis = $photopermis;

        return $this;
    }

    /**
     * Get photopermis
     *
     * @return \Cosanit\CosanitBundle\Entity\Media
     */
    public function getPhotopermis()
    {
        return $this->photopermis;
    }

    /**
     * Set photocartegrise
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $photocartegrise
     *
     * @return Souscropts
     */
    public function setPhotocartegrise(\Cosanit\CosanitBundle\Entity\Media $photocartegrise = null)
    {
        $this->photocartegrise = $photocartegrise;

        return $this;
    }

    /**
     * Get photocartegrise
     *
     * @return \Cosanit\CosanitBundle\Entity\Media
     */
    public function getPhotocartegrise()
    {
        return $this->photocartegrise;
    }
}
