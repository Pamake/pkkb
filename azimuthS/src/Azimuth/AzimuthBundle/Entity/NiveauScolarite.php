<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauScolarite
 *
 * @ORM\Table(name="niveau_scolarite")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\NiveauScolariteRepository")
 */
class NiveauScolarite
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
     * @ORM\Column(name="nomDiplome", type="string", length=100, unique=true)
     */
    private $nomDiplome;


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
     * Set nomDiplome
     *
     * @param string $nomDiplome
     *
     * @return NiveauScolarite
     */
    public function setNomDiplome($nomDiplome)
    {
        $this->nomDiplome = $nomDiplome;

        return $this;
    }

    /**
     * Get nomDiplome
     *
     * @return string
     */
    public function getNomDiplome()
    {
        return $this->nomDiplome;
    }
}

