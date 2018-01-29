<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\UtilisateursBundle\Entity\Utilisateurs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
//use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UtilisateursFixtures extends Fixture implements ContainerAwareInterface
{
    private $container;
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
   /** private $encoder;

		public function __construct(UserPasswordEncoderInterface $encoder)
		{
		    $this->encoder = $encoder;
		} **/
		
	
    public function load(ObjectManager $manager)
    {
        $utilisateur1 = new Utilisateurs();
        $utilisateur1->setUsername('benjamin');
        $utilisateur1->setEmail('benjamin@gmail.com');
        $utilisateur1->setEnabled(1);
        //$password1 = $this->encoder->encodePassword($utilisateur1, 'poupou');
    		//$utilisateur1->setPassword($password1);
        $utilisateur1->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('poupou', $utilisateur1->getSalt()));
        $manager->persist($utilisateur1);
        
        $utilisateur2 = new Utilisateurs();
        $utilisateur2->setUsername('mathilde');
        $utilisateur2->setEmail('mathilde@gmail.com');
        $utilisateur2->setEnabled(1);
       // $password2 = $this->encoder->encodePassword($utilisateur2, 'mathilde');
    		//$utilisateur2->setPassword($password2);
        $utilisateur2->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur2)->encodePassword('mathilde', $utilisateur2->getSalt()));
        $manager->persist($utilisateur2);
        
        $utilisateur3 = new Utilisateurs();
        $utilisateur3->setUsername('pauline');
        $utilisateur3->setEmail('pauline@gmail.com');
        $utilisateur3->setEnabled(1);
        //$password3 = $this->encoder->encodePassword($utilisateur3, 'pauline');
    		//$utilisateur3->setPassword($password3);
        $utilisateur3->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur3)->encodePassword('pauline', $utilisateur3->getSalt()));
        $manager->persist($utilisateur3);
        
        $utilisateur4 = new Utilisateurs();
        $utilisateur4->setUsername('tiffany');
        $utilisateur4->setEmail('tiffany@gmail.com');
        $utilisateur4->setEnabled(1);
        //$password4 = $this->encoder->encodePassword($utilisateur4, 'tiffany');
    		//$utilisateur4->setPassword($password4);
        $utilisateur4->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur4)->encodePassword('tiffany', $utilisateur4->getSalt()));
        $manager->persist($utilisateur4);
         
        $utilisateur5 = new Utilisateurs();
        $utilisateur5->setUsername('dominique');
        $utilisateur5->setEmail('dominique@gmail.com');
        $utilisateur5->setEnabled(1);
        //$password5 = $this->encoder->encodePassword($utilisateur5, 'dominique');
    		//$utilisateur5->setPassword($password5);
        $utilisateur5->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur5)->encodePassword('dominique', $utilisateur5->getSalt()));
        $manager->persist($utilisateur5);
        
        $utilisateur6 = new Utilisateurs();
        $utilisateur6->setUsername('patrick');
        $utilisateur6->setEmail('patrick.kenfack@gmail.com');
        $utilisateur6->setEnabled(1);
        //$password5 = $this->encoder->encodePassword($utilisateur5, 'dominique');
    		//$utilisateur5->setPassword($password5);
        $utilisateur6->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur6)->encodePassword('dominique', $utilisateur6->getSalt()));
        $manager->persist($utilisateur6);
        
        // create 20 Utilsateurs
        for ($i = 0; $i < 20; $i++) {
        	
        	 $utilisateur7 = new Utilisateurs();
        	 $utilisateur7->setUsername('patrick'.$i);
        	 $utilisateur7->setEmail('patrick.kenfack@gmail.com'.$i);
        	 $utilisateur7->setEnabled(1);
        	 $utilisateur7->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur7)->encodePassword('pamake'.$i, $utilisateur7->getSalt()));
        	 $manager->persist($utilisateur7); 
       
        	 // $this->addReference('utilisateur7'.$i, $utilisateur7+.$i);
        	}
           
        
        $manager->flush();
        
        $this->addReference('utilisateur1', $utilisateur1);
        $this->addReference('utilisateur2', $utilisateur2);
        $this->addReference('utilisateur3', $utilisateur3);
        $this->addReference('utilisateur4', $utilisateur4);
        $this->addReference('utilisateur5', $utilisateur5);
        $this->addReference('utilisateur6', $utilisateur6);
    }
    
}