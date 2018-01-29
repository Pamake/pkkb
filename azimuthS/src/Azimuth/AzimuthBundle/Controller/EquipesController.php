<?php

namespace Azimuth\AzimuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EquipesController extends Controller
{
    public function equipeAction()
    {
        return $this->render('AzimuthBundle:Default:Equipes/layout/equipe.html.twig');
    }
}
