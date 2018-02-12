<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Statut;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StatutFixtures extends Fixture
{

    public function load(ObjectManager $manager) 
    {
       
            $statut = new Statut();
            $statut->setNameStatut('citoyen canadien');
            $manager->persist($statut);

        $statut1 = new Statut();
        $statut1->setNameStatut('Residance permanente');
        $manager->persist($statut1);

        $statut2 = new Statut();
        $statut2->setNameStatut('Autres');
        $manager->persist($statut2);

        $statut3 = new Statut();
        $statut3->setNameStatut('Permit de  travail');
        $manager->persist($statut3);

        		$manager->flush();
        		
        		
    }
    
   /** public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    } **/
}