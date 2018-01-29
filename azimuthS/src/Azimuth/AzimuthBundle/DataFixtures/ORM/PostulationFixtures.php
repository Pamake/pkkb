<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Postulation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PostulationFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       			
       			$postulation = new Postulation();
            $postulation->setPostulationDate(new \DateTime('now'));
            $postulation->setCv($this->getReference('cv1'));
            $postulation->setLettreMotivation($this->getReference('lettreMotivation1'));
            $postulation->setOffreEmploi($this->getReference('offreemploiBNC1'));
    				$manager->persist($postulation);
    				
    				$postulation1 = new Postulation();
            $postulation1->setPostulationDate(new \DateTime('now'));
            $postulation1->setCv($this->getReference('cv2'));
            $postulation1->setLettreMotivation($this->getReference('lettreMotivation2'));
            $postulation1->setOffreEmploi($this->getReference('offreemploiBNC2'));
    				$manager->persist($postulation1);
    				
    				$postulation2 = new Postulation();
            $postulation2->setPostulationDate(new \DateTime('now'));
            $postulation2->setCv($this->getReference('cv3'));
            $postulation2->setLettreMotivation($this->getReference('lettreMotivation3'));
            $postulation2->setOffreEmploi($this->getReference('offreemploiBNC3'));
    				$manager->persist($postulation2);
    				
    				$postulation3 = new Postulation();
            $postulation3->setPostulationDate(new \DateTime('now'));
            $postulation3->setCv($this->getReference('cv4'));
            $postulation3->setLettreMotivation($this->getReference('lettreMotivation'));
            $postulation3->setOffreEmploi($this->getReference('offreemploiBNC4'));
    				$manager->persist($postulation3);
   		
        		$manager->flush();
        		
        
    }
    
    public function getDependencies()
    {
        return array(
            CvFixtures::class,
            LettreMotivationFixtures::class,
            OffreEmploiFixtures::class,
        );
    }
    
    /** public function getOrder()
    {
        return 2;
    } **/
}
