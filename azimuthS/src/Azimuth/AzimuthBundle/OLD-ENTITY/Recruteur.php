<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recruteur
 *
 * @ORM\Table(name="recruteur")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\RecruteurRepository")
 */
class Recruteur
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
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur_activite", type="string", length=100)
     */
    private $secteurActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=25)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=25)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=25)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_nom", type="string", length=25)
     */
    private $contactNom;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_prenom", type="string", length=25)
     */
    private $contactPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=100)
     */
    private $contactEmail;

    /**
     * @ORM\OneToOne(targetEntity="Azimuth\UtilisateursBundle\Entity\Utilisateurs", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\OneToMany(targetEntity="Azimuth\AzimuthBundle\Entity\OffreEmploi", mappedBy="recruteur")
     */
    private $offreemploi; 

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Recruteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set secteurActivite
     *
     * @param string $secteurActivite
     *
     * @return Recruteur
     */
    public function setSecteurActivite($secteurActivite)
    {
        $this->secteurActivite = $secteurActivite;

        return $this;
    }

    /**
     * Get secteurActivite
     *
     * @return string
     */
    public function getSecteurActivite()
    {
        return $this->secteurActivite;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Recruteur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Recruteur
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recruteur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Recruteur
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contactNom
     *
     * @param string $contactNom
     *
     * @return Recruteur
     */
    public function setContactNom($contactNom)
    {
        $this->contactNom = $contactNom;

        return $this;
    }

    /**
     * Get contactNom
     *
     * @return string
     */
    public function getContactNom()
    {
        return $this->contactNom;
    }

    /**
     * Set contactPrenom
     *
     * @param string $contactPrenom
     *
     * @return Recruteur
     */
    public function setContactPrenom($contactPrenom)
    {
        $this->contactPrenom = $contactPrenom;

        return $this;
    }

    /**
     * Get contactPrenom
     *
     * @return string
     */
    public function getContactPrenom()
    {
        return $this->contactPrenom;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     *
     * @return Recruteur
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }


    /**
     * @return mixed
     */
    public function getOffreemploi()
    {
        return $this->offreemploi;
    }

    /**
     * @param mixed $offreemploi
     */
    public function setOffreemploi($offreemploi)
    {
        $this->offreemploi = $offreemploi;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->offreemploi = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set utilisateur
     *
     * @param \Azimuth\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     *
     * @return Recruteur
     */
    public function setUtilisateur(\Azimuth\UtilisateursBundle\Entity\Utilisateurs $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Azimuth\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

}
