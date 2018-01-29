<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\CandidatOffreEmploi;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CandidatOffreEmploiFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       
            $candidatOffreEmploi1 = new CandidatOffreEmploi();
            $candidatOffreEmploi1->setOffreEmploi($this->getReference('offreemploiBNC1'));
            $candidatOffreEmploi1->setCandidat($this->getReference('candidat1'));
            $manager->persist($candidatOffreEmploi1);
            
            $candidatOffreEmploi2 = new CandidatOffreEmploi();
            $candidatOffreEmploi2->setOffreEmploi($this->getReference('offreemploiBNC2'));
            $candidatOffreEmploi2->setCandidat($this->getReference('candidat2'));
            $manager->persist($candidatOffreEmploi2);
            
            $candidatOffreEmploi3 = new CandidatOffreEmploi();
            $candidatOffreEmploi3->setOffreEmploi($this->getReference('offreemploiBNC3'));
            $candidatOffreEmploi3->setCandidat($this->getReference('candidat3'));
            $manager->persist($candidatOffreEmploi3);
            
            $candidatOffreEmploi4 = new CandidatOffreEmploi();
            $candidatOffreEmploi4->setOffreEmploi($this->getReference('offreemploiBNC4'));
            $candidatOffreEmploi4->setCandidat($this->getReference('candidat4'));
            $manager->persist($candidatOffreEmploi4);
            
 				
        		$manager->flush();
        		
        		$this->addReference('candidatOffreEmploi1', $candidatOffreEmploi1);
        		$this->addReference('candidatOffreEmploi2', $candidatOffreEmploi2);
        		$this->addReference('candidatOffreEmploi3', $candidatOffreEmploi3);
        		$this->addReference('candidatOffreEmploi4', $candidatOffreEmploi4);
        		
        		
    }
     public function getDependencies()
    {
        return array(
            OffreEmploiFixtures::class,
            CandidatFixtures::class,
        );
    }
    
}