<?php

namespace Azimuth\AzimuthBundle\Controller;

use Azimuth\AzimuthBundle\Entity\Equite;
use Azimuth\AzimuthBundle\Form\EquiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EquiteController extends Controller
{


    public function addAction(Request $request)
    {
        // crée un equite

        $equite = new Equite();
        $form = $this->createForm(EquiteType::class, $equite);

        $form->handleReques($request);

        // si le formulaire a été soumis
        if($form->isSubmitted() && $form->isValid()){

            // on enregistre le statu e n BDD

            $em = $this->getDoctrine()->getManager();

            $em->persit($equite);
            $em->flush();

            return new Response('Equite ajoute');
        }


        return $this->render('AzimuthBundle:Default:Equite/layout/equite.html.twig', array('form' => $form->createView()));
    }

}
