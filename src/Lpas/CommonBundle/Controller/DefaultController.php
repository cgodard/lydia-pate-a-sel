<?php

namespace Lpas\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LpasCommonBundle:Default:index.html.twig', array('name' => $name));
    }
}
