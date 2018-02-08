<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\CvRepository")
 */
class Cv
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
     * @ORM\Column(name="dateCreationCv", type="datetime", nullable=true)
     */
    private $dateCreationCv;

    public function __construct()
    {
        $this->dateCreationCv = new  \DateTime('now');
    }

    /**
     * @var string
     *
     * @ORM\Column(name="objectifCv", type="string", length=50, nullable=true)
     */
    private $objectifCv;

    /**
     * @var string
     *
     * @ORM\Column(name="titreCv", type="string", length=50, nullable=true)
     */
    private $titreCv;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionCv", type="text", nullable=true)
     */
    private $descriptionCv;

    /**
     * @var bool
     *
     * @ORM\Column(name="cvActive", type="boolean", nullable=true)
     */
    private $cvActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cvLastUpdate", type="datetime")
     */
    private $cvLastUpdate;


    /**
     * @var \Azimuth\AzimuthBundle\Entity\Candidat
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Candidat")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat;


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
     * Set dateCreationCv
     *
     * @param \DateTime $dateCreationCv
     *
     * @return Cv
     */
    public function setDateCreationCv($dateCreationCv)
    {
        $this->dateCreationCv = $dateCreationCv;

        return $this;
    }

    /**
     * Get dateCreationCv
     *
     * @return \DateTime
     */
    public function getDateCreationCv()
    {
        return $this->dateCreationCv;
    }

    /**
     * Set objectifCv
     *
     * @param string $objectifCv
     *
     * @return Cv
     */
    public function setObjectifCv($objectifCv)
    {
        $this->objectifCv = $objectifCv;

        return $this;
    }

    /**
     * Get objectifCv
     *
     * @return string
     */
    public function getObjectifCv()
    {
        return $this->objectifCv;
    }

    /**
     * Set titreCv
     *
     * @param string $titreCv
     *
     * @return Cv
     */
    public function setTitreCv($titreCv)
    {
        $this->titreCv = $titreCv;

        return $this;
    }

    /**
     * Get titreCv
     *
     * @return string
     */
    public function getTitreCv()
    {
        return $this->titreCv;
    }

    /**
     * Set descriptionCv
     *
     * @param string $descriptionCv
     *
     * @return Cv
     */
    public function setDescriptionCv($descriptionCv)
    {
        $this->descriptionCv = $descriptionCv;

        return $this;
    }

    /**
     * Get descriptionCv
     *
     * @return string
     */
    public function getDescriptionCv()
    {
        return $this->descriptionCv;
    }

    /**
     * Set cvActive
     *
     * @param boolean $cvActive
     *
     * @return Cv
     */
    public function setCvActive($cvActive)
    {
        $this->cvActive = $cvActive;

        return $this;
    }

    /**
     * Get cvActive
     *
     * @return bool
     */
    public function getCvActive()
    {
        return $this->cvActive;
    }

    /**
     * Set cvLastUpdate
     *
     * @param \DateTime $cvLastUpdate
     *
     * @return Cv
     */
    public function setCvLastUpdate($cvLastUpdate)
    {
        $this->cvLastUpdate = $cvLastUpdate;

        return $this;
    }

    /**
     * Get cvLastUpdate
     *
     * @return \DateTime
     */
    public function getCvLastUpdate()
    {
        return $this->cvLastUpdate;
    }


    /**
     * @return Candidat
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * @param Candidat $candidat
     */
    public function setCandidat($candidat)
    {
        $this->candidat = $candidat;
    }


}
