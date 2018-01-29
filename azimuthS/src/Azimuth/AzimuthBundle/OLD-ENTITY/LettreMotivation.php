<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LettreMotivation
 *
 * @ORM\Table(name="lettreMotivation")
 * @ORM\Entity(repositoryClass="Azimuth\AzimuthBundle\Repository\LettreMotivationRepository")
 */
class LettreMotivation
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
     * @ORM\Column(name="LettreMotivation_texte", type="text")
     */
    private $lettreMotivationTexte;


    /**
     * @ORM\OneToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Candidat", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="fk_candidat_id", referencedColumnName="id", unique=true)
     */
    private $candidat;

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
    public function getLettreMotivationTexte()
    {
        return $this->lettreMotivationTexte;
    }

    /**
     * @param string $lettreMotivationTexte
     */
    public function setLettreMotivationTexte($lettreMotivationTexte)
    {
        $this->lettreMotivationTexte = $lettreMotivationTexte;
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



}
