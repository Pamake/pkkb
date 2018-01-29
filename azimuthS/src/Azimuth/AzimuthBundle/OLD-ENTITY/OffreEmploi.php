<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreEmploi
 *
 * @ORM\Table(name="offreEmploi")
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=50)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="description_poste", type="text")
     */
    private $descriptionPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="qualites_requises", type="string", length=100)
     */
    private $qualitesRequises;

    /**
     * @var string
     *
     * @ORM\Column(name="connaissance_techniques", type="string", length=100)
     */
    private $connaissanceTechniques;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=100)
     */
    private $lieu;


    /**
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Recruteur", inversedBy="offreemploi")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recruteur;

    /**
     * @return mixed
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * @param mixed $candidat
     */
    public function setCandidat($candidat)
    {
        $this->candidat = $candidat;
    }



    /**
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Candidat", inversedBy="candidatoffreemploi")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $candidat;

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
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param string $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }

    /**
     * @return string
     */
    public function getDescriptionPoste()
    {
        return $this->descriptionPoste;
    }

    /**
     * @param string $descriptionPoste
     */
    public function setDescriptionPoste($descriptionPoste)
    {
        $this->descriptionPoste = $descriptionPoste;
    }

    /**
     * @return string
     */
    public function getQualitesRequises()
    {
        return $this->qualitesRequises;
    }

    /**
     * @param string $qualitesRequises
     */
    public function setQualitesRequises($qualitesRequises)
    {
        $this->qualitesRequises = $qualitesRequises;
    }

    /**
     * @return string
     */
    public function getConnaissanceTechniques()
    {
        return $this->connaissanceTechniques;
    }

    /**
     * @param string $connaissanceTechniques
     */
    public function setConnaissanceTechniques($connaissanceTechniques)
    {
        $this->connaissanceTechniques = $connaissanceTechniques;
    }

    /**
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return mixed
     */
    public function getRecruteur()
    {
        return $this->recruteur;
    }

    /**
     * @param mixed $recruteur
     */
    public function setRecruteur($recruteur)
    {
        $this->recruteur = $recruteur;
    }



}
