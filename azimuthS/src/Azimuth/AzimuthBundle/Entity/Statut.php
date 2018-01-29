<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statut
 *
 * @ORM\Table(name="statut")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\StatutRepository")
 */
class Statut
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
     * @ORM\Column(name="nameStatut", type="string", length=100, unique=true)
     */
    private $nameStatut;


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
     * Set nameStatut
     *
     * @param string $nameStatut
     *
     * @return Statut
     */
    public function setNameStatut($nameStatut)
    {
        $this->nameStatut = $nameStatut;

        return $this;
    }

    /**
     * Get nameStatut
     *
     * @return string
     */
    public function getNameStatut()
    {
        return $this->nameStatut;
    }
}

