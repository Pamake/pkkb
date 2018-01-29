<?php

namespace Azimuth\AzimuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DiversitesController extends Controller
{
    public function diversiteAction()
    {
        return $this->render('AzimuthBundle:Default:Diversite-Inclusion/layout/diversite-inclusion.html.twig');
    }
}
