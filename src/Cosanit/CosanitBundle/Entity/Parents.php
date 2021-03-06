<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parents
 *
 * @ORM\Table(name="parents")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\ParentsRepository")
 */
class Parents
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity="Media", cascade={"all"})
     * @ORM\JoinColumn(name="photos",nullable=true))
     */
    private $image;


    /**
     * @ORM\ManyToMany(targetEntity="Categories", cascade={"all"})
     * @ORM\JoinColumn(name="parents",nullable=true))
     */
    protected $categories;

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
     * @return Souscat
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
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categories
     *
     * @param \Cosanit\CosanitBundle\Entity\Categories $categories
     * @return Parents
     */
    public function addCategory(\Cosanit\CosanitBundle\Entity\Categories $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Cosanit\CosanitBundle\Entity\Categories $categories
     */
    public function removeCategory(\Cosanit\CosanitBundle\Entity\Categories $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add image
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $image
     * @return Parents
     */
    public function addImage(\Cosanit\CosanitBundle\Entity\Media $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $image
     */
    public function removeImage(\Cosanit\CosanitBundle\Entity\Media $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImage()
    {
        return $this->image;
    }
}
