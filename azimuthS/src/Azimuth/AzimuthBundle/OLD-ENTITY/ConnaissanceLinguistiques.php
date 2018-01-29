<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConnaissanceLinguistiques
 *
 * @ORM\Table(name="connaissanceLinguistiques")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\ConnaissanceLinguistiquesRepository")
 */
class ConnaissanceLinguistiques
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
     * @ORM\Column(name="langue_nom", type="string", length=25)
     */
    private $langueNom;

    /**
     * @var string
     *
     * @ORM\Column(name="langue_niveau", type="string", length=25)
     */
    private $langueNiveau;

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
    public function getLangueNom()
    {
        return $this->langueNom;
    }

    /**
     * @param string $langueNom
     */
    public function setLangueNom($langueNom)
    {
        $this->langueNom = $langueNom;
    }

    /**
     * @return string
     */
    public function getLangueNiveau()
    {
        return $this->langueNiveau;
    }

    /**
     * @param string $langueNiveau
     */
    public function setLangueNiveau($langueNiveau)
    {
        $this->langueNiveau = $langueNiveau;
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
