<?php

namespace Azimuth\MethodesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MethodesBundle:Default:index.html.twig');
    }
}
