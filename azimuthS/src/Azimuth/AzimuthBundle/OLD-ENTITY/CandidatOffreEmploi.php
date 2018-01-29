<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatOffreEmploi
 *
 * @ORM\Table(name="candidatOffreEmploi")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\CandidatOffreEmploiRepository")
 */
class CandidatOffreEmploi
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
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Candidat", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="fk_candidat_id", referencedColumnName="id", unique=true)
     */
    private $candidat;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\OffreEmploi", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="fk_offreEmploi_id", referencedColumnName="id", unique=true)
     */
    private $offreEmploi;

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
     * @return mixed
     */
    public function getOffreEmploi()
    {
        return $this->offreEmploi;
    }

    /**
     * @param mixed $offreEmploi
     */
    public function setOffreEmploi($offreEmploi)
    {
        $this->offreEmploi = $offreEmploi;
    }

}
