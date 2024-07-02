<?php
#adding Menu Item to primaryNavbar
use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
    $primaryNavbar->removeChild('Open Ticket');
    $primaryNavbar->addChild('Blog')
        ->setUri('https://blog.hostnate.com/')
        ->setOrder(70);
    $primaryNavbar->addChild('Downloads')
        ->setUri('https://panel.hostnate.com/index.php/download')
        ->setOrder(75);
    $primaryNavbar->addChild('Home')
        ->setUri('https://hostnate.com/')
        ->setOrder(1);
});
