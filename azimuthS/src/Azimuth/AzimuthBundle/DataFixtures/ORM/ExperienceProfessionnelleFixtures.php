<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\ExperienceProfessionnelle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ExperienceProfessionnelleFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       
            $experienceProfessionnelle = new ExperienceProfessionnelle();
   					$experienceProfessionnelle->setCv($this->getReference('cv'));
   					$experienceProfessionnelle->setCompetencesAcquise('Microsoft Office (PowerPoint, Word, Excel et Outlook), logiciels de gestion de projet, Certification PMP');
   					//$experienceProfessionnelle->setDuree('2 ans et 7 mois');
   					$experienceProfessionnelle->setFinMission('2009-02-14 22:04:36');
   					$experienceProfessionnelle->setDebutMission('2009-02-14 22:04:36');
   					//$experienceProfessionnelle->setVille('Lyon');
   					$experienceProfessionnelle->setSecteurActivite('Telecommunication');
   					$experienceProfessionnelle->setLieu('Rhone');
   					$experienceProfessionnelle->setPosteOccupe('Responsable application');
   					$experienceProfessionnelle->setEntrepriseNom('ATOS');
            $manager->persist($experienceProfessionnelle);
            
            $experienceProfessionnelle1 = new ExperienceProfessionnelle();
   					$experienceProfessionnelle1->setCv($this->getReference('cv'));
   					$experienceProfessionnelle1->setCompetencesAcquise('Microsoft Office (PowerPoint, Word, Excel et Outlook), logiciels de gestion de projet, Certification PMP');
   					//$experienceProfessionnelle1->setDuree('3 ans et 5 mois');
   					$experienceProfessionnelle1->setFinMission('2009-02-14 22:04:36');
   					$experienceProfessionnelle1->setDebutMission('2009-02-14 22:04:36');
   					//$experienceProfessionnelle1->setVille('Paris');
   					$experienceProfessionnelle1->setSecteurActivite('Energie');
   					$experienceProfessionnelle1->setLieu('Nanterre');
   					$experienceProfessionnelle1->setPosteOccupe('Analyste programmeur');
   					$experienceProfessionnelle1->setEntrepriseNom('EDF');
                    $experienceProfessionnelle1->setDescription('A Boring Epistle of a Pioneer And a Mad Scientist who must Escape a Frisbee in The Gulf of Mexico');
            $manager->persist($experienceProfessionnelle1);
            
            $experienceProfessionnelle2 = new ExperienceProfessionnelle();
   					$experienceProfessionnelle2->setCv($this->getReference('cv1'));
   					$experienceProfessionnelle2->setCompetencesAcquise('Microsoft Office (PowerPoint, Word, Excel et Outlook), logiciels de gestion de projet, Certification PMP');
   					//$experienceProfessionnelle2->setDuree('2 ans et 7 mois');
   					$experienceProfessionnelle2->setFinMission('2009-02-14 22:04:36');
   					$experienceProfessionnelle2->setDebutMission('2009-02-14 22:04:36');
   					//$experienceProfessionnelle2->setVille('Lyon');
   					$experienceProfessionnelle2->setSecteurActivite('Telecommunication');
   					$experienceProfessionnelle2->setLieu('Rhone');
   					$experienceProfessionnelle2->setPosteOccupe('Responsable application');
   					$experienceProfessionnelle2->setEntrepriseNom('ATOS');
                    $experienceProfessionnelle2->setDescription('A Boring Epistle of a Pioneer And a Mad Scientist who must Escape a Frisbee in The Gulf of Mexico');
            $manager->persist($experienceProfessionnelle2);
            
            $experienceProfessionnelle3 = new ExperienceProfessionnelle();
   					$experienceProfessionnelle3->setCv($this->getReference('cv'));
   					$experienceProfessionnelle3->setCompetencesAcquise('Microsoft Office (PowerPoint, Word, Excel et Outlook), logiciels de gestion de projet, Certification PMP');
   					//$experienceProfessionnelle3->setDuree('6 ans et 7 mois');
   					$experienceProfessionnelle3->setFinMission('2009-02-14 22:04:36');
   					$experienceProfessionnelle3->setDebutMission('2009-02-14 22:04:36');
   					//$experienceProfessionnelle3->setVille('Montreal');
   					$experienceProfessionnelle3->setSecteurActivite('Telecommunication');
   					$experienceProfessionnelle3->setLieu('QUEBEC');
   					$experienceProfessionnelle3->setPosteOccupe('Conseiller');
   					$experienceProfessionnelle3->setEntrepriseNom('CGI');
                    $experienceProfessionnelle3->setDescription('A Boring Epistle of a Pioneer And a Mad Scientist who must Escape a Frisbee in The Gulf of Mexico');
            $manager->persist($experienceProfessionnelle3);
            
            $experienceProfessionnelle4 = new ExperienceProfessionnelle();
   					$experienceProfessionnelle4->setCv($this->getReference('cv2'));
   					$experienceProfessionnelle4->setCompetencesAcquise('Microsoft Office (PowerPoint, Word, Excel et Outlook), logiciels de gestion de projet, Certification PMP');
   					//$experienceProfessionnelle4->setDuree('8 ans et 2 mois');
   					$experienceProfessionnelle4->setFinMission('2009-02-14 22:04:36');
   					$experienceProfessionnelle4->setDebutMission('2009-02-14 22:04:36');
   					//$experienceProfessionnelle4->setVille('Ottawa');
   					$experienceProfessionnelle4->setSecteurActivite('Technlogie');
   					$experienceProfessionnelle4->setLieu('ONTARIO');
   					$experienceProfessionnelle4->setPosteOccupe('Analyste application');
   					$experienceProfessionnelle4->setEntrepriseNom('INNOBEC Technologie');
                    $experienceProfessionnelle4->setDescription('A Boring Epistle of a Pioneer And a Mad Scientist who must Escape a Frisbee in The Gulf of Mexico');
            $manager->persist($experienceProfessionnelle4);
            
            $experienceProfessionnelle5 = new ExperienceProfessionnelle();
   					$experienceProfessionnelle5->setCv($this->getReference('cv'));
   					$experienceProfessionnelle5->setCompetencesAcquise('Microsoft Office (PowerPoint, Word, Excel et Outlook), logiciels de gestion de projet, Certification PMP');
   					//$experienceProfessionnelle5->setDuree('3 ans et 3 mois');
   					$experienceProfessionnelle5->setFinMission('2009-02-14 22:04:36');
   					$experienceProfessionnelle5->setDebutMission('2009-02-14 22:04:36');
   					//$experienceProfessionnelle5->setVille('Villeurbanne');
   					$experienceProfessionnelle5->setSecteurActivite('Finance');
   					$experienceProfessionnelle5->setLieu('Rhone');
   					$experienceProfessionnelle5->setPosteOccupe('Responsable application');
   					$experienceProfessionnelle5->setEntrepriseNom('Atos Wordline');
                    $experienceProfessionnelle5->setDescription('A Boring Epistle of a Pioneer And a Mad Scientist who must Escape a Frisbee in The Gulf of Mexico');
            $manager->persist($experienceProfessionnelle5);
            
            
 				
        		$manager->flush();
        		
        		$this->addReference('experienceProfessionnelle', $experienceProfessionnelle);
        		$this->addReference('experienceProfessionnelle1', $experienceProfessionnelle1);
        		$this->addReference('experienceProfessionnelle2', $experienceProfessionnelle2);
        		$this->addReference('experienceProfessionnelle3', $experienceProfessionnelle3);
        		$this->addReference('experienceProfessionnelle4', $experienceProfessionnelle4);
        		
        		
    }
    
	    public function getDependencies()
	    {
	        return array(
	            CvFixtures::class,
	        );
	    }
    
    /** $address-> getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    } **/
}