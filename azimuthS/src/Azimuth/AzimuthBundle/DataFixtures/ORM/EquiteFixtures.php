<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Equite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EquiteFixtures extends Fixture
{

    public function load(ObjectManager $manager) 
    {
       
            $equite = new Equite();
            $equite->setNameEquite('Femme');
            $manager->persist($equite);

        $equite1 = new Equite();
        $equite1->setNameEquite('Minorité visible');
        $manager->persist($equite1);

        $equite2 = new Equite();
        $equite2->setNameEquite('Personne handicapée');
        $manager->persist($equite2);

        $equite3 = new Equite();
        $equite3->setNameEquite('Autochtone');
        $manager->persist($equite3);

        		$manager->flush();
        		
        		
    }
    
   /** public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    } **/
}