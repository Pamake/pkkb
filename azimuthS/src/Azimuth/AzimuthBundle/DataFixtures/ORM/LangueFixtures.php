<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Langue;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LangueFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
       
            $langue = new Langue();
            $langue->setLangueLastUpdate(new \DateTime('now'));
            $langue->setLangueName('Anglais');
            $this->addReference('langueEN', $langue);
            $manager->persist($langue);
            
            $langue1 = new Langue();
            $langue1->setLangueLastUpdate(new \DateTime('now'));
            $langue1->setLangueName('Francais');
            $this->addReference('langueFR', $langue1);
            $manager->persist($langue1);
            
            $langue2 = new Langue();
            $langue2->setLangueLastUpdate(new \DateTime('now'));
            $langue2->setLangueName('Espagnol');
            $this->addReference('langueES', $langue2);
            $manager->persist($langue2);
            
            $langue3 = new Langue();
            $langue3->setLangueLastUpdate(new \DateTime('now'));
            $langue3->setLangueName('Allemand');
            $this->addReference('langueALL', $langue3);
            $manager->persist($langue3);
          
            
        		$manager->flush();
    }
   
}
