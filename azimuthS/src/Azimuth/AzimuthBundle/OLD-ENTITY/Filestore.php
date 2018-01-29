<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filestore
 *
 * @ORM\Table(name="filestore")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\FilestoreRepository")
 */
class Filestore
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
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="nimetype", type="string", length=50)
     */
    private $nimetype;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="filedata", type="blob")
     */
    private $filedata;


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
     * Set filename
     *
     * @param string $filename
     *
     * @return Filestore
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set nimetype
     *
     * @param string $nimetype
     *
     * @return Filestore
     */
    public function setNimetype($nimetype)
    {
        $this->nimetype = $nimetype;

        return $this;
    }

    /**
     * Get nimetype
     *
     * @return string
     */
    public function getNimetype()
    {
        return $this->nimetype;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Filestore
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set filedata
     *
     * @param string $filedata
     *
     * @return Filestore
     */
    public function setFiledata($filedata)
    {
        $this->filedata = $filedata;

        return $this;
    }

    /**
     * Get filedata
     *
     * @return string
     */
    public function getFiledata()
    {
        return $this->filedata;
    }
}
