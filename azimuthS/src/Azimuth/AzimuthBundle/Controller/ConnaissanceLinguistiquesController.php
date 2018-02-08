<?php

namespace Azimuth\AzimuthBundle\Controller;

use Azimuth\AzimuthBundle\Entity\ConnaissancesLinguistiques;
use Azimuth\AzimuthBundle\Form\ConnaissancesLinguistiquesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ConnaissanceLinguistiquesController extends Controller
{

    public function addAction(Request $request)
    {
        // crée un equite

        $connaissancelinguistique = new ConnaissancesLinguistiques();
        $form = $this->createForm(ConnaissancesLinguistiquesType::class, $connaissancelinguistique);

        $form->handleRequest($request);

        // si le formulaire a été soumis
        if($form->isSubmitted() && $form->isValid()){

            // on enregistre le statu e n BDD

            $em = $this->getDoctrine()->getManager();

            $em->persit($connaissancelinguistique);
            $em->flush();

            return new Response('Connaissance Linguistique ajoute');
        }


        return $this->render('AzimuthBundle:Default:Linguistique/layout/linguistique.html.twig', array('form' => $form->createView()));
    }


}
