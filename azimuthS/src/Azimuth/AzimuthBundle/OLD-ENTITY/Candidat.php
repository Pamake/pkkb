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
     * @ORM\Column(name="titre", type="string", length=45)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="blob")
     */
    private $picture;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime")
     */
    private $lastUpdate;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Address", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $address;


    /**
     * @ORM\OneToMany(targetEntity="Azimuth\AzimuthBundle\Entity\Cv", mappedBy="candidat")
     *
    private $cv;*/


    /**
     * @ORM\OneToMany(targetEntity="Azimuth\AzimuthBundle\Entity\Candidat", mappedBy="candidat")
     *
    private $candidatoffreemploi; */

    /**
     * @var bool
     *
     * @ORM\Column(name="cote_securite", type="boolean")
     */
    private $coteSecurite;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome_plus_eleve", type="string", length=100)
     */
    private $diplomePlusEleve;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\UtilisateursBundle\Entity\Utilisateurs", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\LettreMotivation", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     *
    private $lettremotivation;

    /**
     * @ORM\OneToMany(targetEntity="Azimuth\AzimuthBundle\Entity\OffreEmploi", mappedBy="candidat")
     *
    private $offreemploi; */

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime")
     */
    private $dateNaissance;

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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @param \DateTime $lastUpdate
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return bool
     */
    public function isCoteSecurite()
    {
        return $this->coteSecurite;
    }

    /**
     * @param bool $coteSecurite
     */
    public function setCoteSecurite($coteSecurite)
    {
        $this->coteSecurite = $coteSecurite;
    }

    /**
     * @return string
     */
    public function getDiplomePlusEleve()
    {
        return $this->diplomePlusEleve;
    }

    /**
     * @param string $diplomePlusEleve
     */
    public function setDiplomePlusEleve($diplomePlusEleve)
    {
        $this->diplomePlusEleve = $diplomePlusEleve;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @param mixed $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     *
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param mixed $cv
     *
    public function setCv($cv)
    {
        $this->cv = $cv;
    }

    /**
     * @return mixed
     *
    public function getCandidatoffreemploi()
    {
        return $this->candidatoffreemploi;
    }

    /**
     * @param mixed $candidatoffreemploi
     *
    public function setCandidatoffreemploi($candidatoffreemploi)
    {
        $this->candidatoffreemploi = $candidatoffreemploi;
    }

    /**
     * @return mixed
     *
    public function getLettremotivation()
    {
        return $this->lettremotivation;
    }

    /**
     * @param mixed $lettremotivation
     *
    public function setLettremotivation($lettremotivation)
    {
        $this->lettremotivation = $lettremotivation;
    }

    /**
     * @return mixed
     *
    public function getOffreemploi()
    {
        return $this->offreemploi;
    }

    /**
     * @param mixed $offreemploi
     *
    public function setOffreemploi($offreemploi)
    {
        $this->offreemploi = $offreemploi;
    }*/




    /**
     * Constructor
     */
    public function __construct()
    {
      //  $this->cv = new \Doctrine\Common\Collections\ArrayCollection();
       // $this->candidatoffreemploi = new \Doctrine\Common\Collections\ArrayCollection();
       // $this->offreemploi = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Get coteSecurite
     *
     * @return boolean
     */
    public function getCoteSecurite()
    {
        return $this->coteSecurite;
    }

    /**
     * Add cv
     *
     * @param \Azimuth\AzimuthBundle\Entity\Cv $cv
     *
     * @return Candidat
     *
    public function addCv(\Azimuth\AzimuthBundle\Entity\Cv $cv)
    {
        $this->cv[] = $cv;

        return $this;
    }

    /**
     * Remove cv
     *
     * @param \Azimuth\AzimuthBundle\Entity\Cv $cv
     *
    public function removeCv(\Azimuth\AzimuthBundle\Entity\Cv $cv)
    {
        $this->cv->removeElement($cv);
    }

    /**
     * Add candidatoffreemploi
     *
     * @param \Azimuth\AzimuthBundle\Entity\Candidat $candidatoffreemploi
     *
     * @return Candidat
     *
    public function addCandidatoffreemploi(\Azimuth\AzimuthBundle\Entity\Candidat $candidatoffreemploi)
    {
        $this->candidatoffreemploi[] = $candidatoffreemploi;

        return $this;
    }

    /**
     * Remove candidatoffreemploi
     *
     * @param \Azimuth\AzimuthBundle\Entity\Candidat $candidatoffreemploi
     *
    public function removeCandidatoffreemploi(\Azimuth\AzimuthBundle\Entity\Candidat $candidatoffreemploi)
    {
        $this->candidatoffreemploi->removeElement($candidatoffreemploi);
    }

    /**
     * Add offreemploi
     *
     * @param \Azimuth\AzimuthBundle\Entity\OffreEmploi $offreemploi
     *
     * @return Candidat
     *
    public function addOffreemploi(\Azimuth\AzimuthBundle\Entity\OffreEmploi $offreemploi)
    {
        $this->offreemploi[] = $offreemploi;

        return $this;
    }

    /**
     * Remove offreemploi
     *
     * @param \Azimuth\AzimuthBundle\Entity\OffreEmploi $offreemploi
     *
    public function removeOffreemploi(\Azimuth\AzimuthBundle\Entity\OffreEmploi $offreemploi)
    {
        $this->offreemploi->removeElement($offreemploi);
    }*/
}
