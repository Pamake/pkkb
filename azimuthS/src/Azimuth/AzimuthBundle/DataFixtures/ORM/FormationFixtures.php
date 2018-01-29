<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FormationFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       
            $formation = new Formation();
   					$formation->setCv($this->getReference('cv'));
    				$formation->setLieuEtablissement('VILLLEURBANNE');
    				$formation->setNomDiplomeObtenu('Master degree');
    				$formation->setFormationDuree('2 ans et 11 mois');
    				$formation->setEtablissementNom('Universite Claude bernard');
            $manager->persist($formation);
            
            $formation1 = new Formation();
   					$formation1->setCv($this->getReference('cv1'));
    				$formation1->setLieuEtablissement('PARIS');
    				$formation1->setNomDiplomeObtenu('License');
    				$formation1->setFormationDuree('2 ans et 11 mois');
    				$formation1->setEtablissementNom('PARIS DAUPHINE');
            $manager->persist($formation1);
            
            $formation2 = new Formation();
   					$formation2->setCv($this->getReference('cv2'));
    				$formation2->setLieuEtablissement('Grenoble');
    				$formation2->setNomDiplomeObtenu('Baccalaureat');
    				$formation2->setFormationDuree('2 ans et 11 mois');
    				$formation2->setEtablissementNom('Grenoble univesite');
            $manager->persist($formation2);
            
            $formation3 = new Formation();
   					$formation3->setCv($this->getReference('cv3'));
    				$formation3->setLieuEtablissement('Younde');
    				$formation3->setNomDiplomeObtenu('Maitrisse en adminstration des biens');
    				$formation3->setFormationDuree('2 ans et 11 mois');
    				$formation3->setEtablissementNom('Yaounde 1');
            $manager->persist($formation3);
            
            $formation4 = new Formation();
   					$formation4->setCv($this->getReference('cv4'));
    				$formation4->setLieuEtablissement('Montreal UQAM');
    				$formation4->setNomDiplomeObtenu('Biologiste');
    				$formation4->setFormationDuree('2 ans et 11 mois');
    				$formation4->setEtablissementNom('Certifact aptitude');
            $manager->persist($formation4);
            
            $formation5 = new Formation();
   					$formation5->setCv($this->getReference('cv1'));
    				$formation5->setLieuEtablissement('Montrel Mcgill');
    				$formation5->setNomDiplomeObtenu('Master');
    				$formation5->setFormationDuree('2 ans et 11 mois');
    				$formation5->setEtablissementNom('Mcgill Universite');
            $manager->persist($formation5);
 				
        		$manager->flush();
        		
        		$this->addReference('formation', $formation);
        		$this->addReference('formation1', $formation1);
        		$this->addReference('formation2', $formation2);
        		$this->addReference('formation3', $formation3);
        		$this->addReference('formation4', $formation4);
        		$this->addReference('formation5', $formation5);
        		
        		
        		
    }
    
     public function getDependencies()
    {
        return array(
            CvFixtures::class,
        );
    }
    
    /**
     $address-> getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    } **/
}