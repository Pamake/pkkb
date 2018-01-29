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
     * @ORM\Column(name="postulationDate", type="date", nullable=true)
     */
    private $postulationDate;

    /**
     *  @var \Azimuth\AzimuthBundle\Entity\OffreEmploi
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\OffreEmploi")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $offreEmploi;

    /**
     *  @var \Azimuth\AzimuthBundle\Entity\LettreMotivation
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\LettreMotivation")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $lettreMotivation;

    /**
     *  @var \Azimuth\AzimuthBundle\Entity\Cv
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
     * @return OffreEmploi
     */
    public function getOffreEmploi()
    {
        return $this->offreEmploi;
    }

    /**
     * @param OffreEmploi $offreEmploi
     */
    public function setOffreEmploi($offreEmploi)
    {
        $this->offreEmploi = $offreEmploi;
    }

    /**
     * @return LettreMotivation
     */
    public function getLettreMotivation()
    {
        return $this->lettreMotivation;
    }

    /**
     * @param LettreMotivation $lettreMotivation
     */
    public function setLettreMotivation($lettreMotivation)
    {
        $this->lettreMotivation = $lettreMotivation;
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
