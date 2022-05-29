<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Categories
 *
 * @ORM\Table(name="types")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\TypesRepository")
 */
class Types
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
     * @ORM\Column(name="description", type="text")
     */
    private $texte;



    /**
     * @ORM\ManyToMany(targetEntity="Media", cascade={"all"})
     * @ORM\JoinColumn(name="photos",nullable=true))
     */
    private $photo;


    /**
     * @Gedmo\Slug(fields={"nom"})
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;


    /** @ORM\OneToMany(targetEntity="Partenaires", mappedBy="types") */
    protected $partenaires;

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
        $this->photo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Types
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
     * Add photo
     *
     * @param \Cosanit\CosanitBundle\Entity\Media $photo
     * @return Types
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
     * Add partenaire
     *
     * @param \Cosanit\CosanitBundle\Entity\Partenaires $partenaire
     *
     * @return Types
     */
    public function addPartenaire(\Cosanit\CosanitBundle\Entity\Partenaires $partenaire)
    {
        $this->partenaires[] = $partenaire;

        return $this;
    }

    /**
     * Remove partenaire
     *
     * @param \Cosanit\CosanitBundle\Entity\Partenaires $partenaire
     */
    public function removePartenaire(\Cosanit\CosanitBundle\Entity\Partenaires $partenaire)
    {
        $this->partenaires->removeElement($partenaire);
    }

    /**
     * Get partenaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPartenaires()
    {
        return $this->partenaires;
    }
}
