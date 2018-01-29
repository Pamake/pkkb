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
     	* @var \Azimuth\AzimuthBundle\Entity\Recruteur
   		* @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Recruteur")
   		* @ORM\JoinColumn(nullable=false)
   		*/
    private $recruteur;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_cv_id", type="integer")
     */
     /**
     	* @var \Azimuth\AzimuthBundle\Entity\Cv
   		* @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Cv")
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
     * @param Recruteur $recruteur
     */
    public function setRecruteur($recruteur)
    {
        $this->recruteur = $recruteur;

        return $this;
    }

     /**
     * @return Recruteur
     */
    public function getRecruteur()
    {
        return $this->recruteur;
    }

    /**
     * @param Cv $cv
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * @return Cv
     */
    public function getCv()
    {
        return $this->cv;
    }
}
