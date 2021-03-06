<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Positibe\Bundle\UniqueViewsBundle\Model\VisitableInterface;

/**
 * Produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\ProduitsRepository")
 */
class Produits implements VisitableInterface
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
     * @ORM\Column(name="count_views", type="integer")
     */
    protected $countViews = 0;



    /**
     * @var string
     *
     * @ORM\Column(name="exclusive", type="string", length=255, nullable=true)
     */
    private $exclusive;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

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
     * @ORM\Column(name="text3", type="text", nullable=true)
     */
    private $text3;


    /**
     * @ORM\ManyToOne(targetEntity="Categories", inversedBy="produits", cascade={"persist"})
     *
     */
    protected $categories;


    /**
     * @ORM\ManyToMany(targetEntity="Media", cascade={"all"})
     * @ORM\JoinColumn(name="photos",nullable=true))
     */
    private $image1;


    /**
     * @var string
     *
     * @ORM\Column(name="alaune", type="boolean", nullable=true)
     */
    private $alaune;


    /**
     * @Gedmo\Slug(fields={"titre"})
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
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
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get alaune
     *
     * @return boolean 
     */
    public function getAlaune()
    {
        return $this->alaune;
    }

    /**
     * Set alaune
     *
     * @param boolean $alaune
     * @return Produits
     */
    public function setAlaune($alaune)
    {
        $this->alaune = $alaune;

        return $this;
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
     * Set exclusive
     *
     * @param string $exclusive
     * @return Produits
     */
    public function setExclusive($exclusive)
    {
        $this->exclusive = $exclusive;

        return $this;
    }

    /**
     * Get exclusive
     *
     * @return string 
     */
    public function getExclusive()
    {
        return $this->exclusive;
    }



    /**
     * Set categories
     *
     * @param \Cosanit\CosanitBundle\Entity\Categories $categories
     * @return Produits
     */
    public function setCategories(\Cosanit\CosanitBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \Cosanit\CosanitBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }







    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Neufs
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
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
    /**
     * {@inheritdoc}
     */
    public function getVisitableId()
    {
        return $this->getSlug();
    }

    /**
     * {@inheritdoc}
     */
    public function getVisitableType()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function onNewViewed()
    {
        return $this->countViews++;
    }

    /**
     * {@inheritdoc}
     */
    public function countViews()
    {
        return $this->countViews;
    }

    /**
     * Set countViews
     *
     * @param integer $countViews
     *
     * @return Produits
     */
    public function setCountViews($countViews)
    {
        $this->countViews = $countViews;

        return $this;
    }

    /**
     * Get countViews
     *
     * @return integer
     */
    public function getCountViews()
    {
        return $this->countViews;
    }

    /**
     * Set text3
     *
     * @param string $text3
     *
     * @return Produits
     */
    public function setText3($text3)
    {
        $this->text3 = $text3;

        return $this;
    }

    /**
     * Get text3
     *
     * @return string
     */
    public function getText3()
    {
        return $this->text3;
    }
}
