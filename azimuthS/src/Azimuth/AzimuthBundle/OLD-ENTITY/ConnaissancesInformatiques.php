<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConnaissancesInformatiques
 *
 * @ORM\Table(name="connaissancesInformatiques")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\ConnaissancesInformatiquesRepository")
 */
class ConnaissancesInformatiques
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
     * @ORM\Column(name="logiciels", type="string", length=100)
     */
    private $logiciels;

    /**
     * @var string
     *
     * @ORM\Column(name="langages", type="string", length=100)
     */
    private $langages;

    /**
     * @var string
     *
     * @ORM\Column(name="systemes_exploitations", type="string", length=100)
     */
    private $systemesExploitations;

    /**
     * @var string
     *
     * @ORM\Column(name="programmation", type="string", length=100)
     */
    private $programmation;

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
    public function getLogiciels()
    {
        return $this->logiciels;
    }

    /**
     * @param string $logiciels
     */
    public function setLogiciels($logiciels)
    {
        $this->logiciels = $logiciels;
    }

    /**
     * @return string
     */
    public function getLangages()
    {
        return $this->langages;
    }

    /**
     * @param string $langages
     */
    public function setLangages($langages)
    {
        $this->langages = $langages;
    }

    /**
     * @return string
     */
    public function getSystemesExploitations()
    {
        return $this->systemesExploitations;
    }

    /**
     * @param string $systemesExploitations
     */
    public function setSystemesExploitations($systemesExploitations)
    {
        $this->systemesExploitations = $systemesExploitations;
    }

    /**
     * @return string
     */
    public function getProgrammation()
    {
        return $this->programmation;
    }

    /**
     * @param string $programmation
     */
    public function setProgrammation($programmation)
    {
        $this->programmation = $programmation;
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
