<?php
namespace Azimuth\PagesBundle\DataFixtures\ORM;

use Azimuth\PagesBundle\Entity\Pages;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PagesFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {


        $page1 = new Pages();
        $page1->setCategories($this->getReference('categories'));
        $page1->setTitre('Mentions légales');
        $page1->setDescription('Mentions légales');
        $page1->setContent('Éditeur du site :
                Azimuth Management Consultants and Partners Inc. (ci-après «AZIMUTH»)
                132, rue Saint-Antoine,
                Bureau 1 
                Gatineau (Québec), J8T 3M4, Canada
                Directeurs de la publication :
                Bansaari KOUSSEY KOUMBA, directeur, Communications 
                François R. JOLY, directeur, Communications');
        $page1->setDateCreated(new \DateTime('now'));
        $page1->setLastUpdate(new \DateTime('2016-10-24 22:31:10'));
        $manager->persist($page1);


        $page2 = new Pages();
        $page2->setCategories($this->getReference('categories'));
        $page2->setTitre('Disponibilité du site Web');
        $page2->setDescription('Disponibilité du site Web');
        $page2->setContent('L\'accès au site de la société AZIMUTH est totalement gratuit et le restera, à l\'exception des frais d\'accès et d\'utilisation du réseau de télécommunication qui restent à la charge de l\'internaute. 
Vous reconnaissez (i) qu’il est techniquement impossible de fournir le Site exempt de tout défaut et que AZIMUTH ne peut s’y engager; (ii) que des défauts peuvent conduire à l’indisponibilité temporaire du Site; et que (iii) le fonctionnement du Site peut être affecté par des événements et/ou des éléments qu’AZIMUTH ne contrôle pas, tels que par exemple, des moyens de transmission et de communication entre vous et AZIMUTH et entre AZIMUTH et d’autres réseaux. 
AZIMUTH et/ou ses fournisseurs pourra(ont), à tout moment, modifier ou interrompre, temporairement ou de façon permanente, tout ou partie du Site pour effectuer des opérations de maintenance et/ou effectuer des améliorations et/ou des modifications sur le Site. AZIMUTH n’est pas responsable de toute modification, suspension ou interruption du Site.');
        $page2->setDateCreated(new \DateTime('now'));
        $page2->setLastUpdate(new \DateTime('2016-10-24 22:31:10'));
        $manager->persist($page2);


        $page3 = new Pages();
        $page3->setCategories($this->getReference('categories'));
        $page3->setTitre('Propriété intellectuelle');
        $page3->setDescription('Propriété intellectuelle');
        $page3->setContent('Ce site appartient et est exploité par AZIMUTH Management Consultants and Partners Inc.. La présentation et chacun des éléments, y compris les marques, logos et noms de domaine, apparaissant sur le site www.azimuth-consultants.ca (ci-après « le Site »), sont protégés par les lois en vigueur sur la propriété intellectuelle, et appartiennent à AZIMUTH, ou font l’objet d’une autorisation d’utilisation. 
Aucun élément composant le Site ne peut être copié, reproduit, réédité, dénaturé, modifié, chargé, transmis ou distribué de quelque manière que ce soit, sous quelque support que ce soit, de façon partielle ou intégrale, sans l’autorisation écrite et préalable d’AZIMUTH, à l’exception d’une stricte utilisation pour les besoins de la presse et sous réserve du respect des droits de propriété intellectuelle et de tout autre droit de propriété dont il est fait mention. Seule la copie à usage privé est autorisée pour votre usage personnel, privé et non-commercial. La mention suivante doit notamment apparaître sur toute copie autorisée de tout ou partie du contenu du Site : « COPYRIGHT © 2016 AZIMUTH MANAGEMENT CONSULTANTS AND PARTNERS. TOUS DROITS RÉSERVÉS. » 
Toute utilisation autorisée des éléments composant ou figurant dans le site doit se faire sans dénaturation, modification ou altération de quelque manière que ce soit. 
AZIMUTH se réserve le droit de poursuivre tout acte de contrefaçon de ses droits de propriété intellectuelle selon les lois applicables en vigueur dans la province de Québec');
        $page3->setDateCreated(new \DateTime('now'));
        $page3->setLastUpdate(new \DateTime('2016-10-24 22:31:10'));
        $manager->persist($page3);


        $page4 = new Pages();
        $page4->setCategories($this->getReference('categories'));
        $page4->setTitre('Nature des information');
        $page4->setDescription('Nature des information');
        $page4->setContent('Le Site pourra éventuellement vous proposer des opinions émises par des experts consultés dans un domaine particulier en rapport avec le contenu du Site ou des extraits d’articles de presse. De telles informations représentent uniquement l’opinion de l’expert consulté ou du journal, et pas nécessairement l’opinion d’AZIMUTH. De tels experts ne sont pas salariés d’AZIMUTH et ne reçoivent aucune rémunération en échange de l’utilisation de leur opinion par AZIMUTH. AZIMUTH n’est pas responsable de l’exactitude et de l’exhaustivité des informations et opinions contenues dans de tels éléments. Les opinions des experts reflètent une vision personnelle et ne devront jamais être interprétées comme représentant l’opinion ou la responsabilité d’AZIMUTH.');
        $page4->setDateCreated(new \DateTime('now'));
        $page4->setLastUpdate(new \DateTime('2016-10-24 22:31:10'));
        $manager->persist($page4);

        $page5 = new Pages();
        $page5->setCategories($this->getReference('categories'));
        $page5->setTitre('Liens vers d’autres sites');
        $page5->setDescription('Liens vers d’autres sites');
        $page5->setContent('La responsabilité d’AZIMUTH ne saurait être engagée au titre d’un site tiers auquel vous auriez accès via le site Web d’AZIMUTH. Nous ne disposons d’aucun moyen de contrôle du contenu de ces sites tiers qui demeurent totalement indépendants d’AZIMUTH. De surcroît, l’existence d’un lien entre le Site et un site tiers ne signifie en aucun cas qu’AZIMUTH approuve à quelque titre que ce soit le contenu de ce site et a fortiori l’usage qui pourrait en être fait. 
En outre, il vous incombe de prendre les précautions nécessaires pour éviter toute contamination du Site par notamment par un ou plusieurs virus, Cheval de Troie ou tout autre parasite. 
Des sites externes peuvent contenir des liens hypertextes pointant vers le Site. Un tel lien ne pourra être installé sans l’accord préalable et exprès d’AZIMUTH. En tout état de cause, AZIMUTH n’est aucunement responsable de l’indisponibilité de tels sites et AZIMUTH n’examine, ne contrôle, n’approuve ni n’est responsable des contenus, publicités, produits ou autres éléments disponibles sur ou via ces sites.');
        $page5->setDateCreated(new \DateTime('now'));
        $page5->setLastUpdate(new \DateTime('2016-10-24 22:31:10'));
        $manager->persist($page5);


        $page6 = new Pages();
        $page6->setCategories($this->getReference('categories'));
        $page6->setTitre('Politique de confidentialité');
        $page6->setDescription('Politique de confidentialité');
        $page6->setContent('6.1 AZIMUTH ne divulguera pas à des tiers les données personnelles vous concernant que vous pourriez lui communiquer par le moyen de la messagerie électronique. Elles ne seront utilisées que dans le but de vous répondre le plus efficacement possible. Conformément aux lois relatives à la protection des personnes physiques à l’égard des traitements de données à caractère personnel applicables dans la province de Québec, vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données personnelles qui vous concernent. Pour cela, il suffit d’en faire la demande :
En ligne : info@azimuth-consultants.com ou 
Par voie postale : Azimuth, 1-132, Rue Saint-Antoine, Gatineau (Québec) J8T 3M4, Canada. 
6.2 Le Site n’est pas destiné à recevoir de votre part des informations à caractère confidentiel. En conséquence et à l’exception des données personnelles visées ci-dessus, toute information, quelle qu’en soit la forme – document, donnée, graphique, question, suggestion, concept, remarque, ou autre –, que vous nous communiquerez sur le Site ne sera en aucun cas tenue pour confidentielle. En conséquence, sa simple transmission par vos soins nous confère le droit de l’utiliser, de la reproduire, de la diffuser, de la modifier ou de la transmettre dans le but de traiter votre demande.');
        $page6->setDateCreated(new \DateTime('now'));
        $page6->setLastUpdate(new \DateTime('2016-10-24 22:31:10'));
        $manager->persist($page6);

        $page7 = new Pages();
        $page7->setCategories($this->getReference('categories'));
        $page7->setTitre('Limitations de responsabilité');
        $page7->setDescription('Limitations de responsabilité');
        $page7->setContent('AZIMUTH s’efforce d’assurer au mieux de ses possibilités, l’exactitude et la mise à jour des informations diffusées sur le Site, dont elle se réserve le droit de corriger, à tout moment et sans préavis, le contenu. Toutefois, AZIMUTH ne peut garantir l’exactitude, la précision, la mise à jour ou l’exhaustivité des informations mises à la disposition sur le Site. En conséquence, et à l’exception des dommages directs résultant d’une faute lourde ou intentionnelle d’AZIMUTH, ce dernier décline toute responsabilité :

pour toute imprécision, inexactitude ou omission portant sur des informations disponibles sur le Site;
pour tous dommages résultant d’une intrusion frauduleuse d’un tiers, ayant entraîné une modification des informations ou éléments mis à la disposition sur le Site;
et plus généralement pour tous dommages, directs ou indirects, quelles qu’en soit les causes, origines, natures ou conséquences, quand bien même AZIMUTH aurait été avisée de la possibilité de tels dommages, provoqués à raison (i) de l’accès de quiconque au Site ou de l’impossibilité d’y accéder, (ii) de l’utilisation du Site, incluant toutes détériorations ou virus qui pourraient infecter votre équipement informatique ou tout autre bien, et/ou (iii) du crédit accordé à une quelconque information provenant directement ou indirectement du Site.
Les éléments du Site ou de tout autre site sont fournis en l’état sans aucune garantie d’aucune sorte, implicite ou explicite. AZIMUTH n’offre aucune garantie, implicite ou explicite, relative, sans limitation, à leur valeur marchande ou leur adéquation à une fin donnée.');
        $page7->setDateCreated(new \DateTime('now'));
        $page7->setLastUpdate(new \DateTime('2016-10-24 22:31:10'));
        $manager->persist($page7);


        $page8 = new Pages();
        $page8->setCategories($this->getReference('categories'));
        $page8->setTitre('Dispositions juridictionnelles');
        $page8->setDescription('Dispositions juridictionnelles');
        $page8->setContent('Le Site et son contenu sont régis par les lois du Canada, et tout litige éventuel s’y rapportant sera soumis à la compétence des tribunaux de la province de Québec.');
        $page8->setDateCreated(new \DateTime('now'));
        $page8->setLastUpdate(new \DateTime('2016-10-24 22:31:10'));
        $manager->persist($page8);




        $manager->flush();


    }

    public function getDependencies()
    {
        return array(
            CategoriesFixtures::class,

        );
    }

}