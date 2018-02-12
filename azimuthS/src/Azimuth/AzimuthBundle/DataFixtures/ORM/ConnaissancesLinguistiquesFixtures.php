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
    				//$connaissanceLinguistiques->setLangueNiveau('MOYENNE');
    				$connaissanceLinguistiques->setLangueNom('RUSSE');
                    $connaissanceLinguistiques->setLangueNiveauCompetenceOrale($this->getReference('niveau2'));
                    $connaissanceLinguistiques->setLangueNiveauComprehensionEcrite($this->getReference('niveau2'));
                    $connaissanceLinguistiques->setLangueNiveauExpresionEcrite($this->getReference('niveau2'));
            $manager->persist($connaissanceLinguistiques);
           
            $connaissanceLinguistiques1 = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques1->setCv($this->getReference('cv1'));
    				//$connaissanceLinguistiques1->setLangueNiveau('BIEN');
    				$connaissanceLinguistiques1->setLangueNom('Anglais');
        $connaissanceLinguistiques1->setLangueNiveauCompetenceOrale($this->getReference('niveau1'));
        $connaissanceLinguistiques1->setLangueNiveauComprehensionEcrite($this->getReference('niveau1'));
        $connaissanceLinguistiques1->setLangueNiveauExpresionEcrite($this->getReference('niveau1'));
            $manager->persist($connaissanceLinguistiques1);
            
            $connaissanceLinguistiques2 = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques2->setCv($this->getReference('cv2'));
    				//$connaissanceLinguistiques2->setLangueNiveau('MAITRISE');
    				$connaissanceLinguistiques2->setLangueNom('Frnacais');
        $connaissanceLinguistiques2->setLangueNiveauCompetenceOrale($this->getReference('niveau6'));
        $connaissanceLinguistiques2->setLangueNiveauComprehensionEcrite($this->getReference('niveau6'));
        $connaissanceLinguistiques2->setLangueNiveauExpresionEcrite($this->getReference('niveau6'));
            $manager->persist($connaissanceLinguistiques2);
            
            $connaissanceLinguistiques3 = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques3->setCv($this->getReference('cv3'));
    				//$connaissanceLinguistiques3->setLangueNiveau('FAIBLE');
    				$connaissanceLinguistiques3->setLangueNom('ESpagnol');
        $connaissanceLinguistiques3->setLangueNiveauCompetenceOrale($this->getReference('niveau4'));
        $connaissanceLinguistiques3->setLangueNiveauComprehensionEcrite($this->getReference('niveau4'));
        $connaissanceLinguistiques3->setLangueNiveauExpresionEcrite($this->getReference('niveau4'));
            $manager->persist($connaissanceLinguistiques3);
            
            $connaissanceLinguistiques4 = new ConnaissancesLinguistiques();
   					$connaissanceLinguistiques4->setCv($this->getReference('cv4'));
    				//$connaissanceLinguistiques4->setLangueNiveau('DEBUTANT');
    				$connaissanceLinguistiques4->setLangueNom('Allemand');
        $connaissanceLinguistiques4->setLangueNiveauCompetenceOrale($this->getReference('niveau3'));
        $connaissanceLinguistiques4->setLangueNiveauComprehensionEcrite($this->getReference('niveau3'));
        $connaissanceLinguistiques4->setLangueNiveauExpresionEcrite($this->getReference('niveau3'));
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
            NiveauLinguistiquesFixtures::class,
        );
    }
    
    /**
     $address-> getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }**/
}