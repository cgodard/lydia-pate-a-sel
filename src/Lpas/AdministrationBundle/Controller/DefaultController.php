<?php

namespace Lpas\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LpasAdministrationBundle:Default:index.html.twig', array('name' => $name));
    }
}
