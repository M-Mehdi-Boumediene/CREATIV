<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dc5
 *
 * @ORM\Table(name="dc5")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\Dc5Repository")
 */
class Dc5
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
     * @ORM\Column(name="aaa", type="string", length=255, nullable=true)
     */
    private $aaa;


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
     * Set aaa
     *
     * @param string $aaa
     *
     * @return Dc5
     */
    public function setAaa($aaa)
    {
        $this->aaa = $aaa;

        return $this;
    }

    /**
     * Get aaa
     *
     * @return string
     */
    public function getAaa()
    {
        return $this->aaa;
    }
}

