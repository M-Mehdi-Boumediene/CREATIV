<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\CategoriesRepository")
 */
class Categories
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255,nullable=true)
     */
    private $titre;

    /**
     * @Gedmo\Slug(fields={"nom"})
     * @ORM\Column(name="slug", type="string", length=25, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="inter", type="boolean",nullable=true)
     */
    private $inter;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text",nullable=true)
     */
    private $texte;



    /**
     * @ORM\ManyToMany(targetEntity="Media", cascade={"all"})
     * @ORM\JoinColumn(name="photos",nullable=true))
     */
    private $photo;





    /** @ORM\OneToMany(targetEntity="Categories", mappedBy="produits") */

    protected $produits;

 


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
     * @return Categories
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function __toString(){
        return $this->getNom();
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
        $this->produits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add produits
     *
     * @param \Cosanit\CosanitBundle\Entity\Produits $produits
     * @return Categories
     */
    public function addProduit(\Cosanit\CosanitBundle\Entity\Produits $produits)
    {
        $this->produits[] = $produits;

        return $this;
    }

    /**
     * Remove produits
     *
     * @param \Cosanit\CosanitBundle\Entity\Produits $produits
     */
    public function removeProduit(\Cosanit\CosanitBundle\Entity\Produits $produits)
    {
        $this->produits->removeElement($produits);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }


    /**
     * Set photo
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $photo
     * @return photos
     */
    public function setPhoto(\Cosanit\CosanitBundle\Entity\Media $photo)
    {
        $this->photo = $photo;

        return $this;
    }



    

    /**
     * Add photo
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $photo
     * @return Categories
     */
    public function addPhoto(\Cosanit\CosanitBundle\Entity\Media $photo)
    {
        $this->photo[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $photo
     */
    public function removePhoto(\Cosanit\CosanitBundle\Entity\Media $photo)
    {
        $this->photo->removeElement($photo);
    }

    /**
     * Get photo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    

    /**
     * Set texte
     *
     * @param string $texte
     * @return Categories
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    

    /**
     * Set titre
     *
     * @param string $titre
     * @return Categories
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
     * Add logo
     *
     * @param \Cosanit\CosanitBundle\Entity\Logos $logo
     *
     * @return Categories
     */
    public function addLogo(\Cosanit\CosanitBundle\Entity\Logos $logo)
    {
        $this->logos[] = $logo;

        return $this;
    }

    /**
     * Remove logo
     *
     * @param \Cosanit\CosanitBundle\Entity\Logos $logo
     */
    public function removeLogo(\Cosanit\CosanitBundle\Entity\Logos $logo)
    {
        $this->logos->removeElement($logo);
    }

    /**
     * Get logos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLogos()
    {
        return $this->logos;
    }

    
}
