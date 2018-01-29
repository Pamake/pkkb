<?php

namespace Azimuth\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller
{
    public function indexAction()
    {
        return $this->render('ServiceBundle:Default:index.html.twig');
    }

    public function comptabiliteAction()
    {
        return $this->render('ServiceBundle:Default:Comptabilite-Fiscalite/layout/comptabilite-fiscalite.html.twig');
    }

    public function exploitationAction()
    {
        return $this->render('ServiceBundle:Default:Exploitation-Organisationnelle/layout/exploitation-organisationnelle.html.twig');
    }

    public function formationAction()
    {
        return $this->render('ServiceBundle:Default:Formations-Professionnelles/layout/formation-professionnelle.html.twig');
    }

    public function gestionrisqueAction()
    {
        return $this->render('ServiceBundle:Default:Gestion-Risque-Certification/layout/gestion-risque-certification.html.twig');
    }

    public function servicecommunauteautochtoneAction()
    {
        return $this->render('ServiceBundle:Default:Services-Communautes-Autochtones/layout/service-communaute-autochtone.html.twig');
    }

    public function servicefinancierAction()
    {
        return $this->render('ServiceBundle:Default:Services-Financier/layout/service-financier.html.twig');
    }

    public function serviceinternationalAction()
    {
        return $this->render('ServiceBundle:Default:Services-International/layout/service-international.html.twig');
    }

    public function strategieorganisationnelleAction()
    {
        return $this->render('ServiceBundle:Default:Strategie-Organisationnelle/layout/strategie-organisationnelle.html.twig');
    }

    public function transformationaffaireAction()
    {
        return $this->render('ServiceBundle:Default:Transformation-Affaires/layout/transformation-affaire.html.twig');
    }
}
