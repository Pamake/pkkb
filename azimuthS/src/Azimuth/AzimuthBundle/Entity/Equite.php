<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equite
 *
 * @ORM\Table(name="equite")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\EquiteRepository")
 */
class Equite
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
     * @ORM\Column(name="nameEquite", type="string", length=80, unique=true)
     */
    private $nameEquite;


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
     * Set nameEquite
     *
     * @param string $nameEquite
     *
     * @return Equite
     */
    public function setNameEquite($nameEquite)
    {
        $this->nameEquite = $nameEquite;

        return $this;
    }

    /**
     * Get nameEquite
     *
     * @return string
     */
    public function getNameEquite()
    {
        return $this->nameEquite;
    }
}

