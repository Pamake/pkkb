<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="nom", type="string", length=60)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome_nom", type="string", length=60)
     */
    private $diplomeNom;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome_lieu", type="string", length=45)
     */
    private $diplomeLieu;

    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Cv", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $cv;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param string $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return string
     */
    public function getDiplomeNom()
    {
        return $this->diplomeNom;
    }

    /**
     * @param string $diplomeNom
     */
    public function setDiplomeNom($diplomeNom)
    {
        $this->diplomeNom = $diplomeNom;
    }

    /**
     * @return string
     */
    public function getDiplomeLieu()
    {
        return $this->diplomeLieu;
    }

    /**
     * @param string $diplomeLieu
     */
    public function setDiplomeLieu($diplomeLieu)
    {
        $this->diplomeLieu = $diplomeLieu;
    }

    /**
     * @return mixed
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param mixed $cv
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    }



}
