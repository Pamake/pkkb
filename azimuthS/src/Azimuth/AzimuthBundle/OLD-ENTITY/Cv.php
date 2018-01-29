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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="objectif", type="string", length=45)
     */
    private $objectif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime")
     */
    private $lastUpdate;

    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Candidat", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Upload", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     *
    private $upload;

    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Filestore", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     *
    private $filestore;*/

    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Langues", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $langue;

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
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * @param string $objectif
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;
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
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @param mixed $lastUpdate
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    }

    /**
     * @return mixed
     *
    public function getUpload()
    {
        return $this->upload;
    }

    /**
     * @param mixed $upload
     *
    public function setUpload($upload)
    {
        $this->upload = $upload;
    }

    /**
     * @return mixed
     *
    public function getFilestore()
    {
        return $this->filestore;
    }

    /**
     * @param mixed $filestore
     *
    public function setFilestore($filestore)
    {
        $this->filestore = $filestore;
    } */

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param mixed $langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    }



}
