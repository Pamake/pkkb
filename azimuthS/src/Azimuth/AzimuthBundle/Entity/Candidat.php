<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\CandidatRepository")
 */
class Candidat
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
     * @ORM\Column(name="candidatTitre", type="string", length=25, nullable=true)
     */
    private $candidatTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="candidatPrenom", type="string", length=25, nullable=true)
     */
    private $candidatPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="candidatNom", type="string", length=25, nullable=true)
     */
    private $candidatNom;

    /**
     * @var string
     *
     * @ORM\Column(name="candidatEmail", type="string", length=50, nullable=true)
     */
    private $candidatEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="candidatDiplomePlusHaut", type="string", length=50, nullable=true)
     */
    private $candidatDiplomePlusHaut;

    /**
     * @var int
     *
     * @ORM\Column(name="candidatCoteDeSecurite", type="integer", nullable=true)
     */
    private $candidatCoteDeSecurite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="candidatDateNaissance", type="date", nullable=true)
     */
    private $candidatDateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="candidatPhone", type="string", length=25, nullable=true)
     */
    private $candidatPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="candidatPhoneMobile", type="string", length=25, nullable=true)
     */
    private $candidatPhoneMobile;

    /**
     * @var bool
     *
     * @ORM\Column(name="candidatActive", type="boolean")
     */
    private $candidatActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="candidatCreateDate", type="datetime")
     */
    private $candidatCreateDate;


    public function __construct()
    {
        $this->candidatCreateDate = new  \DateTime('now');
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="candidatLastUpdate", type="datetime")
     */
    private $candidatLastUpdate;

    /**
     * @var \Azimuth\UtilisateursBundle\Entity\Utilisateurs
     * @ORM\ManyToOne(targetEntity="Azimuth\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\Langue
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Langue")
     * @ORM\JoinColumn(nullable=false)
     */
    private $langue;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\Address
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Address")
     * @ORM\JoinColumn(nullable=false)
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @ORM\ManyToMany(targetEntity="Azimuth\AzimuthBundle\Entity\OffreEmploi", cascade={"persist"})
     *
     *
    private $offreEmplois;


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
     * Set candidatTitre
     *
     * @param string $candidatTitre
     *
     * @return Candidat
     */
    public function setCandidatTitre($candidatTitre)
    {
        $this->candidatTitre = $candidatTitre;

        return $this;
    }

    /**
     * Get candidatTitre
     *
     * @return string
     */
    public function getCandidatTitre()
    {
        return $this->candidatTitre;
    }

    /**
     * Set candidatPrenom
     *
     * @param string $candidatPrenom
     *
     * @return Candidat
     */
    public function setCandidatPrenom($candidatPrenom)
    {
        $this->candidatPrenom = $candidatPrenom;

        return $this;
    }

    /**
     * Get candidatPrenom
     *
     * @return string
     */
    public function getCandidatPrenom()
    {
        return $this->candidatPrenom;
    }

    /**
     * Set candidatNom
     *
     * @param string $candidatNom
     *
     * @return Candidat
     */
    public function setCandidatNom($candidatNom)
    {
        $this->candidatNom = $candidatNom;

        return $this;
    }

    /**
     * Get candidatNom
     *
     * @return string
     */
    public function getCandidatNom()
    {
        return $this->candidatNom;
    }

    /**
     * Set candidatEmail
     *
     * @param string $candidatEmail
     *
     * @return Candidat
     */
    public function setCandidatEmail($candidatEmail)
    {
        $this->candidatEmail = $candidatEmail;

        return $this;
    }

    /**
     * Get candidatEmail
     *
     * @return string
     */
    public function getCandidatEmail()
    {
        return $this->candidatEmail;
    }

    /**
     * Set candidatDiplomePlusHaut
     *
     * @param string $candidatDiplomePlusHaut
     *
     * @return Candidat
     */
    public function setCandidatDiplomePlusHaut($candidatDiplomePlusHaut)
    {
        $this->candidatDiplomePlusHaut = $candidatDiplomePlusHaut;

        return $this;
    }

    /**
     * Get candidatDiplomePlusHaut
     *
     * @return string
     */
    public function getCandidatDiplomePlusHaut()
    {
        return $this->candidatDiplomePlusHaut;
    }

    /**
     * Set candidatCoteDeSecurite
     *
     * @param integer $candidatCoteDeSecurite
     *
     * @return Candidat
     */
    public function setCandidatCoteDeSecurite($candidatCoteDeSecurite)
    {
        $this->candidatCoteDeSecurite = $candidatCoteDeSecurite;

        return $this;
    }

    /**
     * Get candidatCoteDeSecurite
     *
     * @return int
     */
    public function getCandidatCoteDeSecurite()
    {
        return $this->candidatCoteDeSecurite;
    }

    /**
     * Set candidatDateNaissance
     *
     * @param \DateTime $candidatDateNaissance
     *
     * @return Candidat
     */
    public function setCandidatDateNaissance($candidatDateNaissance)
    {
        $this->candidatDateNaissance = $candidatDateNaissance;

        return $this;
    }

    /**
     * Get candidatDateNaissance
     *
     * @return \DateTime
     */
    public function getCandidatDateNaissance()
    {
        return $this->candidatDateNaissance;
    }

    /**
     * Set candidatPhone
     *
     * @param string $candidatPhone
     *
     * @return Candidat
     */
    public function setCandidatPhone($candidatPhone)
    {
        $this->candidatPhone = $candidatPhone;

        return $this;
    }

    /**
     * Get candidatPhone
     *
     * @return string
     */
    public function getCandidatPhone()
    {
        return $this->candidatPhone;
    }

    /**
     * Set candidatPhoneMobile
     *
     * @param string $candidatPhoneMobile
     *
     * @return Candidat
     */
    public function setCandidatPhoneMobile($candidatPhoneMobile)
    {
        $this->candidatPhoneMobile = $candidatPhoneMobile;

        return $this;
    }

    /**
     * Get candidatPhoneMobile
     *
     * @return string
     */
    public function getCandidatPhoneMobile()
    {
        return $this->candidatPhoneMobile;
    }

    /**
     * Set candidatActive
     *
     * @param boolean $candidatActive
     *
     * @return Candidat
     */
    public function setCandidatActive($candidatActive)
    {
        $this->candidatActive = $candidatActive;

        return $this;
    }

    /**
     * Get candidatActive
     *
     * @return bool
     */
    public function getCandidatActive()
    {
        return $this->candidatActive;
    }

    /**
     * Set candidatCreateDate
     *
     * @param \DateTime $candidatCreateDate
     *
     * @return Candidat
     */
    public function setCandidatCreateDate($candidatCreateDate)
    {
        $this->candidatCreateDate = $candidatCreateDate;

        return $this;
    }

    /**
     * Get candidatCreateDate
     *
     * @return \DateTime
     */
    public function getCandidatCreateDate()
    {
        return $this->candidatCreateDate;
    }

    /**
     * Set candidatLastUpdate
     *
     * @param \DateTime $candidatLastUpdate
     *
     * @return Candidat
     */
    public function setCandidatLastUpdate($candidatLastUpdate)
    {
        $this->candidatLastUpdate = $candidatLastUpdate;

        return $this;
    }

    /**
     * @return \Azimuth\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @param \Azimuth\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @return Langue
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param Langue $langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     *
    public function getOffreEmplois()
    {
        return $this->offreEmplois;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $offreEmplois
     *
    public function setOffreEmplois($offreEmplois)
    {
        $this->offreEmplois = $offreEmplois;
    }*/


}
