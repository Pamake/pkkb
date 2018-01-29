<?php

namespace Azimuth\AutochtonesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AutochtonesBundle:Default:index.html.twig');
    }
}
