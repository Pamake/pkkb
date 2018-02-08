<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\NiveauLinguistique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class NiveauLinguistiquesFixtures extends Fixture
{

    public function load(ObjectManager $manager) 
    {
       
        $niveau = new NiveauLinguistique();
        $niveau->setNameNiveau('Niveau 0 (niveau veritablement debutant)');
        $this->addReference('niveau', $niveau);
        $manager->persist($niveau);


        $niveau1 = new NiveauLinguistique();
        $niveau1->setNameNiveau('Niveau 1 (niveau debutant)');

        $this->addReference('niveau1', $niveau1);
        $manager->persist($niveau1);

        $niveau2 = new NiveauLinguistique();
        $niveau2->setNameNiveau('Niveau 2 (niveau debutant avance)');

        $this->addReference('niveau2', $niveau2);
        $manager->persist($niveau2);

        $niveau3 = new NiveauLinguistique();
        $niveau3->setNameNiveau('Niveau 3 (niveau intermediaire)');

        $this->addReference('niveau3', $niveau3);
        $manager->persist($niveau3);

        $niveau4 = new NiveauLinguistique();
        $niveau4->setNameNiveau('Niveau 4 (niveau fonctionel)');

        $this->addReference('niveau4', $niveau4);
        $manager->persist($niveau4);

        $niveau5 = new NiveauLinguistique();
        $niveau5->setNameNiveau('Niveau 5 (niveau pleinement foncionnel)');

        $this->addReference('niveau5', $niveau5);
        $manager->persist($niveau5);

        $niveau6 = new NiveauLinguistique();
        $niveau6->setNameNiveau('Niveau 6 (biliguisme presque parfait)');
        $this->addReference('niveau6', $niveau6);
        $manager->persist($niveau6);


            $manager->flush();
        		
        		
    }
    
   /** public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    } **/
}