<?php

namespace Azimuth\AzimuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MissionsController extends Controller
{
    public function missionAction()
    {
        return $this->render('AzimuthBundle:Default:Mission-Vision/layout/mission.html.twig');
    }
}
