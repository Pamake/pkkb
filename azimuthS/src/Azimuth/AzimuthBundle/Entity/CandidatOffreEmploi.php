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
     	* @var \Azimuth\AzimuthBundle\Entity\Candidat
   		* @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Candidat")
   		* @ORM\JoinColumn(nullable=false)
   		*/
    private $candidat;


     /**
     	* @var \Azimuth\AzimuthBundle\Entity\OffreEmploi
   		* @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\OffreEmploi")
   		* @ORM\JoinColumn(nullable=false)
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

}
