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
     * @ORM\Column(name="societeNom", type="string", length=100, nullable=true)
     */
    private $societeNom;

    /**
     * @var string
     *
     * @ORM\Column(name="societeSecteurActivite", type="string", length=100, nullable=true)
     */
    private $societeSecteurActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="societePhone", type="string", length=25, nullable=true)
     */
    private $societePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="societeUrl", type="string", length=100, nullable=true)
     */
    private $societeUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="societeDescription", type="text", nullable=true)
     */
    private $societeDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="contactTitre", type="string", length=30, nullable=true)
     */
    private $contactTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="contactNom", type="string", length=30, nullable=true)
     */
    private $contactNom;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPrenom", type="string", length=50, nullable=true)
     */
    private $contactPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="contactEmail", type="string", length=50, nullable=true)
     */
    private $contactEmail;

    /**
     * @var \Azimuth\UtilisateursBundle\Entity\Utilisateurs
     * @ORM\OneToOne(targetEntity="Azimuth\UtilisateursBundle\Entity\Utilisateurs", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;


    /**
     * @var \Doctrine\Common\Collections\Collection
     * @ORM\ManyToMany(targetEntity="Azimuth\AzimuthBundle\Entity\Cv", cascade={"persist"})
     *
     *
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
     * Set societeNom
     *
     * @param string $societeNom
     *
     * @return Recruteur
     */
    public function setSocieteNom($societeNom)
    {
        $this->societeNom = $societeNom;

        return $this;
    }

    /**
     * Get societeNom
     *
     * @return string
     */
    public function getSocieteNom()
    {
        return $this->societeNom;
    }

    /**
     * Set societeSecteurActivite
     *
     * @param string $societeSecteurActivite
     *
     * @return Recruteur
     */
    public function setSocieteSecteurActivite($societeSecteurActivite)
    {
        $this->societeSecteurActivite = $societeSecteurActivite;

        return $this;
    }

    /**
     * Get societeSecteurActivite
     *
     * @return string
     */
    public function getSocieteSecteurActivite()
    {
        return $this->societeSecteurActivite;
    }

    /**
     * Set societePhone
     *
     * @param string $societePhone
     *
     * @return Recruteur
     */
    public function setSocietePhone($societePhone)
    {
        $this->societePhone = $societePhone;

        return $this;
    }

    /**
     * Get societePhone
     *
     * @return string
     */
    public function getSocietePhone()
    {
        return $this->societePhone;
    }

    /**
     * Set societeUrl
     *
     * @param string $societeUrl
     *
     * @return Recruteur
     */
    public function setSocieteUrl($societeUrl)
    {
        $this->societeUrl = $societeUrl;

        return $this;
    }

    /**
     * Get societeUrl
     *
     * @return string
     */
    public function getSocieteUrl()
    {
        return $this->societeUrl;
    }

    /**
     * Set societeDescription
     *
     * @param string $societeDescription
     *
     * @return Recruteur
     */
    public function setSocieteDescription($societeDescription)
    {
        $this->societeDescription = $societeDescription;

        return $this;
    }

    /**
     * Get societeDescription
     *
     * @return string
     */
    public function getSocieteDescription()
    {
        return $this->societeDescription;
    }

    /**
     * Set contactTitre
     *
     * @param string $contactTitre
     *
     * @return Recruteur
     */
    public function setContactTitre($contactTitre)
    {
        $this->contactTitre = $contactTitre;

        return $this;
    }

    /**
     * Get contactTitre
     *
     * @return string
     */
    public function getContactTitre()
    {
        return $this->contactTitre;
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
     * @return \Doctrine\Common\Collections\Collection
     *
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $cv
     *
    public function setCv($cv)
    {
        $this->cv = $cv;
    }*/


}
