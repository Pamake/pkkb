<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\OffreEmploi;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class OffreEmploiFixtures extends Fixture implements DependentFixtureInterface
{

    public function  load(ObjectManager $manager)
    {


       
            $offreemploi = new OffreEmploi();
           // $offreemploi->setCandidat($candidat);
    				$offreemploi->setOffreEmploiCreateDate(new \DateTime('now'));
    				$offreemploi->setOffreEmploiPoste('TI systemes informatiques1');
    				$offreemploi->setOffreEmploiEndDate(new \DateTime('2014-09-25 22:31:10'));
                    $offreemploi->setOffreEmploiLastUpdate(new \DateTime('now'));
                    $offreemploi->setOffreEmploiTitre('Analyste Operationnel');
                    $offreemploi->setOffreEmploiHoraire('Temps plein');
                    $offreemploi->setOffreEmploiStatut('Permanent');
                    $offreemploi->setOffreEmploiDomaine('Banque et services financier');
                    $offreemploi->setOffreEmploiReference('AZI20180100');
    				$offreemploi->setOffreEmploiDescriptionPoste('Effectuer le suivi des travaux de production et d entretien selon la documentation
							Assurer l application et le respect des procedures etablies Proceder a l enregistrement des incidents via les outils prevus
							Assurer la resolution des incidents sous votre controle dans les plus brefs delais en contactant les intervenants et effectuer le suivi ou l escalade le cas echeant');
    				$offreemploi->setOffreEmploiQualitesRequises('Debrouillardise, autonomie');
    				$offreemploi->setOffreEmploiConnaissancesTechniques('esprit d analyse et de synthese');
    				$offreemploi->setOffreEmploiRegion('Paris, France');
  					$offreemploi->setRecruteur($this->getReference('recruteur3'));
            $manager->persist($offreemploi);
            
            $offreemploi1 = new OffreEmploi();
           // $offreemploi1->setCandidat($candidat1);
    				$offreemploi1->setOffreEmploiCreateDate(new \DateTime('now'));
    				$offreemploi1->setOffreEmploiPoste('Analyste fonctionnel');
        $offreemploi1->setOffreEmploiEndDate(new \DateTime('2014-09-25 22:31:10'));
        $offreemploi1->setOffreEmploiLastUpdate(new \DateTime('now'));
        $offreemploi1->setOffreEmploiTitre('Analyste financier');
        $offreemploi1->setOffreEmploiHoraire('Temps plein');
        $offreemploi1->setOffreEmploiStatut('Permanent');
        $offreemploi1->setOffreEmploiDomaine('Banque et services financier');
        $offreemploi1->setOffreEmploiReference('AZI20180101');
    				$offreemploi1->setOffreEmploiDescriptionPoste('Effectuer le suivi des travaux de production et d entretien selon la documentation
							Assurer l application et le respect des procedures etablies Proceder a l enregistrement des incidents via les outils prevus
							Assurer la resolution des incidents sous votre controle dans les plus brefs delais en contactant les intervenants et effectuer le suivi ou l escalade le cas echeant');
    				$offreemploi1->setOffreEmploiQualitesRequises('Debrouillardise, autonomie');
    				$offreemploi1->setOffreEmploiConnaissancesTechniques('Connaissance de la methodologie Agile et esprit d analyse et de synthese');
    				$offreemploi1->setOffreEmploiRegion('Gatineau, Quebec');
  					$offreemploi1->setRecruteur($this->getReference('recruteur1'));
            $manager->persist($offreemploi1);
            
            $offreemploi2 = new OffreEmploi();
            //$offreemploi2->setCandidat($candidat2);
    				$offreemploi2->setOffreEmploiCreateDate(new \DateTime('now'));
    				$offreemploi2->setOffreEmploiPoste('Progarmmeur Java');
        $offreemploi2->setOffreEmploiEndDate(new \DateTime('2014-09-25 22:31:10'));
        $offreemploi2->setOffreEmploiLastUpdate(new \DateTime('now'));
        $offreemploi2->setOffreEmploiTitre('Analyste Operationnel');
        $offreemploi2->setOffreEmploiHoraire('Temps plein');
        $offreemploi2->setOffreEmploiStatut('Permanent');
        $offreemploi2->setOffreEmploiDomaine('Banque et services financier');
        $offreemploi2->setOffreEmploiReference('AZI20180102');
    				$offreemploi2->setOffreEmploiDescriptionPoste('Effectuer le suivi des travaux de production et d entretien selon la documentation
							Assurer l application et le respect des procedures etablies Proceder a l enregistrement des incidents via les outils prevus
							Assurer la resolution des incidents sous votre controle dans les plus brefs delais en contactant les intervenants et effectuer le suivi ou l escalade le cas echeant');
    				$offreemploi2->setOffreEmploiQualitesRequises('Debrouillardise, autonomie');
    				$offreemploi2->setOffreEmploiConnaissancesTechniques('Connaissance de la methodologie Agile et du DevOps de synthese');
    				$offreemploi2->setOffreEmploiRegion('Montreal, Quebec');
  					$offreemploi2->setRecruteur($this->getReference('recruteur2'));
            $manager->persist($offreemploi2);
            
            $offreemploi3 = new OffreEmploi();
            //$offreemploi3->setCandidat($candidat3);
    				$offreemploi3->setOffreEmploiCreateDate(new \DateTime('now'));
    				$offreemploi3->setOffreEmploiPoste('Operateur de soutien');
        $offreemploi3->setOffreEmploiEndDate(new \DateTime('2014-09-25 22:31:10'));
        $offreemploi3->setOffreEmploiLastUpdate(new \DateTime('now'));
        $offreemploi3->setOffreEmploiTitre('Analyste Operationnel');
        $offreemploi3->setOffreEmploiHoraire('Temps plein');
        $offreemploi3->setOffreEmploiStatut('Permanent');
        $offreemploi3->setOffreEmploiDomaine('Banque et services financier');
        $offreemploi3->setOffreEmploiReference('AZI20180103');
    				$offreemploi3->setOffreEmploiDescriptionPoste('Effectuer le suivi des travaux de production et d entretien selon la documentation
							Assurer l application et le respect des procedures etablies Proceder a l enregistrement des incidents via les outils prevus
							Assurer la resolution des incidents sous votre controle dans les plus brefs delais en contactant les intervenants et effectuer le suivi ou l escalade le cas echeant');
    				$offreemploi3->setOffreEmploiQualitesRequises('Aptitude relationnelles,Debrouillardise, autonomie');
    				$offreemploi3->setOffreEmploiConnaissancesTechniques('esprit d analyse et de synthese');
    				$offreemploi3->setOffreEmploiRegion('Montreal, Quebec');
  					$offreemploi3->setRecruteur($this->getReference('recruteur1'));
            $manager->persist($offreemploi3);
            
            
            
             $offreemploi4 = new OffreEmploi();
            //$offreemploi3->setCandidat($candidat3);
    				$offreemploi4->setOffreEmploiCreateDate(new \DateTime('now'));
    				$offreemploi4->setOffreEmploiPoste('Directeur de systemes informatiques');
        $offreemploi4->setOffreEmploiEndDate(new \DateTime('2014-09-25 22:31:10'));
        $offreemploi4->setOffreEmploiLastUpdate(new \DateTime('now'));
        $offreemploi4->setOffreEmploiTitre('Analyste Operationnel');
        $offreemploi4->setOffreEmploiHoraire('Temps plein');
        $offreemploi4->setOffreEmploiStatut('Temporaire');
        $offreemploi4->setOffreEmploiDomaine('Banque et services financier');
        $offreemploi4->setOffreEmploiReference('AZI20180104');
    				$offreemploi4->setOffreEmploiDescriptionPoste('Effectuer le suivi des travaux de production et d entretien selon la documentation
							Assurer l application et le respect des procedures etablies Proceder a l enregistrement des incidents via les outils prevus
							Assurer la resolution des incidents sous votre controle dans les plus brefs delais en contactant les intervenants et effectuer le suivi ou l escalade le cas echeant');
    				$offreemploi4->setOffreEmploiQualitesRequises('Aptitude relationnelles,Debrouillardise, autonomie');
    				$offreemploi4->setOffreEmploiConnaissancesTechniques('esprit d analyse et de synthese');
    				$offreemploi4->setOffreEmploiRegion('Quebec, Quebec');
  					$offreemploi4->setRecruteur($this->getReference('recruteur2'));
            $manager->persist($offreemploi4);


        // create 5 OffreEmplois
        for ($i = 0; $i < 5; $i++) {

            $offreemploi5 = new OffreEmploi();
            $offreemploi5->setOffreEmploiCreateDate(new \DateTime('now'));
            $offreemploi5->setOffreEmploiPoste('Directeur de systemes informatiques'.$i);
            $offreemploi5->setOffreEmploiEndDate(new \DateTime('2014-09-25 22:31:10'));
            $offreemploi5->setOffreEmploiLastUpdate(new \DateTime('now'));
            $offreemploi5->setOffreEmploiTitre('Analyste Operationnel');
            $offreemploi5->setOffreEmploiHoraire('Temps plein');
            $offreemploi5->setOffreEmploiStatut('Temporaire');
            $offreemploi5->setOffreEmploiDomaine('Banque et services financier');
            $offreemploi5->setOffreEmploiReference('AZI2018011'.$i);
            $offreemploi5->setOffreEmploiDescriptionPoste('Effectuer le suivi des travaux de production et d entretien selon la documentation
							Assurer l application et le respect des procedures etablies Proceder a l enregistrement des incidents via les outils prevus
							Assurer la resolution des incidents sous votre controle dans les plus brefs delais en contactant les intervenants et effectuer le suivi ou l escalade le cas echeant');
            $offreemploi5->setOffreEmploiQualitesRequises('Aptitude relationnelles,Debrouillardise, autonomie');
            $offreemploi5->setOffreEmploiConnaissancesTechniques('esprit d analyse et de synthese');
            $offreemploi5->setOffreEmploiRegion('Quebec, Quebec');
            $offreemploi5->setRecruteur($this->getReference('recruteur2'));
            $manager->persist($offreemploi5);

        }
            
    
        		$manager->flush();
        		
        		$this->addReference('offreemploiBNC', $offreemploi);
        		$this->addReference('offreemploiBNC1', $offreemploi1);
        		$this->addReference('offreemploiBNC2', $offreemploi2);
        		$this->addReference('offreemploiBNC3', $offreemploi3);
        		$this->addReference('offreemploiBNC4', $offreemploi4);
    }

public function getDependencies()
    {
        return array(
            RecruteurFixtures::class,
        );
    }
    
    /**  $address-> getOrder()
    {
        return 18; // the order in which fixtures will be loaded
    } **/
}

