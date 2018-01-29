<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Pays;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PaysFixtures extends Fixture 
{

    public function load(ObjectManager $manager) 
    {
       
            $pays = new Pays();
            $pays->setPaysNom('Canada');
    				$pays->setLastUpdate(new \DateTime('now'));
    				$this->addReference('Amerique-du-nord', $pays);
            $manager->persist($pays);
            
            $pays1 = new Pays();
            $pays1->setPaysNom('Cameroon');
    				$pays1->setLastUpdate(new \DateTime('now'));
    				$this->addReference('Afrique-central', $pays1);
            $manager->persist($pays1);
            
            $pays2 = new Pays();
            $pays2->setPaysNom('France');
    				$pays2->setLastUpdate(new \DateTime('now'));
    				$this->addReference('EU', $pays2);
            $manager->persist($pays2);
            
            $pays3 = new Pays();
            $pays3->setPaysNom('Benin');
    				$pays3->setLastUpdate(new \DateTime('now'));
    				$this->addReference('Afrique-ouest', $pays3);
            $manager->persist($pays3);
            
            $pays4 = new Pays();
            $pays4->setPaysNom('Angleterre');
    				$pays4->setLastUpdate(new \DateTime('now'));
    				$this->addReference('Royaume-uni', $pays4);
            $manager->persist($pays4); 
            
            $pays5 = new Pays();
            $pays5->setPaysNom('Ecosse');
    				$pays5->setLastUpdate(new \DateTime('now'));
    				$this->addReference('Royaume-uni1', $pays5);
            $manager->persist($pays5); 
            
        		$manager->flush();
        		
        		
    }
    
   /** public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    } **/
}