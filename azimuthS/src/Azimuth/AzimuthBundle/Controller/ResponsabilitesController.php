<?php

namespace Azimuth\AzimuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResponsabilitesController extends Controller
{
    public function responsabiliteAction()
    {
        return $this->render('AzimuthBundle:Default:Responsabilite/layout/responsabilite.html.twig');
    }
}
