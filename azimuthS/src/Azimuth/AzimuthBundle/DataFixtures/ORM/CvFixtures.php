<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Cv;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CvFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       
            $cv = new Cv();
   				 	$cv->setDateCreationCv(new \DateTime('2006-02-15 05:07:09'));
    			  $cv->setObjectifCv('Analyste Fonctionnel');
    				$cv->setCandidat($this->getReference('candidat'));
    				$cv->setCvLastUpdate(new \DateTime('now'));
   					$cv->setTitreCv('Lacklusture Reflection of a Girl');
    				$cv->setDescriptionCv('Lacklusture Reflection of a Girl');
                    $cv->setCvActive(1);
            $manager->persist($cv);
            
            $cv1 = new Cv();
   				 	$cv1->setDateCreationCv(new \DateTime('2006-02-15 05:07:09'));
    			  $cv1->setObjectifCv('architecte TI');
    				$cv1->setCandidat($this->getReference('candidat1'));
    				$cv1->setCvLastUpdate(new \DateTime('now'));
   					$cv1->setTitreCv('Lacklusture Reflection of a Girl');
    				$cv1->setDescriptionCv('Lacklusture Reflection of a Girl');
                    $cv1->setCvActive(1);
            $manager->persist($cv1);
            
            $cv2 = new Cv();
   				 	$cv2->setDateCreationCv(new \DateTime('2006-02-15 05:07:09'));
    			  $cv2->setObjectifCv('Comptable');
    				$cv2->setCandidat($this->getReference('candidat2'));
    				$cv2->setCvLastUpdate(new \DateTime('now'));
   					$cv2->setTitreCv('Lacklusture Reflection of a Girl');
    				$cv2->setDescriptionCv('Lacklusture Reflection of a Girl');
                    $cv2->setCvActive(1);
            $manager->persist($cv2);
            
            $cv3 = new Cv();
   				 	$cv3->setDateCreationCv(new \DateTime('2006-02-15 05:07:09'));
    			  $cv3->setObjectifCv('charge de projet');
    				$cv3->setCandidat($this->getReference('candidat3'));
    				$cv3->setCvLastUpdate(new \DateTime('now'));
   					$cv3->setTitreCv('Lacklusture Reflection of a Girl');
    				$cv3->setDescriptionCv('Lacklusture Reflection of a Girl');
                    $cv3->setCvActive(1);
            $manager->persist($cv3);
            
            $cv4 = new Cv();
   				 	$cv4->setDateCreationCv(new \DateTime('2006-02-15 05:07:09'));
    			  $cv4->setObjectifCv('Analyste Programmeur');
    				$cv4->setCandidat($this->getReference('candidat4'));
    				$cv4->setCvLastUpdate(new \DateTime('now'));
   					$cv4->setTitreCv('Lacklusture Reflection of a Girl');
    				$cv4->setDescriptionCv('Lacklusture Reflection of a Girl');
                    $cv4->setCvActive(1);
            $manager->persist($cv4);
    				
        		$manager->flush();
        		
        		$this->addReference('cv', $cv);
        		$this->addReference('cv1', $cv1);
        		$this->addReference('cv2', $cv2);
        		$this->addReference('cv3', $cv3);
        		$this->addReference('cv4', $cv4);
        		
        		
    }
    
    public function getDependencies()
	    {
	        return array(
	            CandidatFixtures::class,
	            
	        );
	    }
    
    /** $address-> getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    } **/
}