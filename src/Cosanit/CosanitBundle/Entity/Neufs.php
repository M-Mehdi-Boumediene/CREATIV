<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * Neufs
 *
 * @ORM\Table(name="neufs")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\NeufsRepository")
 */
class Neufs
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
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;


    /**
     * @var string
     *
     * @ORM\Column(name="soustitre", type="text", length=255, nullable=true)
     */
    private $soustitre;


    /**
     * @var string
     *
     * @ORM\Column(name="text1", type="text", nullable=true)
     */
    private $text1;

    /**
     * @var string
     *
     * @ORM\Column(name="text2", type="text", nullable=true)
     */
    private $text2;




    /**
     * @var string
     *
     * @ORM\Column(name="disponible", type="date",  nullable=true)
     */
    private $disponible;




    /**
     * @ORM\ManyToMany(targetEntity="Media", cascade={"all"})
     * @ORM\JoinColumn(name="photos",nullable=true))
     */
    private $image1;


    /**
     * @Gedmo\Slug(fields={"titre"})
     * @ORM\Column(name="slug", type="string", length=255,unique=true)
     */
    private $slug;

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
     * Set titre
     *
     * @param string $titre
     * @return Produits
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set text1
     *
     * @param string $text1
     * @return Produits
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
     * Set text2
     *
     * @param string $text2
     * @return Produits
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




    /**
     * Get typebien
     *
     * @return string
     */
    public function getTypebien()
    {
        return $this->typebien;
    }

    /**
     * Set disponible
     *
     * @param \DateTime $disponible
     * @return Produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return \DateTime
     */
    public function getDisponible()
    {
        return $this->disponible;
    }




    /**
     * Add image1
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $image1
     * @return Produits
     */
    public function addImage1(\Cosanit\CosanitBundle\Entity\Media $image1)
    {
        $this->image1[] = $image1;

        return $this;
    }

    /**
     * Remove image1
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $image1
     */
    public function removeImage1(\Cosanit\CosanitBundle\Entity\Media $image1)
    {
        $this->image1->removeElement($image1);
    }

    /**
     * Set image1
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $image1
     * @return Produits
     */
    public function setImage1(\Cosanit\CosanitBundle\Entity\Media $image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return \Cosanit\CosanitBundle\Entity\Media
     */
    public function getImage1()
    {
        return $this->image1;
    }


    /**
     * Set soustitre
     *
     * @param string $soustitre
     *
     * @return Neufs
     */
    public function setSoustitre($soustitre)
    {
        $this->soustitre = $soustitre;

        return $this;
    }

    /**
     * Get soustitre
     *
     * @return string
     */
    public function getSoustitre()
    {
        return $this->soustitre;
    }


    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

}
