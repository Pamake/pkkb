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
     * @ORM\Column(name="etablissementNom", type="string", length=60, nullable=true)
     */
    private $etablissementNom;

    /**
     * @var string
     *
     * @ORM\Column(name="formationDuree", type="string", length=25, nullable=true)
     */
    private $formationDuree;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDiplomeObtenu", type="string", length=60, nullable=true)
     */
    private $nomDiplomeObtenu;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuEtablissement", type="string", length=30, nullable=true)
     */
    private $lieuEtablissement;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\Cv
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Cv")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $cv;


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
     * Set etablissementNom
     *
     * @param string $etablissementNom
     *
     * @return Formation
     */
    public function setEtablissementNom($etablissementNom)
    {
        $this->etablissementNom = $etablissementNom;

        return $this;
    }

    /**
     * Get etablissementNom
     *
     * @return string
     */
    public function getEtablissementNom()
    {
        return $this->etablissementNom;
    }

    /**
     * Set formationDuree
     *
     * @param string $formationDuree
     *
     * @return Formation
     */
    public function setFormationDuree($formationDuree)
    {
        $this->formationDuree = $formationDuree;

        return $this;
    }

    /**
     * Get formationDuree
     *
     * @return string
     */
    public function getFormationDuree()
    {
        return $this->formationDuree;
    }

    /**
     * Set nomDiplomeObtenu
     *
     * @param string $nomDiplomeObtenu
     *
     * @return Formation
     */
    public function setNomDiplomeObtenu($nomDiplomeObtenu)
    {
        $this->nomDiplomeObtenu = $nomDiplomeObtenu;

        return $this;
    }

    /**
     * Get nomDiplomeObtenu
     *
     * @return string
     */
    public function getNomDiplomeObtenu()
    {
        return $this->nomDiplomeObtenu;
    }

    /**
     * Set lieuEtablissement
     *
     * @param string $lieuEtablissement
     *
     * @return Formation
     */
    public function setLieuEtablissement($lieuEtablissement)
    {
        $this->lieuEtablissement = $lieuEtablissement;

        return $this;
    }

    /**
     * Get lieuEtablissement
     *
     * @return string
     */
    public function getLieuEtablissement()
    {
        return $this->lieuEtablissement;
    }

    /**
     * @return Cv
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param Cv $cv
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    }



}
