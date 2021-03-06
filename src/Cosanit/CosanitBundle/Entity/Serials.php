<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serials
 *
 * @ORM\Table(name="serials")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\SerialsRepository")
 */
class Serials
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
     * @ORM\Column(name="debut", type="string", length=255)
     */
    private $debut;

    /**
     * @var string
     *
     * @ORM\Column(name="fin", type="string", length=255)
     */
    private $fin;


    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=255,nullable=true)
     */
    private $serial;


    /**
     * @var string
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;



    /** @ORM\Column(type="datetime") */
    private $dateajout;


    /** @ORM\Column(type="datetime") */
    private $clientdate;

    public function __construct()
    {
        $this->dateajout = new \DateTime();
        $this->clientdate = new \DateTime();



    }
    
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
     * Set debut
     *
     * @param string $debut
     * @return Serials
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return string 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param string $fin
     * @return Serials
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return string 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set serial
     *
     * @param string $serial
     * @return Serials
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
     * Set active
     *
     * @param boolean $active
     * @return Serials
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set dateajout
     *
     * @param \DateTime $dateajout
     * @return Serials
     */
    public function setDateajout($dateajout)
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    /**
     * Get dateajout
     *
     * @return \DateTime 
     */
    public function getDateajout()
    {
        return $this->dateajout;
    }

    /**
     * Set clientdate
     *
     * @param \DateTime $clientdate
     * @return Serials
     */
    public function setClientdate($clientdate)
    {
        $this->clientdate = $clientdate;

        return $this;
    }

    /**
     * Get clientdate
     *
     * @return \DateTime 
     */
    public function getClientdate()
    {
        return $this->clientdate;
    }
}
