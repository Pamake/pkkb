<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\NiveauScolarite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class NiveauScolariteFixtures extends Fixture
{

    public function load(ObjectManager $manager) 
    {

        $niveauScolarite = new NiveauScolarite();
        $niveauScolarite->setNomDiplome('INCONU');
        $manager->persist($niveauScolarite);

        $niveauScolarite1 = new NiveauScolarite();
        $niveauScolarite1->setNomDiplome('Diplome etude collegiales');
        $manager->persist($niveauScolarite1);

        $niveauScolarite2 = new NiveauScolarite();
        $niveauScolarite2->setNomDiplome('Diplome etude secondaires');
        $manager->persist($niveauScolarite2);

        $niveauScolarite3 = new NiveauScolarite();
        $niveauScolarite3->setNomDiplome('Diplome universtaire');
        $manager->persist($niveauScolarite3);

        $niveauScolarite4 = new NiveauScolarite();
        $niveauScolarite4->setNomDiplome('Baccalaureat');
        $manager->persist($niveauScolarite4);

        $niveauScolarite5 = new NiveauScolarite();
        $niveauScolarite5->setNomDiplome('Maitrise');
        $manager->persist($niveauScolarite5);

        $niveauScolarite6 = new NiveauScolarite();
        $niveauScolarite6->setNomDiplome('Doctorat');
        $manager->persist($niveauScolarite6);

        $manager->flush();
        		
        		
    }
    

}