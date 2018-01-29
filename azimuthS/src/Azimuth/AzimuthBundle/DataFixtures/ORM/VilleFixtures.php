<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Ville;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class VilleFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       			
       			$ville1 = new Ville();
            $ville1->setVilleNom('Montreal');
            $ville1->setPays($this->getReference('Amerique-du-nord'));
    				$ville1->setLastUpdate(new \DateTime('now'));
    				$this->addReference('montreal', $ville1);
    				$manager->persist($ville1);
       			
       			
            $ville = new Ville();
            $ville->setVilleNom('Yaounde');
            $ville->setPays($this->getReference('Afrique-central'));
    				$ville->setLastUpdate(new \DateTime('now'));
    				$this->addReference('yaounde', $ville);
    				$manager->persist($ville);
        		
    				
    				$ville2 = new Ville();
            $ville2->setVilleNom('Lyon');
            $ville2->setPays($this->getReference('EU'));
    				$ville2->setLastUpdate(new \DateTime('now'));
    				$this->addReference('lyon', $ville2);
    				$manager->persist($ville2);
    				
    				$ville3 = new Ville();
            $ville3->setVilleNom('Cotonou');
            $ville3->setPays($this->getReference('Afrique-ouest'));
    				$ville3->setLastUpdate(new \DateTime('now'));
    				$this->addReference('cotonou', $ville3);
    				$manager->persist($ville3);
    				
    				$ville4 = new Ville();
            $ville4->setVilleNom('Londres');
            $ville4->setPays($this->getReference('Royaume-uni'));
    				$ville4->setLastUpdate(new \DateTime('now'));
    				$this->addReference('londres', $ville4);
    				$manager->persist($ville4);
    				
    				$ville5 = new Ville();
            $ville5->setVilleNom('Dublin');
            $ville5->setPays($this->getReference('Royaume-uni1'));
    				$ville5->setLastUpdate(new \DateTime('now'));
    				$this->addReference('londres1', $ville5);
    				$manager->persist($ville5);
        		
        		$manager->flush();
        		
        
    }
    
    public function getDependencies()
    {
        return array(
            PaysFixtures::class,
        );
    }
    
    /** public function getOrder()
    {
        return 2;
    } **/
}