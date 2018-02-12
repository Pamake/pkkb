<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\TypeEmploi;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TypeEmploiFixtures extends Fixture
{

    public function load(ObjectManager $manager) 
    {
        $typeEmploi = new TypeEmploi();
        $typeEmploi->setNomTypeEmploi('Affectation de perfectioonement');
        $manager->persist($typeEmploi);

        $typeEmploi = new TypeEmploi();
        $typeEmploi->setNomTypeEmploi('Coop');
        $manager->persist($typeEmploi);

        $typeEmploi = new TypeEmploi();
        $typeEmploi->setNomTypeEmploi('Etudiant');
        $manager->persist($typeEmploi);

        $typeEmploi = new TypeEmploi();
        $typeEmploi->setNomTypeEmploi('Stage');
        $manager->persist($typeEmploi);

        $typeEmploi = new TypeEmploi();
        $typeEmploi->setNomTypeEmploi('Sur appel');
        $manager->persist($typeEmploi);

        $typeEmploi = new TypeEmploi();
        $typeEmploi->setNomTypeEmploi('Temps partiel');
        $manager->persist($typeEmploi);

        $typeEmploi = new TypeEmploi();
        $typeEmploi->setNomTypeEmploi('Temps plein');
        $manager->persist($typeEmploi);


        $manager->flush();
        		
        		
    }
    
   /** public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    } **/
}