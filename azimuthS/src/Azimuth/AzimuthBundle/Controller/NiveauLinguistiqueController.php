<?php

namespace Azimuth\AzimuthBundle\Controller;

use Azimuth\AzimuthBundle\Entity\NiveauLinguistique;
use Azimuth\AzimuthBundle\Form\NiveauLinguistiqueType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NiveauLinguistiqueController extends Controller
{

    public function addAction(Request $request)
    {
        // crée un equite

        $niveau = new NiveauLinguistique();
        $form = $this->createForm(NiveauLinguistiqueType::class, $niveau);

        $form->handleReques($request);

        // si le formulaire a été soumis
        if($form->isSubmitted() && $form->isValid()){

            // on enregistre le statu e n BDD

            $em = $this->getDoctrine()->getManager();

            $em->persit($niveau);
            $em->flush();

            return new Response('Niveau liguistique ajoute');
        }


        return $this->render('AzimuthBundle:Default:Niveau/layout/niveau.html.twig', array('form' => $form->createView()));
    }

}
