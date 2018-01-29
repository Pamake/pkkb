<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreEmploi
 *
 * @ORM\Table(name="offre_emploi")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\OffreEmploiRepository")
 */
class OffreEmploi
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
     * @var \DateTime
     *
     * @ORM\Column(name="offreEmploiCreateDate", type="datetime")
     */
    private $offreEmploiCreateDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="offreEmploiEndDate", type="datetime")
     */
    private $offreEmploiEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="offreEmploiLastUpdate", type="datetime")
     */
    private $offreEmploiLastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiTitre", type="string", length=255)
     */
    private $offreEmploiTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiHoraire", type="string", length=50)
     */
    private $offreEmploiHoraire;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiStatut", type="string", length=50)
     */
    private $offreEmploiStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiPoste", type="string", length=50)
     */
    private $offreEmploiPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiDescriptionPoste", type="text", nullable=true)
     */
    private $offreEmploiDescriptionPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiQualitesRequises", type="text", nullable=true)
     */
    private $offreEmploiQualitesRequises;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiConnaissancesTechniques", type="text", nullable=true)
     */
    private $offreEmploiConnaissancesTechniques;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiDomaine", type="string", length=255)
     */
    private $offreEmploiDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiRegion", type="string", length=100, nullable=true)
     */
    private $offreEmploiRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="offreEmploiReference", type="string", length=11)
     */
    private $offreEmploiReference;

    /**
     *  @var \Azimuth\AzimuthBundle\Entity\Recruteur
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Recruteur")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $recruteur;


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
     * Set offreEmploiCreateDate
     *
     * @param \DateTime $offreEmploiCreateDate
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiCreateDate($offreEmploiCreateDate)
    {
        $this->offreEmploiCreateDate = $offreEmploiCreateDate;

        return $this;
    }

    /**
     * Get offreEmploiCreateDate
     *
     * @return \DateTime
     */
    public function getOffreEmploiCreateDate()
    {
        return $this->offreEmploiCreateDate;
    }

    /**
     * Set offreEmploiEndDate
     *
     * @param \DateTime $offreEmploiEndDate
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiEndDate($offreEmploiEndDate)
    {
        $this->offreEmploiEndDate = $offreEmploiEndDate;

        return $this;
    }

    /**
     * Get offreEmploiEndDate
     *
     * @return \DateTime
     */
    public function getOffreEmploiEndDate()
    {
        return $this->offreEmploiEndDate;
    }

    /**
     * Set offreEmploiLastUpdate
     *
     * @param \DateTime $offreEmploiLastUpdate
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiLastUpdate($offreEmploiLastUpdate)
    {
        $this->offreEmploiLastUpdate = $offreEmploiLastUpdate;

        return $this;
    }

    /**
     * Get offreEmploiLastUpdate
     *
     * @return \DateTime
     */
    public function getOffreEmploiLastUpdate()
    {
        return $this->offreEmploiLastUpdate;
    }

    /**
     * Set offreEmploiTitre
     *
     * @param string $offreEmploiTitre
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiTitre($offreEmploiTitre)
    {
        $this->offreEmploiTitre = $offreEmploiTitre;

        return $this;
    }

    /**
     * Get offreEmploiTitre
     *
     * @return string
     */
    public function getOffreEmploiTitre()
    {
        return $this->offreEmploiTitre;
    }

    /**
     * Set offreEmploiHoraire
     *
     * @param string $offreEmploiHoraire
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiHoraire($offreEmploiHoraire)
    {
        $this->offreEmploiHoraire = $offreEmploiHoraire;

        return $this;
    }

    /**
     * Get offreEmploiHoraire
     *
     * @return string
     */
    public function getOffreEmploiHoraire()
    {
        return $this->offreEmploiHoraire;
    }

    /**
     * Set offreEmploiStatut
     *
     * @param string $offreEmploiStatut
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiStatut($offreEmploiStatut)
    {
        $this->offreEmploiStatut = $offreEmploiStatut;

        return $this;
    }

    /**
     * Get offreEmploiStatut
     *
     * @return string
     */
    public function getOffreEmploiStatut()
    {
        return $this->offreEmploiStatut;
    }

    /**
     * Set offreEmploiPoste
     *
     * @param string $offreEmploiPoste
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiPoste($offreEmploiPoste)
    {
        $this->offreEmploiPoste = $offreEmploiPoste;

        return $this;
    }

    /**
     * Get offreEmploiPoste
     *
     * @return string
     */
    public function getOffreEmploiPoste()
    {
        return $this->offreEmploiPoste;
    }

    /**
     * Set offreEmploiDescriptionPoste
     *
     * @param string $offreEmploiDescriptionPoste
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiDescriptionPoste($offreEmploiDescriptionPoste)
    {
        $this->offreEmploiDescriptionPoste = $offreEmploiDescriptionPoste;

        return $this;
    }

    /**
     * Get offreEmploiDescriptionPoste
     *
     * @return string
     */
    public function getOffreEmploiDescriptionPoste()
    {
        return $this->offreEmploiDescriptionPoste;
    }

    /**
     * Set offreEmploiQualitesRequises
     *
     * @param string $offreEmploiQualitesRequises
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiQualitesRequises($offreEmploiQualitesRequises)
    {
        $this->offreEmploiQualitesRequises = $offreEmploiQualitesRequises;

        return $this;
    }

    /**
     * Get offreEmploiQualitesRequises
     *
     * @return string
     */
    public function getOffreEmploiQualitesRequises()
    {
        return $this->offreEmploiQualitesRequises;
    }

    /**
     * Set offreEmploiConnaissancesTechniques
     *
     * @param string $offreEmploiConnaissancesTechniques
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiConnaissancesTechniques($offreEmploiConnaissancesTechniques)
    {
        $this->offreEmploiConnaissancesTechniques = $offreEmploiConnaissancesTechniques;

        return $this;
    }

    /**
     * Get offreEmploiConnaissancesTechniques
     *
     * @return string
     */
    public function getOffreEmploiConnaissancesTechniques()
    {
        return $this->offreEmploiConnaissancesTechniques;
    }

    /**
     * Set offreEmploiDomaine
     *
     * @param string $offreEmploiDomaine
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiDomaine($offreEmploiDomaine)
    {
        $this->offreEmploiDomaine = $offreEmploiDomaine;

        return $this;
    }

    /**
     * Get offreEmploiDomaine
     *
     * @return string
     */
    public function getOffreEmploiDomaine()
    {
        return $this->offreEmploiDomaine;
    }

    /**
     * Set offreEmploiRegion
     *
     * @param string $offreEmploiRegion
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiRegion($offreEmploiRegion)
    {
        $this->offreEmploiRegion = $offreEmploiRegion;

        return $this;
    }

    /**
     * Get offreEmploiRegion
     *
     * @return string
     */
    public function getOffreEmploiRegion()
    {
        return $this->offreEmploiRegion;
    }

    /**
     * Set offreEmploiReference
     *
     * @param string $offreEmploiReference
     *
     * @return OffreEmploi
     */
    public function setOffreEmploiReference($offreEmploiReference)
    {
        $this->offreEmploiReference = $offreEmploiReference;

        return $this;
    }

    /**
     * Get offreEmploiReference
     *
     * @return string
     */
    public function getOffreEmploiReference()
    {
        return $this->offreEmploiReference;
    }

    /**
     * @return Recruteur
     */
    public function getRecruteur()
    {
        return $this->recruteur;
    }

    /**
     * @param Recruteur $recruteur
     */
    public function setRecruteur($recruteur)
    {
        $this->recruteur = $recruteur;
    }


}
