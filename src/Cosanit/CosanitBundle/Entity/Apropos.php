<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apropos
 *
 * @ORM\Table(name="apropos")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\AproposRepository")
 */
class Apropos
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
     * @ORM\Column(name="titre1", type="string", length=255)
     */
    private $titre1;

    /**
     * @var string
     *
     * @ORM\Column(name="text1", type="text")
     */
    private $text1;

    /**
     * @var string
     *
     * @ORM\Column(name="titre2", type="string", length=255)
     */
    private $titre2;

    /**
     * @var string
     *
     * @ORM\Column(name="text2", type="text")
     */
    private $text2;


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
     * Set titre1
     *
     * @param string $titre1
     * @return Apropos
     */
    public function setTitre1($titre1)
    {
        $this->titre1 = $titre1;

        return $this;
    }

    /**
     * Get titre1
     *
     * @return string 
     */
    public function getTitre1()
    {
        return $this->titre1;
    }

    /**
     * Set text1
     *
     * @param string $text1
     * @return Apropos
     */
    public function setText1($text1)
    {
        $this->text1 = $text1;

        return $this;
    }

    /**
     * Get text1
     *
     * @return string 
     */
    public function getText1()
    {
        return $this->text1;
    }

    /**
     * Set titre2
     *
     * @param string $titre2
     * @return Apropos
     */
    public function setTitre2($titre2)
    {
        $this->titre2 = $titre2;

        return $this;
    }

    /**
     * Get titre2
     *
     * @return string 
     */
    public function getTitre2()
    {
        return $this->titre2;
    }

    /**
     * Set text2
     *
     * @param string $text2
     * @return Apropos
     */
    public function setText2($text2)
    {
        $this->text2 = $text2;

        return $this;
    }

    /**
     * Get text2
     *
     * @return string 
     */
    public function getText2()
    {
        return $this->text2;
    }
}
