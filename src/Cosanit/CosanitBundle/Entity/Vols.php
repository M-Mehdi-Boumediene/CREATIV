<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vols
 *
 * @ORM\Table(name="vols")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\VolsRepository")
 */
class Vols
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
     * @var float
     *
     * @ORM\Column(name="taux3mois", type="float", nullable=true)
     */
    private $taux3mois;

    /**
     * @var float
     *
     * @ORM\Column(name="valeur3mois", type="float", nullable=true)
     */
    private $valeur3mois;

    /**
     * @var float
     *
     * @ORM\Column(name="taux6mois", type="float", nullable=true)
     */
    private $taux6mois;

    /**
     * @var float
     *
     * @ORM\Column(name="valeur6mois", type="float", nullable=true)
     */
    private $valeur6mois;

    /**
     * @var float
     *
     * @ORM\Column(name="taux1an", type="float", nullable=true)
     */
    private $taux1an;

    /**
     * @var float
     *
     * @ORM\Column(name="valeur1an", type="float", nullable=true)
     */
    private $valeur1an;

    /**
     * @ORM\ManyToOne(targetEntity="Categories", inversedBy="vols", cascade={"all"})
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="id")
     */
    private $categories;


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
     * Set taux3mois
     *
     * @param float $taux3mois
     *
     * @return Vols
     */
    public function setTaux3mois($taux3mois)
    {
        $this->taux3mois = $taux3mois;

        return $this;
    }

    /**
     * Get taux3mois
     *
     * @return float
     */
    public function getTaux3mois()
    {
        return $this->taux3mois;
    }

    /**
     * Set valeur3mois
     *
     * @param float $valeur3mois
     *
     * @return Vols
     */
    public function setValeur3mois($valeur3mois)
    {
        $this->valeur3mois = $valeur3mois;

        return $this;
    }

    /**
     * Get valeur3mois
     *
     * @return float
     */
    public function getValeur3mois()
    {
        return $this->valeur3mois;
    }

    /**
     * Set taux6mois
     *
     * @param float $taux6mois
     *
     * @return Vols
     */
    public function setTaux6mois($taux6mois)
    {
        $this->taux6mois = $taux6mois;

        return $this;
    }

    /**
     * Get taux6mois
     *
     * @return float
     */
    public function getTaux6mois()
    {
        return $this->taux6mois;
    }

    /**
     * Set valeur6mois
     *
     * @param float $valeur6mois
     *
     * @return Vols
     */
    public function setValeur6mois($valeur6mois)
    {
        $this->valeur6mois = $valeur6mois;

        return $this;
    }

    /**
     * Get valeur6mois
     *
     * @return float
     */
    public function getValeur6mois()
    {
        return $this->valeur6mois;
    }

    /**
     * Set taux1an
     *
     * @param float $taux1an
     *
     * @return Vols
     */
    public function setTaux1an($taux1an)
    {
        $this->taux1an = $taux1an;

        return $this;
    }

    /**
     * Get taux1an
     *
     * @return float
     */
    public function getTaux1an()
    {
        return $this->taux1an;
    }

    /**
     * Set valeur1an
     *
     * @param float $valeur1an
     *
     * @return Vols
     */
    public function setValeur1an($valeur1an)
    {
        $this->valeur1an = $valeur1an;

        return $this;
    }

    /**
     * Get valeur1an
     *
     * @return float
     */
    public function getValeur1an()
    {
        return $this->valeur1an;
    }

    /**
     * Set categories
     *
     * @param \Cosanit\CosanitBundle\Entity\Categories $categories
     *
     * @return Vols
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
}
