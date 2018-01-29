<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\ConnaissancesInformatiques;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class ConnaissancesInformatiquesFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       
            $connaissancesInformatiques = new ConnaissancesInformatiques();
   					$connaissancesInformatiques->setCv($this->getReference('cv'));
   					$connaissancesInformatiques->setProgrammation('Java / J2EE / SQL,  JavaScript / angular,  PAAS, Big Data, BPM, SOA, Event-Based Architectures, ESB, BI/ETL, MDM');
   					$connaissancesInformatiques->setSystemesExploitations('Linux, Windows');
   					$connaissancesInformatiques->setLangages('FRANCAIS,, ITALIEN, ANGLAIS, ESPAGNOL');
   					$connaissancesInformatiques->setLogicielsMaitrisse('IntelliJ or Eclipse IDE');
            $manager->persist($connaissancesInformatiques);
            
            $connaissancesInformatiques1 = new ConnaissancesInformatiques();
   					$connaissancesInformatiques1->setCv($this->getReference('cv1'));
   					$connaissancesInformatiques1->setProgrammation('Java / J2EE / SQL,  JavaScript / angular,  PAAS, Big Data, BPM, SOA, Event-Based Architectures, ESB, BI/ETL, MDM');
   					$connaissancesInformatiques1->setSystemesExploitations('Linux, Windows');
   					$connaissancesInformatiques1->setLangages('FRANCAIS, ANGLAIS, ESPAGNOL');
   					$connaissancesInformatiques1->setLogicielsMaitrisse('IntelliJ or Eclipse IDE');
            $manager->persist($connaissancesInformatiques1);
            
            $connaissancesInformatiques2 = new ConnaissancesInformatiques();
   					$connaissancesInformatiques2->setCv($this->getReference('cv2'));
   					$connaissancesInformatiques2->setProgrammation('Java / J2EE / SQL,  JavaScript / angular,  PAAS, Big Data, BPM, SOA, Event-Based Architectures, ESB, BI/ETL, MDM');
   					$connaissancesInformatiques2->setSystemesExploitations('Linux, Windows');
   					$connaissancesInformatiques2->setLangages('FRANCAIS, ARABE, ANGLAIS, ESPAGNOL');
   					$connaissancesInformatiques2->setLogicielsMaitrisse('IntelliJ or Eclipse IDE');
            $manager->persist($connaissancesInformatiques2);
            
            $connaissancesInformatiques3 = new ConnaissancesInformatiques();
   					$connaissancesInformatiques3->setCv($this->getReference('cv3'));
   					$connaissancesInformatiques3->setProgrammation('Java / J2EE / SQL,  JavaScript / angular,  PAAS, Big Data, BPM, SOA, Event-Based Architectures, ESB, BI/ETL, MDM');
   					$connaissancesInformatiques3->setSystemesExploitations('Linux, Windows');
   					$connaissancesInformatiques3->setLangages('FRANCAIS,, ANGLAIS, ESPAGNOL');
   					$connaissancesInformatiques3->setLogicielsMaitrisse('IntelliJ or Eclipse IDE');
            $manager->persist($connaissancesInformatiques3);
            
            $connaissancesInformatiques4 = new ConnaissancesInformatiques();
   					$connaissancesInformatiques4->setCv($this->getReference('cv4'));
   					$connaissancesInformatiques4->setProgrammation('Java / J2EE / SQL,  JavaScript / angular,  PAAS, Big Data, BPM, SOA, Event-Based Architectures, ESB, BI/ETL, MDM');
   					$connaissancesInformatiques4->setSystemesExploitations('Linux, Windows');
   					$connaissancesInformatiques4->setLangages('FRANCAIS, ESPAGNOL');
   					$connaissancesInformatiques4->setLogicielsMaitrisse('IntelliJ or Eclipse IDE');
            $manager->persist($connaissancesInformatiques4);

        		$manager->flush();
        		
        		$this->addReference('connaissancesInformatiques', $connaissancesInformatiques);
        		$this->addReference('connaissancesInformatiques1', $connaissancesInformatiques1);
        		$this->addReference('connaissancesInformatiques2', $connaissancesInformatiques2);
        		$this->addReference('connaissancesInformatiques3', $connaissancesInformatiques3);
        		$this->addReference('connaissancesInformatiques4', $connaissancesInformatiques4);
        		
        		
        		
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