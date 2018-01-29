<?php

namespace Azimuth\AzimuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Azimuth\AzimuthBundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;

class CarrieresController extends Controller
{


    public function emploiAction()
    {

        $em = $this->getDoctrine()->getManager();
        $emplois = $em->getRepository('AzimuthBundle:OffreEmploi')->findAll();

        return $this->render('AzimuthBundle:Default:Carrieres/layout/carriere.html.twig', array('emplois' => $emplois));
    }


    public function carriereAction()
    {
        return $this->render('AzimuthBundle:Default:Carrieres/layout/carriere.html.twig');
    }


    public function rechercheAction()
    {

        $form = $this->createForm(RechercheType::class);
        return $this->render('AzimuthBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }

    public function rechercheTraitementAction(Request $request)
    {
        //var_dump($data = $request->getContent());

       // dump($request->request->get('form')['recherche']);

        $form = $this->createForm(RechercheType::class);
        $emplois = null;


        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $data = $form->get('recherche')->getData();
            //echo $data;
            $em = $this->getDoctrine()->getManager();
            $emplois = $em->getRepository('AzimuthBundle:OffreEmploi')->recherche($data);
            //var_dump($offreemplois);
            //die();


        }

        return $this->render('AzimuthBundle:Default:Carrieres/layout/carriere.html.twig', array('emplois' => $emplois));
    }
}
