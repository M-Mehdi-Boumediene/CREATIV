<?php

namespace Cosanit\CosanitBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Activations
 *
 * @ORM\Table(name="activations")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\ActivationsRepository")
 */
class Activations
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
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;


    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=255)
     */
    private $serial;

    /** @ORM\Column(type="datetime") */
    private $date;

    /** @ORM\Column(type="datetime", nullable=true) */
    private $dateactive;
    
    public function __construct()
    {
        $this->date = new \DateTime();
        $this->dateactive = new \DateTime();


    }


    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="wilaya", type="string", length=255)
     */
    private $wilaya;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text",nullable=true)
     */
    private $message;


    /**
     * @ORM\ManyToOne(targetEntity="Messagerie", inversedBy="activations")
     * @ORM\JoinColumn(name="message_id", referencedColumnName="id")
     */
    private $messagerie;


    /**
     * @ORM\OneToOne(targetEntity="Scans", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $photo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * Set nom
     *
     * @param string $nom
     * @return Activations
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
     * @return Activations
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
     * Set wilaya
     *
     * @param string $wilaya
     * @return Activations
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
     * Set tel
     *
     * @param string $tel
     * @return Activations
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
     * Set fax
     *
     * @param string $fax
     * @return Activations
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mobil
     *
     * @param string $mobil
     * @return Activations
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;

        return $this;
    }

    /**
     * Get mobil
     *
     * @return string 
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Activations
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
     * Set message
     *
     * @param string $message
     * @return Activations
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
     * Set messagerie
     *
     * @param \Cosanit\CosanitBundle\Entity\Messagerie $messagerie
     * @return Activations
     */
    public function setMessagerie(\Cosanit\CosanitBundle\Entity\Messagerie $messagerie = null)
    {
        $this->messagerie = $messagerie;

        return $this;
    }

    /**
     * Get messagerie
     *
     * @return \Cosanit\CosanitBundle\Entity\Messagerie 
     */
    public function getMessagerie()
    {
        return $this->messagerie;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Activations
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set photo
     *
     * @param \Cosanit\CosanitBundle\Entity\Scans $photo
     * @return Activations
     */
    public function setPhoto(\Cosanit\CosanitBundle\Entity\Scans $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \Cosanit\CosanitBundle\Entity\Scans
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Activations
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Activations
     */
    public function setDate($date)
    {
        $this->date = $date;


        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {

        return $this->date;
    }




    /**
     * Set serial
     *
     * @param string $serial
     * @return Activations
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }



    /**
     * Set dateactive
     *
     * @param \DateTime $dateactive
     * @return Activations
     */
    public function setDateactive($dateactive)
    {
        $this->dateactive = $dateactive;

        return $this;
    }

    /**
     * Get dateactive
     *
     * @return \DateTime 
     */
    public function getDateactive()
    {
        return $this->dateactive;
    }
}
