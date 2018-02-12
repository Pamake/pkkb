<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConnaissancesLinguistiques
 *
 * @ORM\Table(name="connaissances_linguistiques")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\ConnaissancesLinguistiquesRepository")
 */
class ConnaissancesLinguistiques
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
     * @ORM\Column(name="langueNom", type="string", length=30, nullable=true)
     */
    private $langueNom;


    /**
     * @var \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\NiveauLinguistique")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $langueNiveauExpresionEcrite;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\NiveauLinguistique")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $langueNiveauComprehensionEcrite;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\NiveauLinguistique")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $langueNiveauCompetenceOrale;

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
     * Set langueNom
     *
     * @param string $langueNom
     *
     * @return ConnaissancesLinguistiques
     */
    public function setLangueNom($langueNom)
    {
        $this->langueNom = $langueNom;

        return $this;
    }

    /**
     * Get langueNom
     *
     * @return string
     */
    public function getLangueNom()
    {
        return $this->langueNom;
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



    /**
     * Set langueNiveauExpresionEcrite
     *
     * @param \Azimuth\AzimuthBundle\Entity\NiveauLinguistique $langueNiveauExpresionEcrite
     *
     * @return ConnaissancesLinguistiques
     */
    public function setLangueNiveauExpresionEcrite(\Azimuth\AzimuthBundle\Entity\NiveauLinguistique $langueNiveauExpresionEcrite)
    {
        $this->langueNiveauExpresionEcrite = $langueNiveauExpresionEcrite;

        return $this;
    }

    /**
     * Get langueNiveauExpresionEcrite
     *
     * @return \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     */
    public function getLangueNiveauExpresionEcrite()
    {
        return $this->langueNiveauExpresionEcrite;
    }

    /**
     * Set langueNiveauComprehensionEcrite
     *
     * @param \Azimuth\AzimuthBundle\Entity\NiveauLinguistique $langueNiveauComprehensionEcrite
     *
     * @return ConnaissancesLinguistiques
     */
    public function setLangueNiveauComprehensionEcrite(\Azimuth\AzimuthBundle\Entity\NiveauLinguistique $langueNiveauComprehensionEcrite)
    {
        $this->langueNiveauComprehensionEcrite = $langueNiveauComprehensionEcrite;

        return $this;
    }

    /**
     * Get langueNiveauComprehensionEcrite
     *
     * @return \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     */
    public function getLangueNiveauComprehensionEcrite()
    {
        return $this->langueNiveauComprehensionEcrite;
    }

    /**
     * Set langueNiveauCompetenceOrale
     *
     * @param \Azimuth\AzimuthBundle\Entity\NiveauLinguistique $langueNiveauCompetenceOrale
     *
     * @return ConnaissancesLinguistiques
     */
    public function setLangueNiveauCompetenceOrale(\Azimuth\AzimuthBundle\Entity\NiveauLinguistique $langueNiveauCompetenceOrale)
    {
        $this->langueNiveauCompetenceOrale = $langueNiveauCompetenceOrale;

        return $this;
    }

    /**
     * Get langueNiveauCompetenceOrale
     *
     * @return \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     */
    public function getLangueNiveauCompetenceOrale()
    {
        return $this->langueNiveauCompetenceOrale;
    }
}
