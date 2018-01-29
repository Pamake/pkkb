<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExperienceProfessionnelle
 *
 * @ORM\Table(name="experienceProfessionnelle")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\ExperienceProfessionnelleRepository")
 */
class ExperienceProfessionnelle
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
     * @ORM\Column(name="entreprise_nom", type="string", length=45)
     */
    private $entrepriseNom;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur_activite", type="string", length=45)
     */
    private $secteurActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=45)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=45)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=45)
     */
    private $ville;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime")
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=25)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="competences", type="text")
     */
    private $competences;

    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Cv", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
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
    public function getEntrepriseNom()
    {
        return $this->entrepriseNom;
    }

    /**
     * @param string $entrepriseNom
     */
    public function setEntrepriseNom($entrepriseNom)
    {
        $this->entrepriseNom = $entrepriseNom;
    }

    /**
     * @return string
     */
    public function getSecteurActivite()
    {
        return $this->secteurActivite;
    }

    /**
     * @param string $secteurActivite
     */
    public function setSecteurActivite($secteurActivite)
    {
        $this->secteurActivite = $secteurActivite;
    }

    /**
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param string $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * @param \DateTime $debut
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;
    }

    /**
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param \DateTime $fin
     */
    public function setFin($fin)
    {
        $this->fin = $fin;
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
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * @param string $competences
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;
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
