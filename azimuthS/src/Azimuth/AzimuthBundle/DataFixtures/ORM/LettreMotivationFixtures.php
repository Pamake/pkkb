<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\LettreMotivation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class LettreMotivationFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       
            $lettreMotivation = new LettreMotivation();
   					$lettreMotivation->setCandidat($this->getReference('candidat'));
   					$lettreMotivation->setLettreMotivationTexte('A 28 ans, diplome d E.S.C. et titulaire dun D.U.T. Technique de Commercialisation,
j occupe actuellement un poste d Attache Commercial.Passionne par la vente et le contact client, je souhaite maintenant mettre en valeur mon
savoir faire et mon interet pour l entreprise dans une mission aupres d une clientele de decideurs.
Autonome, ouvert d esprit, je sais que la reussite d une societe passe par la satisfaction
de ses clients. Sportif, je sais m engager entierement pour reussir.Je souhaite vous rencontrer afin de vous presenter mon interet pour ce poste pour
lequel j attends une remuneration de X KF.Je suis interesse par le poste pour votre agence d Ales.
Dans l attente de vous rencontrer, veuillez agreer, Monsieur, mes sinceres salutations.
');
            $manager->persist($lettreMotivation);
            
            $lettreMotivation1 = new LettreMotivation();
   					$lettreMotivation1->setCandidat($this->getReference('candidat1'));
   					$lettreMotivation1->setLettreMotivationTexte('A 28 ans, diplome d E.S.C. et titulaire dun D.U.T. Technique de Commercialisation,
j occupe actuellement un poste d Attache Commercial.Passionne par la vente et le contact client, je souhaite maintenant mettre en valeur mon
savoir faire et mon interet pour l entreprise dans une mission aupres d une clientele de decideurs.
Autonome, ouvert d esprit, je sais que la reussite d une societe passe par la satisfaction
de ses clients. Sportif, je sais m engager entierement pour reussir.Je souhaite vous rencontrer afin de vous presenter mon interet pour ce poste pour
lequel j attends une remuneration de X KF.Je suis interesse par le poste pour votre agence d Ales.
Dans l attente de vous rencontrer, veuillez agreer, Monsieur, mes sinceres salutations.
');
            $manager->persist($lettreMotivation1);
            
            $lettreMotivation2 = new LettreMotivation();
   					$lettreMotivation2->setCandidat($this->getReference('candidat3'));
   					$lettreMotivation2->setLettreMotivationTexte('A 28 ans, diplome d E.S.C. et titulaire dun D.U.T. Technique de Commercialisation,
j occupe actuellement un poste d Attache Commercial.Passionne par la vente et le contact client, je souhaite maintenant mettre en valeur mon
savoir faire et mon interet pour l entreprise dans une mission aupres d une clientele de decideurs.
Autonome, ouvert d esprit, je sais que la reussite d une societe passe par la satisfaction
de ses clients. Sportif, je sais m engager entierement pour reussir.Je souhaite vous rencontrer afin de vous presenter mon interet pour ce poste pour
lequel j attends une remuneration de X KF.Je suis interesse par le poste pour votre agence d Ales.
Dans l attente de vous rencontrer, veuillez agreer, Monsieur, mes sinceres salutations.
');
            $manager->persist($lettreMotivation2);
            
            $lettreMotivation3 = new LettreMotivation();
   					$lettreMotivation3->setCandidat($this->getReference('candidat2'));
   					$lettreMotivation3->setLettreMotivationTexte('A 28 ans, diplome d E.S.C. et titulaire dun D.U.T. Technique de Commercialisation,
j occupe actuellement un poste d Attache Commercial.Passionne par la vente et le contact client, je souhaite maintenant mettre en valeur mon
savoir faire et mon interet pour l entreprise dans une mission aupres d une clientele de decideurs.
Autonome, ouvert d esprit, je sais que la reussite d une societe passe par la satisfaction
de ses clients. Sportif, je sais m engager entierement pour reussir.Je souhaite vous rencontrer afin de vous presenter mon interet pour ce poste pour
lequel j attends une remuneration de X KF.Je suis interesse par le poste pour votre agence d Ales.
Dans l attente de vous rencontrer, veuillez agreer, Monsieur, mes sinceres salutations.
');
            $manager->persist($lettreMotivation3);

        		$manager->flush();
        		
        		$this->addReference('lettreMotivation', $lettreMotivation);
        		$this->addReference('lettreMotivation1', $lettreMotivation1);
        		$this->addReference('lettreMotivation2', $lettreMotivation2);
        		$this->addReference('lettreMotivation3', $lettreMotivation3);
        		
        		
    }
    
    
    public function getDependencies()
    {
        return array(
            CandidatFixtures::class,
        );
    }
    
    /**
     $address-> getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    } */
}