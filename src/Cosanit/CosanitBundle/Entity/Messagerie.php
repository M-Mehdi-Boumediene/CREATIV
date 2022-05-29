<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerie
 *
 * @ORM\Table(name="messagerie")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\MessagerieRepository")
 */
class Messagerie
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
     * @ORM\Column(name="message", type="text")
     */

    private $message;


    /**
     * @var string
     *
     * @ORM\Column(name="message2", type="text")
     */

    private $message2;

    /**
     * @ORM\OneToMany(targetEntity="Activations", mappedBy="messagerie")
     */
    private $activations;
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
     * Set message
     *
     * @param string $message
     * @return Messagerie
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
     * Constructor
     */
    public function __construct()
    {
        $this->activations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activations
     *
     * @param \Cosanit\CosanitBundle\Entity\Activations $activations
     * @return Messagerie
     */
    public function addActivation(\Cosanit\CosanitBundle\Entity\Activations $activations)
    {
        $this->activations[] = $activations;

        return $this;
    }

    /**
     * Remove activations
     *
     * @param \Cosanit\CosanitBundle\Entity\Activations $activations
     */
    public function removeActivation(\Cosanit\CosanitBundle\Entity\Activations $activations)
    {
        $this->activations->removeElement($activations);
    }

    /**
     * Get activations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivations()
    {
        return $this->activations;
    }

    /**
     * Set message2
     *
     * @param string $message2
     * @return Messagerie
     */
    public function setMessage2($message2)
    {
        $this->message2 = $message2;

        return $this;
    }

    /**
     * Get message2
     *
     * @return string 
     */
    public function getMessage2()
    {
        return $this->message2;
    }
}
