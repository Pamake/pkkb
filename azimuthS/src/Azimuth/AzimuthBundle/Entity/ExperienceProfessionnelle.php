<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExperienceProfessionnelle
 *
 * @ORM\Table(name="experience_professionnelle")
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
     * @ORM\Column(name="entrepriseNom", type="string", length=40, nullable=true)
     */
    private $entrepriseNom;

    /**
     * @var string
     *
     * @ORM\Column(name="secteurActivite", type="string", length=50, nullable=true)
     */
    private $secteurActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="posteOccupe", type="string", length=50, nullable=true)
     */
    private $posteOccupe;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=30, nullable=true)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="debutMission", type="string", length=25, nullable=true)
     */
    private $debutMission;

    /**
     * @var string
     *
     * @ORM\Column(name="finMission", type="string", length=25, nullable=true)
     */
    private $finMission;

    /**
     * @var string
     *
     * @ORM\Column(name="competencesAcquise", type="text", nullable=true)
     */
    private $competencesAcquise;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * Set entrepriseNom
     *
     * @param string $entrepriseNom
     *
     * @return ExperienceProfessionnelle
     */
    public function setEntrepriseNom($entrepriseNom)
    {
        $this->entrepriseNom = $entrepriseNom;

        return $this;
    }

    /**
     * Get entrepriseNom
     *
     * @return string
     */
    public function getEntrepriseNom()
    {
        return $this->entrepriseNom;
    }

    /**
     * Set secteurActivite
     *
     * @param string $secteurActivite
     *
     * @return ExperienceProfessionnelle
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
     * Set posteOccupe
     *
     * @param string $posteOccupe
     *
     * @return ExperienceProfessionnelle
     */
    public function setPosteOccupe($posteOccupe)
    {
        $this->posteOccupe = $posteOccupe;

        return $this;
    }

    /**
     * Get posteOccupe
     *
     * @return string
     */
    public function getPosteOccupe()
    {
        return $this->posteOccupe;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return ExperienceProfessionnelle
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set debutMission
     *
     * @param string $debutMission
     *
     * @return ExperienceProfessionnelle
     */
    public function setDebutMission($debutMission)
    {
        $this->debutMission = $debutMission;

        return $this;
    }

    /**
     * Get debutMission
     *
     * @return string
     */
    public function getDebutMission()
    {
        return $this->debutMission;
    }

    /**
     * Set finMission
     *
     * @param string $finMission
     *
     * @return ExperienceProfessionnelle
     */
    public function setFinMission($finMission)
    {
        $this->finMission = $finMission;

        return $this;
    }

    /**
     * Get finMission
     *
     * @return string
     */
    public function getFinMission()
    {
        return $this->finMission;
    }

    /**
     * Set competencesAcquise
     *
     * @param string $competencesAcquise
     *
     * @return ExperienceProfessionnelle
     */
    public function setCompetencesAcquise($competencesAcquise)
    {
        $this->competencesAcquise = $competencesAcquise;

        return $this;
    }

    /**
     * Get competencesAcquise
     *
     * @return string
     */
    public function getCompetencesAcquise()
    {
        return $this->competencesAcquise;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ExperienceProfessionnelle
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
