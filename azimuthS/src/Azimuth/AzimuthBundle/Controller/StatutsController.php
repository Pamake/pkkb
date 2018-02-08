<?php

namespace Azimuth\AzimuthBundle\Controller;

use Azimuth\AzimuthBundle\Entity\Statut;
use Azimuth\AzimuthBundle\Form\StatutType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class StatutsController extends Controller
{

    public function addAction(Request $request)
    {
        // crée un statut

        $statut = new Statut();
        $form = $this->createForm(StatutType::class, $statut);

        $form->handleRequest($request);

        // si le formulaire a été soumis
         if($form->isSubmitted() && $form->isValid()){

                // on enregistre le statu e n BDD

             $em = $this->getDoctrine()->getManager();

             $em->persit($statut);
             $em->flush();

             return new Response('Statut ajoute');
         }


        return $this->render('AzimuthBundle:Default:Statut/layout/statut.html.twig', array('form' => $form->createView()));
    }
}
