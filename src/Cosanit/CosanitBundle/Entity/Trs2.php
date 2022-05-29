<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trs2
 *
 * @ORM\Table(name="trs2")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\Trs2Repository")
 */
class Trs2
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
     * @ORM\Column(name="taux", type="string", length=255, nullable=true)
     */
    private $taux;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255, nullable=true)
     */
    private $valeur;

    /**
     * @ORM\ManyToOne(targetEntity="Categories", inversedBy="trs2", cascade={"all"})
     * @ORM\JoinColumn(name="trs2_id", referencedColumnName="id")
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
     * Set taux
     *
     * @param string $taux
     *
     * @return Trs2
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return string
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     *
     * @return Trs2
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set categories
     *
     * @param \Cosanit\CosanitBundle\Entity\Categories $categories
     *
     * @return Trs2
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
