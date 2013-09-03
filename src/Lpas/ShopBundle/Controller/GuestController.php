<?php
 
namespace Lpas\ShopBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class GuestController extends Controller
{
	public function homeAction()
	{
		return $this->render('LpasShopBundle:Guest:home.html.twig');
	}
	
	public function galleryAction()
	{
		return $this->render('LpasShopBundle:Guest:gallery.html.twig');
	}
	
	public function shopAction()
	{
		return $this->render('LpasShopBundle:Guest:shop.html.twig');
	}
	
	public function contactAction()
	{
		return $this->render('LpasShopBundle:Guest:contact.html.twig');
	}
}