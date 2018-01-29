<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Address;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AddressFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $address = new Address();
            $address->setAddress('123 chemin Ste-Foy');
            $address->setAddress2('Unit B22');
            $address->setDistrict('Sainte-Foy');
            $address->setPostalCode('G1V 1T3');
            $address->setPhone('418-659-6600');
            $address->setLastUpdate(new \DateTime('now'));
            $address->setVille($this->getReference('montreal'));
            $manager->persist($address);
            
            
            $address1 = new Address();
            $address1->setAddress('123 chemin des paletuviers');
            $address1->setAddress2('Unit B22');
            $address1->setDistrict('kikoa');
    				$address1->setPostalCode('BP1382');
    				$address1->setPhone('+1-237-69-95-44');
    				$address1->setLastUpdate(new \DateTime('2008-02-15 04:45:25'));
    				$address1->setVille($this->getReference('yaounde'));
            $manager->persist($address1);
            
            $address2 = new Address();
            $address2->setAddress('21 Impasse de fontanieres');
            $address2->setAddress2('Unit B22');
            $address2->setDistrict('Villeurbanne');
    				$address2->setPostalCode('69100');
    				$address2->setPhone('418-659-6600');
    				$address2->setLastUpdate(new \DateTime('2006-02-15 04:45:25'));
    				$address2->setVille($this->getReference('lyon'));
            $manager->persist($address2);
            
            $address3 = new Address();
            $address3->setAddress('123 chemin Ste-Foy');
            $address3->setAddress2('Unit B22');
            $address3->setDistrict('Abomey');
    				$address3->setPostalCode('G1M 1P1');
    				$address3->setPhone('418-659-6600');
    				$address3->setLastUpdate(new \DateTime('now'));
    				$address3->setVille($this->getReference('cotonou'));
            $manager->persist($address3);
            
            $address4 = new Address();
            $address4->setAddress('123 chemin Ste-Foy');
            $address4->setAddress2('Unit B22');
            $address4->setDistrict('Barnet');
    				$address4->setPostalCode('G1V 1T3');
    				$address4->setPhone('418-659-6600');
    				$address4->setLastUpdate(new \DateTime('2012-04-12 04:45:25'));
    				$address4->setVille($this->getReference('londres'));
            $manager->persist($address4); 
            
            $address5 = new Address();
            $address5->setAddress('123 banret street Ste-Foy');
            $address5->setAddress2('Unit B22');
            $address5->setDistrict('Barnet');
    				$address5->setPostalCode('G1V 1T3');
    				$address5->setPhone('418-659-6600');
    				$address5->setLastUpdate(new \DateTime('now'));
    				$address5->setVille($this->getReference('londres1'));
            $manager->persist($address5); 
            
        		$manager->flush();
        		
        		$this->addReference('address', $address);
        		$this->addReference('address1', $address1);
        		$this->addReference('address2', $address2);
        		$this->addReference('address3', $address3);
        		$this->addReference('address4', $address4);
        		$this->addReference('address5', $address5
        		);
    }
    
    
     public function getDependencies()
	    {
	        return array(
	            VilleFixtures::class,
	        );
	    }
    
   /**  public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    } **/
}