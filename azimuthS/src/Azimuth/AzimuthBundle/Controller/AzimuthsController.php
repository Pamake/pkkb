<?php

namespace Azimuth\AzimuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AzimuthsController extends Controller
{
    public function indexAction()
    {
        return $this->render('AzimuthBundle:Default:index.html.twig');
    }

}
