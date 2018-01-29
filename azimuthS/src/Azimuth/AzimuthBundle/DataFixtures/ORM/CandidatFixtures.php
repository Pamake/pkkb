<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Candidat;
use Azimuth\AzimuthBundle\Entity\OffreEmploi;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CandidatFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {


            $candidat = new Candidat();
    				$candidat->setCandidatTitre('Adjointe administrative');
    				$candidat->setCandidatPrenom('Sophie');
    				$candidat->setCandidatNom('LAPOINTE');
    				$candidat->setCandidatEmail('sophie.lapointe@gmail.com');
    				$candidat->setLangue($this->getReference('langueEN'));
   					$candidat->setCandidatCreateDate(new \DateTime('now'));
    				$candidat->setCandidatActive(1);
    				$candidat->setCandidatLastUpdate(new \DateTime('now'));
    				$candidat->setCandidatCoteDeSecurite(4);
    				$candidat->setCandidatDiplomePlusHaut('DEC');
    				$candidat->setCandidatDateNaissance(new \DateTime('2006-02-14 22:04:36'));
    				$candidat->setAddress($this->getReference('address'));
    				$candidat->setUtilisateur($this->getReference('utilisateur1'));
                    $candidat->setCandidatPhone('680768868518');
                    $candidat->setCandidatPhoneMobile('680768868518');
                   // $candidat->setOffreEmplois($this->getReference('offreemploiBNC'));
    				/**$candidat->setCv($this->getReference('cv'));
    				$candidat->setCandidatoffreemploi($this->getReference('candidatoffre'));
    				$candidat->setLettremotivation($this->getReference('lettremotivation'));
    				$candidat->setOffreEmplois($this->getReference('offreemploi'));*/
            $manager->persist($candidat);
            
            $candidat1 = new Candidat();
    				$candidat1->setCandidatTitre('architecte');
    				$candidat1->setCandidatPrenom('BETTY');
    				$candidat1->setCandidatNom('WHITE');
    				$candidat1->setCandidatEmail('BETTY.WHITE@sakilacustomer.org');
    				$candidat1->setLangue($this->getReference('langueFR'));
   					$candidat1->setCandidatCreateDate(new \DateTime('now'));
    				$candidat1->setCandidatActive(1);
    				$candidat1->setCandidatLastUpdate(new \DateTime('now'));
    				$candidat1->setCandidatCoteDeSecurite(4);
    				$candidat1->setCandidatDiplomePlusHaut('DEC');
    				$candidat1->setCandidatDateNaissance(new \DateTime('2006-02-14 22:04:36'));
    				$candidat1->setAddress($this->getReference('address1'));
    				$candidat1->setUtilisateur($this->getReference('utilisateur2'));
    				$candidat1->setCandidatPhone('680768868518');
                    $candidat1->setCandidatPhoneMobile('680768868518');
                   // $candidat1->setOffreEmplois($this->getReference('offreemploiBNC1'));
    				/**$candidat1->setCandidatoffreemploi($this->getReference('candidatoffre'));
    				$candidat1->setLettremotivation($this->getReference('lettremotivation'));
    				$candidat1->setOffreEmplois($this->getReference('offreemploi'));*/
            $manager->persist($candidat1);
            
            $candidat2 = new Candidat();
    				$candidat2->setCandidatTitre('Responsable Marketing');
    				$candidat2->setCandidatPrenom('NANCY');
    				$candidat2->setCandidatNom('THOMAS');
    				$candidat2->setCandidatEmail('NANCY.THOMAS@sakilacustomer.org');
    				$candidat2->setLangue($this->getReference('langueES'));
   					$candidat2->setCandidatCreateDate(new \DateTime('now'));
    				$candidat2->setCandidatActive(1);
    				$candidat2->setCandidatLastUpdate(new \DateTime('now'));
    				$candidat2->setCandidatCoteDeSecurite(4);
    				$candidat2->setCandidatDiplomePlusHaut('DEC');
    				$candidat2->setCandidatDateNaissance(new \DateTime('2006-02-14 22:04:36'));
    				$candidat2->setAddress($this->getReference('address2'));
    				$candidat2->setUtilisateur($this->getReference('utilisateur3'));
                    $candidat2->setCandidatPhone('680768868518');
                    $candidat2->setCandidatPhoneMobile('680768868518');
                   // $candidat2->setOffreEmplois($this->getReference('offreemploiBNC2'));
    				/**$candidat2->setCv($this->getReference('cv'));
    				$candidat2->setCandidatoffreemploi($this->getReference('candidatoffre'));
    				$candidat2->setLettremotivation($this->getReference('lettremotivation'));
    				$candidat2->setOffreEmplois($this->getReference('offreemploi'));*/
            $manager->persist($candidat2);
            
            $candidat3 = new Candidat();
    				$candidat3->setCandidatTitre('Secretaire');
    				$candidat3->setCandidatPrenom('JENNIFER');
    				$candidat3->setCandidatNom('DAVIS');
    				$candidat3->setCandidatEmail('JENNIFER.DAVIS@sakilacustomer.org');
    				$candidat3->setLangue($this->getReference('langueEN'));
   					$candidat3->setCandidatCreateDate(new \DateTime('now'));
    				$candidat3->setCandidatActive(1);
    				$candidat3->setCandidatLastUpdate(new \DateTime('now'));
    				$candidat3->setCandidatCoteDeSecurite(4);
    				$candidat3->setCandidatDiplomePlusHaut('DEC');
    				$candidat3->setCandidatDateNaissance(new \DateTime('2006-02-15 04:57:20'));
    				$candidat3->setAddress($this->getReference('address3'));
    				$candidat3->setUtilisateur($this->getReference('utilisateur4'));
                    $candidat3->setCandidatPhone('680768868518');
                    $candidat3->setCandidatPhoneMobile('680768868518');
                   // $candidat3->setOffreEmplois($this->getReference('offreemploiBNC1'));
    				/**$candidat3->setCv($this->getReference('cv'));
    				$candidat3->setCandidatoffreemploi($this->getReference('candidatoffre'));
    				$candidat3->setLettremotivation($this->getReference('lettremotivation'));
    				$candidat3->setOffreEmplois($this->getReference('offreemploi'));**/
            $manager->persist($candidat3);
            
            $candidat4 = new Candidat();
    				$candidat4->setCandidatTitre('Developpeur');
    				$candidat4->setCandidatPrenom('LINDA');
    				$candidat4->setCandidatNom('WILLIAMS');
    				$candidat4->setCandidatEmail('LINDA.WILLIAMS@gmail.com');
    				$candidat4->setLangue($this->getReference('langueALL'));
   					$candidat4->setCandidatCreateDate(new \DateTime('now'));
    				$candidat4->setCandidatActive(1);
    				$candidat4->setCandidatLastUpdate(new \DateTime('now'));
    				$candidat4->setCandidatCoteDeSecurite(4);
    				$candidat4->setCandidatDiplomePlusHaut('DEC');
    				$candidat4->setCandidatDateNaissance(new \DateTime('2006-02-14 22:04:36'));
    				$candidat4->setAddress($this->getReference('address4'));
    				$candidat4->setUtilisateur($this->getReference('utilisateur5'));
                    $candidat4->setCandidatPhone('680768868518');
                    $candidat4->setCandidatPhoneMobile('680768868518');
                   // $candidat4->setOffreEmplois($this->getReference('offreemploiBNC4'));
    				/**$candidat4->setCv($this->getReference('cv'));
    				$candidat4->setCandidatoffreemploi($this->getReference('candidatoffre'));
    				$candidat4->setLettremotivation($this->getReference('lettremotivation'));
    				$candidat4->setOffreEmplois($this->getReference('offreemploi'));**/
            $manager->persist($candidat4);
            
            $candidat5 = new Candidat();
    				$candidat5->setCandidatTitre('Ingenieure');
    				$candidat5->setCandidatPrenom('PATRICIA');
    				$candidat5->setCandidatNom('JOHNSON');
    				$candidat5->setCandidatEmail('PATRICIA.JOHNSON@sakilacustomer.org');
    				$candidat5->setLangue($this->getReference('langueFR'));
   					$candidat5->setCandidatCreateDate(new \DateTime('now'));
    				$candidat5->setCandidatActive(1);
    				$candidat5->setCandidatLastUpdate(new \DateTime('now'));
    				$candidat5->setCandidatCoteDeSecurite(4);
    				$candidat5->setCandidatDiplomePlusHaut('DEC');
    				$candidat5->setCandidatDateNaissance(new \DateTime('2006-02-14 22:04:36'));
    				$candidat5->setAddress($this->getReference('address5'));
    				$candidat5->setUtilisateur($this->getReference('utilisateur6'));
                    $candidat5->setCandidatPhone('680768868518');
                    $candidat5->setCandidatPhoneMobile('680768868518');
                    //$candidat5->setOffreEmplois($this->getReference('offreemploiBNC1'));
    				/**$candidat5->setCv($this->getReference('cv'));
    				$candidat5->setCandidatoffreemploi($this->getReference('candidatoffre'));
    				$candidat5->setLettremotivation($this->getReference('lettremotivation'));
    				$candidat5->setOffreEmplois($this->getReference('offreemploi'));*/
            $manager->persist($candidat5);
            
    
            
        		$manager->flush();
        		
        		$this->addReference('candidat', $candidat);
        		$this->addReference('candidat1', $candidat1);
        		$this->addReference('candidat2', $candidat2);
        		$this->addReference('candidat3', $candidat3);
        		$this->addReference('candidat4', $candidat4);
        		$this->addReference('candidat5', $candidat5);
        		
    }
    
    public function getDependencies()
	    {
	        return array(
	            UtilisateursFixtures::class,
	            AddressFixtures::class,
	            LangueFixtures::class,
              
	        );
	    }
    
      /**$address-> getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }**/
}