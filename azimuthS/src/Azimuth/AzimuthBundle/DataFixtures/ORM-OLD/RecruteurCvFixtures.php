<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\recruteursBundle\Entity\RecruteurCv;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RecruteurCvFixtures extends Fixture implements DependentFixtureInterface
{
   
    public function load(ObjectManager $manager)
    {
        $recruteurcv1 = new RecruteurCv();
        $recruteurcv1->setFkCvId($this->getReference('cv1'));
        $recruteurcv1->recruteurcv1($this->getReference('recruteur1'));
        $manager->persist($recruteurcv1);
        
        $recruteurcv2 = new RecruteurCv();
        $recruteurcv2->setFkCvId($this->getReference('cv2'));
        $recruteurcv2->recruteurcv1($this->getReference('recruteur1'));
        $manager->persist($recruteurcv2);
        
        $recruteurcv3 = new RecruteurCv();
        $recruteurcv3->setFkCvId($this->getReference('cv3'));
        $recruteurcv3->recruteurcv1($this->getReference('recruteur2'));
        $manager->persist($recruteurcv3);
        
        $recruteurcv4 = new RecruteurCv();
        $recruteurcv4->setFkCvId($this->getReference('cv4'));
        $recruteurcv4->recruteurcv1($this->getReference('recruteur3'));
        $manager->persist($recruteurcv4);
        
        
        $manager->flush();
        
        $this->addReference('recruteurcv1', $recruteurcv1);
        $this->addReference('recruteurcv2', $recruteurcv2);
        $this->addReference('recruteurcv3', $recruteurcv3);
        $this->addReference('recruteurcv4', $recruteurcv4);
        
    }
    
    public function getDependencies()
	    {
	        return array(
	            RecruteurFixtures::class,
	            CvFixtures::class,
	        );
	    }
    
   /** public function getOrder()
    {
        return 5;
    } **/
}