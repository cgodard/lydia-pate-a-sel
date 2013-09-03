<?php
 
namespace Lpas\AdministrationBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class AdministrationController extends Controller
{
	public function homeAction()
	{
		return $this->render('LpasAdministrationBundle:Administration:home.html.twig');
	}
}