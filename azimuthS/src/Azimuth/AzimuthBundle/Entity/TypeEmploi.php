<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEmploi
 *
 * @ORM\Table(name="type_emploi")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\TypeEmploiRepository")
 */
class TypeEmploi
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
     * @ORM\Column(name="nomTypeEmploi", type="string", length=60, unique=true)
     */
    private $nomTypeEmploi;


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
     * Set nomTypeEmploi
     *
     * @param string $nomTypeEmploi
     *
     * @return TypeEmploi
     */
    public function setNomTypeEmploi($nomTypeEmploi)
    {
        $this->nomTypeEmploi = $nomTypeEmploi;

        return $this;
    }

    /**
     * Get nomTypeEmploi
     *
     * @return string
     */
    public function getNomTypeEmploi()
    {
        return $this->nomTypeEmploi;
    }
}

