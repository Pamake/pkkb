<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecruteurCv
 *
 * @ORM\Table(name="recruteurCv")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\RecruteurCvRepository")
 */
class RecruteurCv
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
     * @var int
     *
     * @ORM\Column(name="fk_recruteur_id", type="integer")
     */
    private $fkRecruteurId;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_cv_id", type="integer")
     */
    private $fkCvId;


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
     * Set fkRecruteurId
     *
     * @param integer $fkRecruteurId
     *
     * @return recruteurCv
     */
    public function setFkRecruteurId($fkRecruteurId)
    {
        $this->fkRecruteurId = $fkRecruteurId;

        return $this;
    }

    /**
     * Get fkRecruteurId
     *
     * @return int
     */
    public function getFkRecruteurId()
    {
        return $this->fkRecruteurId;
    }

    /**
     * Set fkCvId
     *
     * @param integer $fkCvId
     *
     * @return recruteurCv
     */
    public function setFkCvId($fkCvId)
    {
        $this->fkCvId = $fkCvId;

        return $this;
    }

    /**
     * Get fkCvId
     *
     * @return int
     */
    public function getFkCvId()
    {
        return $this->fkCvId;
    }
}
