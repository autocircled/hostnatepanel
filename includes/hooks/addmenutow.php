<?php

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
	$client = Menu::context('client');
	if (!$client) {	
		$primaryNavbar->addChild('Shared Hosting')->setOrder(10);
			$primaryNavbar->getChild('Shared Hosting')->addChild('Linux Shared Hosting')->setUri('https://hostnate.com/linux-shared-hosting')->setOrder(1);
			$primaryNavbar->getChild('Shared Hosting')->addChild('Windows Shared Hosting')->setUri('https://hostnate.com/windows-shared-hosting')->setOrder(2);
			$primaryNavbar->getChild('Shared Hosting')->addChild('Wordpress Shared Hosting')->setUri('https://hostnate.com/wordpress-shared-hosting')->setOrder(3);
			
		$primaryNavbar->addChild('Reseller Hosting')->setOrder(11);
			$primaryNavbar->getChild('Reseller Hosting')->addChild('Linux Reseller Hosting')->setUri('https://hostnate.com/linux-reseller-hosting')->setOrder(1);
			$primaryNavbar->getChild('Reseller Hosting')->addChild('Windows Reseller Hosting')->setUri('https://hostnate.com/windows-reseller-hosting')->setOrder(2);

      
       $primaryNavbar->addChild('Dedicated Server')->setOrder(12);
			$primaryNavbar->getChild('Dedicated Server')->addChild('Linux KVM VPS')->setUri('https://hostnate.com/virtualserver-linux-hosting')->setOrder(1);
			$primaryNavbar->getChild('Dedicated Server')->addChild('Dedicated Servers')->setUri('https://hostnate.com/dedicated-server')->setOrder(2);
			$primaryNavbar->getChild('Dedicated Server')->addChild('Windows Dedicated Servers')->setUri('https://hostnate.com/windows-dedicated-server')->setOrder(3);
      
       $primaryNavbar->addChild('Buisness Hosting')->setOrder(13);
			$primaryNavbar->getChild('Buisness Hosting')->addChild('eCommerce Hosting')->setUri('https://hostnate.com/ecommerce-hosting')->setOrder(1);
			$primaryNavbar->getChild('Buisness Hosting')->addChild('Agency Hosting')->setUri('https://hostnate.com/agency-hosting')->setOrder(2);
			$primaryNavbar->getChild('Buisness Hosting')->addChild('Blog Hosting')->setUri('https://hostnate.com/blog-hosting')->setOrder(3);
			$primaryNavbar->getChild('Buisness Hosting')->addChild('Personal Website Hosting')->setUri('https://hostnate.com/personal-web-hosting')->setOrder(4);
            $primaryNavbar->getChild('Buisness Hosting')->addChild('Nonprofit Web Hosting')->setUri('https://hostnate.com/nonprofit-web-hosting')->setOrder(5);
           $primaryNavbar->getChild('Buisness Hosting')->addChild('LMS Hosting')->setUri('https://hostnate.com/lms-hosting')->setOrder(6);
      
      
      $primaryNavbar->addChild('Domain')->setOrder(13);
			$primaryNavbar->getChild('Domain')->addChild('Register Domain')->setUri('https://panel.hostnate.com/clientarea.php?action=domains')->setOrder(1);
			$primaryNavbar->getChild('Domain')->addChild('Renew Domains')->setUri('https://panel.hostnate.com/index.php?rp=/cart/domain/renew')->setOrder(2);
            $primaryNavbar->getChild('Domain')->addChild('Register New Domain')->setUri('https://panel.hostnate.com/cart.php?a=add&domain=register')->setOrder(3);
            $primaryNavbar->getChild('Domain')->addChild('Transfer Domain')->setUri('https://panel.hostnate.com/cart.php?a=add&domain=register')->setOrder(4);
            $primaryNavbar->getChild('Domain')->addChild('Domain Search')->setUri('https://panel.hostnate.com/cart.php?a=add&domain=register')->setOrder(5);

	}
});