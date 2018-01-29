<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postulation
 *
 * @ORM\Table(name="postulation")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\PostulationRepository")
 */
class Postulation
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
     * @ORM\Column(name="postulation_date", type="datetime")
     */
    private $postulationDate;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Cv", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $cv;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\LettreMotivation", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $lettreMotivation;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\OffreEmploi", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $offreEmploi;


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
     * Set postulationDate
     *
     * @param \DateTime $postulationDate
     *
     * @return Postulation
     */
    public function setPostulationDate($postulationDate)
    {
        $this->postulationDate = $postulationDate;

        return $this;
    }

    /**
     * Get postulationDate
     *
     * @return \DateTime
     */
    public function getPostulationDate()
    {
        return $this->postulationDate;
    }

    /**
     * Set Cv
     *
     * @param integer $cv
     *
     * @return Postulation
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return int
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set lettreMotivation
     *
     * @param integer $lettreMotivation
     *
     * @return Postulation
     */
    public function setLettreMotivation($lettreMotivation)
    {
        $this->lettreMotivation = $lettreMotivation;

        return $this;
    }

    /**
     * Get lettreMotivation
     *
     * @return int
     */
    public function getLettreMotivation()
    {
        return $this->lettreMotivation;
    }

    /**
     * Set OffreEmploi
     *
     * @param integer $OffreEmploi
     *
     * @return Postulation
     */
    public function setOffreEmploi($offreEmploi)
    {
        $this->offreEmploi = $offreEmploi;

        return $this;
    }

    /**
     * Get OffreEmploi
     *
     * @return int
     */
    public function getOffreEmploi()
    {
        return $this->offreEmploi;
    }
}
