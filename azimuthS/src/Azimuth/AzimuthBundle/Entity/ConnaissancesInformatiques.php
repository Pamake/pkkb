<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConnaissancesInformatiques
 *
 * @ORM\Table(name="connaissances_informatiques")
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
     * @ORM\Column(name="logicielsMaitrisse", type="string", length=255, nullable=true)
     */
    private $logicielsMaitrisse;

    /**
     * @var string
     *
     * @ORM\Column(name="langages", type="string", length=255, nullable=true)
     */
    private $langages;

    /**
     * @var string
     *
     * @ORM\Column(name="systemesExploitations", type="string", length=255, nullable=true)
     */
    private $systemesExploitations;

    /**
     * @var string
     *
     * @ORM\Column(name="programmation", type="string", length=255, nullable=true)
     */
    private $programmation;

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
     * Set logicielsMaitrisse
     *
     * @param string $logicielsMaitrisse
     *
     * @return ConnaissancesInformatiques
     */
    public function setLogicielsMaitrisse($logicielsMaitrisse)
    {
        $this->logicielsMaitrisse = $logicielsMaitrisse;

        return $this;
    }

    /**
     * Get logicielsMaitrisse
     *
     * @return string
     */
    public function getLogicielsMaitrisse()
    {
        return $this->logicielsMaitrisse;
    }

    /**
     * Set langages
     *
     * @param string $langages
     *
     * @return ConnaissancesInformatiques
     */
    public function setLangages($langages)
    {
        $this->langages = $langages;

        return $this;
    }

    /**
     * Get langages
     *
     * @return string
     */
    public function getLangages()
    {
        return $this->langages;
    }

    /**
     * Set systemesExploitations
     *
     * @param string $systemesExploitations
     *
     * @return ConnaissancesInformatiques
     */
    public function setSystemesExploitations($systemesExploitations)
    {
        $this->systemesExploitations = $systemesExploitations;

        return $this;
    }

    /**
     * Get systemesExploitations
     *
     * @return string
     */
    public function getSystemesExploitations()
    {
        return $this->systemesExploitations;
    }

    /**
     * Set programmation
     *
     * @param string $programmation
     *
     * @return ConnaissancesInformatiques
     */
    public function setProgrammation($programmation)
    {
        $this->programmation = $programmation;

        return $this;
    }

    /**
     * Get programmation
     *
     * @return string
     */
    public function getProgrammation()
    {
        return $this->programmation;
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
