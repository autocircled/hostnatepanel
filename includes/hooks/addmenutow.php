<?php

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
    $client = Menu::context('client');
    if (!$client) {
        $primaryNavbar->addChild('Shared Hosting')->setOrder(12);
        $primaryNavbar->getChild('Shared Hosting')->addChild('Linux Shared Hosting')->setUri('https://hostnate.com/linux-shared-hosting.html')->setOrder(1);
        $primaryNavbar->getChild('Shared Hosting')->addChild('Windows Shared Hosting')->setUri('https://hostnate.com/windows-shared-hosting.html')->setOrder(2);
        $primaryNavbar->getChild('Shared Hosting')->addChild('Wordpress Shared Hosting')->setUri('https://hostnate.com/wordpress-shared-hosting.html')->setOrder(3);

        $primaryNavbar->addChild('Reseller Hosting')->setOrder(14);
        $primaryNavbar->getChild('Reseller Hosting')->addChild('Linux Reseller Hosting')->setUri('https://hostnate.com/linux-reseller-hosting.html')->setOrder(1);
        $primaryNavbar->getChild('Reseller Hosting')->addChild('Windows Reseller Hosting')->setUri('https://hostnate.com/windows-reseller-hosting.html')->setOrder(2);


        $primaryNavbar->addChild('Dedicated Server')->setOrder(15);
        $primaryNavbar->getChild('Dedicated Server')->addChild('Linux KVM VPS')->setUri('https://hostnate.com/virtualserver-linux-hosting.html')->setOrder(1);
        $primaryNavbar->getChild('Dedicated Server')->addChild('Dedicated Servers')->setUri('https://hostnate.com/dedicated-server.html')->setOrder(2);
        $primaryNavbar->getChild('Dedicated Server')->addChild('Windows Dedicated Servers')->setUri('https://hostnate.com/windows-dedicated-server.html')->setOrder(3);

        $primaryNavbar->addChild('Buisness Hosting')->setOrder(13);
        $primaryNavbar->getChild('Buisness Hosting')->addChild('eCommerce Hosting')->setUri('https://hostnate.com/ecommerce-hosting.html')->setOrder(1);
        $primaryNavbar->getChild('Buisness Hosting')->addChild('Agency Hosting')->setUri('https://hostnate.com/agency-hosting.html')->setOrder(2);
        $primaryNavbar->getChild('Buisness Hosting')->addChild('Blog Hosting')->setUri('https://hostnate.com/blog-hosting.html')->setOrder(3);
        $primaryNavbar->getChild('Buisness Hosting')->addChild('Personal Website Hosting')->setUri('https://hostnate.com/personal-web-hosting.html')->setOrder(4);
        $primaryNavbar->getChild('Buisness Hosting')->addChild('Nonprofit Web Hosting')->setUri('https://hostnate.com/nonprofit-web-hosting.html')->setOrder(5);
        $primaryNavbar->getChild('Buisness Hosting')->addChild('LMS Hosting')->setUri('https://hostnate.com/lms-hosting.html')->setOrder(6);


        $primaryNavbar->addChild('Domain')->setOrder(11);
        $primaryNavbar->getChild('Domain')->addChild('Register Domain')->setUri('http://hostnate.com/register-domain.html')->setOrder(1);
        $primaryNavbar->getChild('Domain')->addChild('Renew Domains')->setUri('https://panel.hostnate.com/index.php?rp=/cart/domain/renew')->setOrder(2);
        $primaryNavbar->getChild('Domain')->addChild('Transfer Domain')->setUri('http://hostnate.com/domain-transfer.html')->setOrder(3);
        $primaryNavbar->getChild('Domain')->addChild('New Domain Extensions')->setUri('http://hostnate.com/new-domain-extensions.html')->setOrder(4);
    } else {
        foreach ($primaryNavbar->getChildren() as $parent_items) {
            if ($parent_items->getName() == "Domains") {
                // $parent_items->addChild("test Domain")->setUri("https://panel.hostnate.com/index.php?rp=/cart/domain/renew");
                $parent_items->getChild("Domain Search")->setOrder(1);
                // var_dump($parent_items->getChild("Domain Search")->getOrder());
            }
            if ($parent_items->getName() == "Support") {
                // var_dump($parent_items->getChild("Tickets")->getOrder());
                // var_dump($parent_items->getChild("Announcements")->getOrder());
                $parent_items->addChild("Open Support Ticket")->setUri("https://panel.hostnate.com/submitticket.php")->setOrder(5);
                $parent_items->getChild("Tickets")->setLabel("My Support Tickets");
                $parent_items->removeChild('Downloads');
                // var_dump($parent_items->getChild("Domain Search")->getOrder());
            }

            if ($parent_items->getName() == "Billing") {
                // $parent_items->addChild("test Domain")->setUri("https://panel.hostnate.com/index.php?rp=/cart/domain/renew");
                $parent_items->getChild("Add Funds")->setOrder(1);
                // var_dump($parent_items->getChild("Domain Search")->getOrder());
            }

            if ($parent_items->getName() == "Services") {
                // $parent_items->addChild("test Domain")->setUri("https://panel.hostnate.com/index.php?rp=/cart/domain/renew");
                $parent_items->getChild("Order New Services")->setUri("https://hostnate.com/");
                // var_dump($parent_items->getChild("Domain Search")->getOrder());
            }
        }
    }
});
