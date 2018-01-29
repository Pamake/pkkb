<?php

namespace Azimuth\AzimuthBundle\Controller;

use Azimuth\AzimuthBundle\Entity\Address;
use Azimuth\AzimuthBundle\Entity\Candidat;
use Azimuth\AzimuthBundle\Entity\Pays;
use Azimuth\AzimuthBundle\Entity\Ville;
use Azimuth\AzimuthBundle\Entity\Langue;
use Azimuth\AzimuthBundle\Form\MessagesType;
use Azimuth\UtilisateursBundle\Entity\Utilisateurs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Azimuth\AzimuthBundle\Form\CandidatType;
use Symfony\Component\HttpFoundation\Request;

class CandidatsController extends Controller
{



    public function candidatAction()
    {
        $form = $this->createForm(CandidatType::class);
        return $this->render('AzimuthBundle:Default:Candidat/modulesUsed/candidat.html.twig', array('form' => $form->createView()));
    }

    public function candidatInscriptionAction()
    {
        return $this->render('AzimuthBundle:Default:Candidat/layout/candidatInscription.html.twig');
    }



    public function candidatProfileAction()
    {

        $user = $this->getUser();

        $candidat = null;
        $em = $this->getDoctrine()->getManager();
        $candidat = $em->getRepository('AzimuthBundle:Candidat')->findOneByUser($user.Id);
        $form = $this->createForm(MessagesType::class);
        if($candidat != null){
            return $this->render('AzimuthBundle:Default:Candidat/modules/Profile/candidat_profile.html.twig',
                    array('form' => $form->createView(),
                          'candidat' => $candidat));
        }
       return $this->render('AzimuthBundle:Default:Candidat/modules/Profile/candidat_profile.html.twig', array('form' => $form->createView()));
    }

    public function candidatProfileHistoryAction()
    {
        $form = $this->createForm(MessagesType::class);
        return $this->render('AzimuthBundle:Default:Candidat/modules/Profile/candidat_profile.html.twig', array('form' => $form->createView()));
    }

    public function candidatProfileSettingAction()
    {
        $form = $this->createForm(MessagesType::class);
        return $this->render('AzimuthBundle:Default:Candidat/modules/Profile/candidat_profile_setting.html.twig', array('form' => $form->createView()));

    }

    public function candidatProfileMessageAction()
    {
        $form = $this->createForm(MessagesType::class);
        return $this->render('AzimuthBundle:Default:Candidat/modules/Profile/candidat_profile.html.twig', array('form' => $form->createView()));
    }

    public function candidatProfileProjectAction()
    {
        $form = $this->createForm(MessagesType::class);
        return $this->render('AzimuthBundle:Default:Candidat/modules/Profile/candidat_profile.html.twig', array('form' => $form->createView()));
    }

    public function candidatProfileCommentAction()
    {
        $form = $this->createForm(MessagesType::class);
        return $this->render('AzimuthBundle:Default:Candidat/modules/Profile/candidat_profile.html.twig', array('form' => $form->createView()));
    }


    public function candidatInscriptionTraitementAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $candidat = new Candidat();
        $address = new Address();
        $ville = new Ville();
        $pays = new Pays();
        $utilisateur = new Utilisateurs();
        $langue = new Langue();


        $form = $this->createForm(CandidatType::class);

        $form->handleRequest($request);
        if($form->isSubmitted()) {



            //$data = $form->get('Address.ville.pays.nomPays')->getData();
            //echo $data;
            //die();

            //langue

            $langue->setLangueLastUpdate(new \DateTime('now'));
            $langue->setLangueName('Italien');

           // echo $langue;

            $em->persist($langue);

            //utilisateur

            $utilisateur->setUsername('KPpatrickMP');
            $utilisateur->setEmail('patkenf4@gmail.com');
            $utilisateur->setEnabled(1);
            $utilisateur->setPassword('pamake1234');
            $em->persist($utilisateur);


            //Pays
           // $pays->setPaysNom($form->get('Address.ville.pays.nomPays')->getData());
           // $pays->setPaysNom('SUISSE');
           // $pays->setLastUpdate(new \DateTime('now'));
           // $em->persist($pays);

            //Ville
           // $ville->setVilleNom($form->get('Address.ville.nomVille')->getData());
            //$ville->setVilleNom('Geneve');
           // $ville->setPays($pays);
            //$ville->setLastUpdate(new \DateTime('now'));
           // $em->persist($ville);

            //Address
            //$address->setAddress($form->get('Address.address')->getData());
            //$address->setAddress2($form->get('Address.address2')->getData());
            //$address->setDistrict($form->get('Address.district')->getData());
            //$address->setPostalCode($form->get('Address.postalCode')->getData());
            //$address->setPhone($form->get('Address.phone')->getData());
            //$address->setLastUpdate(new \DateTime('now'));
            //$address->setAddress('256 rue de la cote des neiges');
            //$address->setAddress2(' Maison unifamiliale');
           // $address->setDistrict('Gaineau');
           // $address->setPostalCode('J8V2S7');
          //  $address->setPhone('8192460787');
           // $address->setLastUpdate(new \DateTime('now'));
            //$address->setVille($ville);
           // $em->persist($address);


            //$candidat->setCandidatTitre($form->get('Titre')->getData());
            //$candidat->setCandidatPrenom($form->get('Prenom')->getData());
            //$candidat->setCandidatNom($form->get('Nom')->getData());
           // $candidat->setCandidatEmail($form->get('Email')->getData());
            $candidat->setCandidatCreateDate(new \DateTime('now'));
            $candidat->setCandidatActive(1);
            $candidat->setCandidatLastUpdate(new \DateTime('now'));
            //$candidat->setCandidatCoteDeSecurite($form->get('Cote')->getData());
            //$candidat->setCandidatDiplomePlusHaut($form->get('Diplome')->getData());
            //$candidat->setCandidatDateNaissance($form->get('Datenaissance')->getData());
            $candidat->setLangue($langue);
           // $candidat->setAddress($address);
           $candidat->setUtilisateur($utilisateur);
            //$candidat->setCandidatPhone($form->get('TelephoneMaison')->getData());
            //$candidat->setCandidatPhoneMobile($form->get('TelephoneMobile')->getData());
            $em->persist($candidat);
            $em->flush();
            $vars['candidat'] = $candidat;
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'inscrption du candidat reussi');
            return $this->render('AzimuthBundle:Default:Candidat/module/Profile/candidat_profile.html.twig', $vars);


        }
        return $this->render('AzimuthBundle:Default:Candidat/layout/candidatInscription.html.twig');


    }

}
