<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="langue")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\LangueRepository")
 */
class Langue
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
     * @ORM\Column(name="langueName", type="string", length=20)
     */
    private $langueName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="langueLastUpdate", type="datetime")
     */
    private $langueLastUpdate;


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
     * Set langueName
     *
     * @param string $langueName
     *
     * @return Langue
     */
    public function setLangueName($langueName)
    {
        $this->langueName = $langueName;

        return $this;
    }

    /**
     * Get langueName
     *
     * @return string
     */
    public function getLangueName()
    {
        return $this->langueName;
    }

    /**
     * Set langueLastUpdate
     *
     * @param \DateTime $langueLastUpdate
     *
     * @return Langue
     */
    public function setLangueLastUpdate($langueLastUpdate)
    {
        $this->langueLastUpdate = $langueLastUpdate;

        return $this;
    }

    /**
     * Get langueLastUpdate
     *
     * @return \DateTime
     */
    public function getLangueLastUpdate()
    {
        return $this->langueLastUpdate;
    }

}
