<?php

namespace Azimuth\AzimuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LettreMotivation
 *
 * @ORM\Table(name="lettre_motivation")
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
     * @ORM\Column(name="lettreMotivationTexte", type="text", nullable=true)
     */
    private $lettreMotivationTexte;

    /**
     * @var \Azimuth\AzimuthBundle\Entity\Candidat
     * @ORM\ManyToOne(targetEntity="Azimuth\AzimuthBundle\Entity\Candidat")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat;


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
     * Set lettreMotivationTexte
     *
     * @param string $lettreMotivationTexte
     *
     * @return LettreMotivation
     */
    public function setLettreMotivationTexte($lettreMotivationTexte)
    {
        $this->lettreMotivationTexte = $lettreMotivationTexte;

        return $this;
    }

    /**
     * Get lettreMotivationTexte
     *
     * @return string
     */
    public function getLettreMotivationTexte()
    {
        return $this->lettreMotivationTexte;
    }

    /**
     * @return Candidat
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * @param Candidat $candidat
     */
    public function setCandidat($candidat)
    {
        $this->candidat = $candidat;
    }


}
