<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\ConnaissancesLinguistiques;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ConnaissancesLinguistiquesFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       
            $connaissanceLinguistiques = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques->setCv($this->getReference('cv'));
    				$connaissanceLinguistiques->setLangueNiveau('MOYENNE');
    				$connaissanceLinguistiques->setLangueNom('RUSSE');
            $manager->persist($connaissanceLinguistiques);
           
            $connaissanceLinguistiques1 = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques1->setCv($this->getReference('cv1'));
    				$connaissanceLinguistiques1->setLangueNiveau('BIEN');
    				$connaissanceLinguistiques1->setLangueNom('Anglais');
            $manager->persist($connaissanceLinguistiques1);
            
            $connaissanceLinguistiques2 = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques2->setCv($this->getReference('cv2'));
    				$connaissanceLinguistiques2->setLangueNiveau('MAITRISE');
    				$connaissanceLinguistiques2->setLangueNom('Frnacais');
            $manager->persist($connaissanceLinguistiques2);
            
            $connaissanceLinguistiques3 = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques3->setCv($this->getReference('cv3'));
    				$connaissanceLinguistiques3->setLangueNiveau('FAIBLE');
    				$connaissanceLinguistiques3->setLangueNom('ESpagnol');
            $manager->persist($connaissanceLinguistiques3);
            
            $connaissanceLinguistiques4 = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques4->setCv($this->getReference('cv4'));
    				$connaissanceLinguistiques4->setLangueNiveau('DEBUTANT');
    				$connaissanceLinguistiques4->setLangueNom('Allemand');
            $manager->persist($connaissanceLinguistiques4);
    				
        		$manager->flush();
        		
        		$this->addReference('connaissanceLinguistiques', $connaissanceLinguistiques);
        		$this->addReference('connaissanceLinguistiques1', $connaissanceLinguistiques1);
        		$this->addReference('connaissanceLinguistiques2', $connaissanceLinguistiques2);
        		$this->addReference('connaissanceLinguistiques3', $connaissanceLinguistiques3);
        		$this->addReference('connaissanceLinguistiques4', $connaissanceLinguistiques4);
        		
        		
        		
    }
    
    public function getDependencies()
    {
        return array(
            LangueFixtures::class,
            CvFixtures::class,
        );
    }
    
    /**
     $address-> getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }**/
}