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
     * @var string
     *
     * @ORM\Column(name="langueNiveau", type="string", length=25, nullable=true)
     */
    private $langueNiveau;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Niveau")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $langueNiveauExpresionEcrite;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Niveau")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $langueNiveauComprehensionEcrite;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\NiveauLinguistique
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Niveau")
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
     * Set langueNiveau
     *
     * @param string $langueNiveau
     *
     * @return ConnaissancesLinguistiques
     */
    public function setLangueNiveau($langueNiveau)
    {
        $this->langueNiveau = $langueNiveau;

        return $this;
    }

    /**
     * Get langueNiveau
     *
     * @return string
     */
    public function getLangueNiveau()
    {
        return $this->langueNiveau;
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
