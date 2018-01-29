<?php

namespace Azimuth\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur_roles
 *
 * @ORM\Table(name="utilisateur_roles")
 * @ORM\Entity(repositoryClass="Azimuth\UtilisateursBundle\Repository\Utilisateur_rolesRepository")
 */
class Utilisateur_roles
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
     * @ORM\Column(name="utilisateur_name", type="string", length=45, unique=true)
     */
    private $utilisateurName;

    /**
     * @var string
     *
     * @ORM\Column(name="role_name", type="string", length=45)
     */
    private $roleName;


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
     * Set utilisateurName
     *
     * @param string $utilisateurName
     *
     * @return Utilisateur_roles
     */
    public function setUtilisateurName($utilisateurName)
    {
        $this->utilisateurName = $utilisateurName;

        return $this;
    }

    /**
     * Get utilisateurName
     *
     * @return string
     */
    public function getUtilisateurName()
    {
        return $this->utilisateurName;
    }

    /**
     * Set roleName
     *
     * @param string $roleName
     *
     * @return Utilisateur_roles
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Get roleName
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }
}
