<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Recruteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RecruteurFixtures extends Fixture implements DependentFixtureInterface
{
   
    public function load(ObjectManager $manager)
    {
        $recruteur1 = new Recruteur();
        $recruteur1->setSocieteNom('benjamin');
        $recruteur1->setSocieteSecteurActivite('Banque et finance');
        $recruteur1->setSocietePhone('418-875-1343');
        $recruteur1->setSocieteUrl('https://emplois.bnc.ca/');
        $recruteur1->setSocieteDescription('a Banque Nationale figure parmi les six banques les plus importantes du Canada. Nous sommes egalement la principale institution bancaire au Quebec et partenaire par excellence des PME. ');
        $recruteur1->setContactTitre('Banque Nationale');
        $recruteur1->setContactNom('benjamin');
        $recruteur1->setContactPrenom('pamake');
        $recruteur1->setContactEmail('benjamin@gmail.com');
        $recruteur1->setUtilisateur($this->getReference('utilisateur1'));
       // $recruteur1->setCv($this->getReference('cv1'));
        $manager->persist($recruteur1);
        
        $recruteur2 = new Recruteur();
        $recruteur2->setSocieteNom('mathilde');
        $recruteur2->setSocieteSecteurActivite('Technologie');
        $recruteur2->setSocietePhone('518-875-2643');
        $recruteur2->setSocieteUrl('https://emplois.bnc.ca/');
        $recruteur2->setSocieteDescription('a Banque Nationale figure parmi les six banques les plus importantes du Canada.');
        $recruteur2->setContactTitre('Thales');
        $recruteur2->setContactNom('mathilde');
        $recruteur2->setContactPrenom(' mathilde pamake');
        $recruteur2->setContactEmail('mathilde@gmail.com');
        $recruteur2->setUtilisateur($this->getReference('utilisateur2'));
        //$recruteur2->setCv($this->getReference('cv2'));
        $manager->persist($recruteur2);
        
        
        $recruteur3 = new Recruteur();
        $recruteur3->setSocieteNom('pauline');
        $recruteur3->setSocieteSecteurActivite('Banque et finance');
        $recruteur3->setSocietePhone('418-875-1323');
        $recruteur3->setSocieteUrl('https://emplois.bnc.ca/');
        $recruteur3->setSocieteDescription('a Banque Nationale figure parmi les six banques les plus importantes du Canada. Nous sommes egalement la principale institution bancaire au Quebec et partenaire par excellence des PME.');
        $recruteur3->setContactTitre('Banque TD');
        $recruteur3->setContactNom('pauline');
        $recruteur3->setContactPrenom('pauline');
        $recruteur3->setContactEmail('pauline@gmail.com');
        $recruteur3->setUtilisateur($this->getReference('utilisateur3'));
       // $recruteur3->setCv($this->getReference('cv3'));
        $manager->persist($recruteur3);
        
        $manager->flush();
        
        $this->addReference('recruteur1', $recruteur1);
        $this->addReference('recruteur2', $recruteur2);
        $this->addReference('recruteur3', $recruteur3);
        
    }
    
    public function getDependencies()
	    {
	        return array(
	            UtilisateursFixtures::class,
              
	        );
	    }

}