<?php

namespace Lpas\CommonBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Accueil', array('route' => 'lpas_shop_home'));
        $menu->addChild('Galerie', array('route' => 'lpas_shop_gallery'));
        $menu->addChild('Boutique', array('route' => 'lpas_shop_shop'));
        $menu->addChild('Contact', array('route' => 'lpas_shop_contact'));
        // ... add more children

        return $menu;
    }
    
    public function createShopMenu(Request $request)
    {
    	$menu = $this->factory->createItem('root');
    
    	$menu->addChild('Accueil', array('route' => 'lpas_shop_home'));
    	$menu->addChild('Galerie', array('route' => 'lpas_shop_gallery'));
    	$menu->addChild('Boutique', array('route' => 'lpas_shop_shop'));
    	$menu->addChild('Contact', array('route' => 'lpas_shop_contact'));
    	// ... add more children
    
    	return $menu;
    }
}