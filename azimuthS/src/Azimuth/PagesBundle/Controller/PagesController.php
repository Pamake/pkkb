<?php

namespace Azimuth\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{


    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PagesBundle:Pages')->findAll();

        return $this->render('PagesBundle:Default:Pages/modulesUsed/menu.html.twig', array('pages' => $pages));
    }

    public function descriptionAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PagesBundle:Pages')->findAll();

        return $this->render('PagesBundle:Default:Pages/modulesUsed/description.html.twig', array('pages' => $pages));
    }

    public function pageAction()
    {
        return $this->render('PagesBundle:Default:Pages/layout/pages.html.twig');
    }
}
