<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauLinguistique
 *
 * @ORM\Table(name="niveau_linguistique")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\NiveauLinguistiqueRepository")
 */
class NiveauLinguistique
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
     * @ORM\Column(name="nameNiveau", type="string", length=100, unique=true)
     */
    private $nameNiveau;


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
     * Set nameNiveau
     *
     * @param string $nameNiveau
     *
     * @return NiveauLinguistique
     */
    public function setNameNiveau($nameNiveau)
    {
        $this->nameNiveau = $nameNiveau;

        return $this;
    }

    /**
     * Get nameNiveau
     *
     * @return string
     */
    public function getNameNiveau()
    {
        return $this->nameNiveau;
    }
}

