<?php

namespace Cosanit\CosanitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apropos
 *
 * @ORM\Table(name="GoogleMaps")
 * @ORM\Entity(repositoryClass="Cosanit\CosanitBundle\Repository\GoogleMapsRepository")
 */
class GoogleMaps
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    protected $latitude;

    protected $longitude;

    protected $city;

    protected $address;


}
