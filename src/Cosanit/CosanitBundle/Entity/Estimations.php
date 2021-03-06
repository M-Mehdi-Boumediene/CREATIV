<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estimations
 *
 * @ORM\Table(name="estimations")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\EstimationsRepository")
 */
class Estimations
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
     * @ORM\Column(name="en", type="string", length=255, nullable=true)
     */
    private $en;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="np", type="integer", nullable=true)
     */
    private $np;

    /**
     * @var int
     *
     * @ORM\Column(name="surfaceh", type="integer", nullable=true)
     */
    private $surfaceh;

    /**
     * @var int
     *
     * @ORM\Column(name="surfacet", type="integer", nullable=true)
     */
    private $surfacet;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=255, nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cpostal", type="string", length=255, nullable=true)
     */
    private $cpostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville2", type="string", length=255, nullable=true)
     */
    private $ville2;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;


    /**
     * @var string
     *
     * @ORM\Column(name="mr", type="boolean", nullable=true)
     */
    private $mr;

    /**
     * @var string
     *
     * @ORM\Column(name="mme", type="boolean", nullable=true)
     */
    private $mme;

    /**
     * @var string
     *
     * @ORM\Column(name="melle", type="boolean", nullable=true)
     */
    private $melle;


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
     * Set en
     *
     * @param string $en
     *
     * @return Estimations
     */
    public function setEn($en)
    {
        $this->en = $en;

        return $this;
    }

    /**
     * Get en
     *
     * @return string
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Estimations
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set np
     *
     * @param integer $np
     *
     * @return Estimations
     */
    public function setNp($np)
    {
        $this->np = $np;

        return $this;
    }

    /**
     * Get np
     *
     * @return int
     */
    public function getNp()
    {
        return $this->np;
    }

    /**
     * Set surfaceh
     *
     * @param integer $surfaceh
     *
     * @return Estimations
     */
    public function setSurfaceh($surfaceh)
    {
        $this->surfaceh = $surfaceh;

        return $this;
    }

    /**
     * Get surfaceh
     *
     * @return int
     */
    public function getSurfaceh()
    {
        return $this->surfaceh;
    }

    /**
     * Set surfacet
     *
     * @param integer $surfacet
     *
     * @return Estimations
     */
    public function setSurfacet($surfacet)
    {
        $this->surfacet = $surfacet;

        return $this;
    }

    /**
     * Get surfacet
     *
     * @return int
     */
    public function getSurfacet()
    {
        return $this->surfacet;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Estimations
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Estimations
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Estimations
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Estimations
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
     * @return Estimations
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Estimations
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
     * Set cpostal
     *
     * @param string $cpostal
     *
     * @return Estimations
     */
    public function setCpostal($cpostal)
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    /**
     * Get cpostal
     *
     * @return string
     */
    public function getCpostal()
    {
        return $this->cpostal;
    }

    /**
     * Set ville2
     *
     * @param string $ville2
     *
     * @return Estimations
     */
    public function setVille2($ville2)
    {
        $this->ville2 = $ville2;

        return $this;
    }

    /**
     * Get ville2
     *
     * @return string
     */
    public function getVille2()
    {
        return $this->ville2;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Estimations
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Estimations
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
     * Set mr
     *
     * @param boolean $mr
     *
     * @return Estimations
     */
    public function setMr($mr)
    {
        $this->mr = $mr;

        return $this;
    }

    /**
     * Get mr
     *
     * @return boolean
     */
    public function getMr()
    {
        return $this->mr;
    }

    /**
     * Set mme
     *
     * @param boolean $mme
     *
     * @return Estimations
     */
    public function setMme($mme)
    {
        $this->mme = $mme;

        return $this;
    }

    /**
     * Get mme
     *
     * @return boolean
     */
    public function getMme()
    {
        return $this->mme;
    }

    /**
     * Set melle
     *
     * @param boolean $melle
     *
     * @return Estimations
     */
    public function setMelle($melle)
    {
        $this->melle = $melle;

        return $this;
    }

    /**
     * Get melle
     *
     * @return boolean
     */
    public function getMelle()
    {
        return $this->melle;
    }

    /**
     * Set photopermis
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $photopermis
     *
     * @return Estimations
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
     * @return Estimations
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
