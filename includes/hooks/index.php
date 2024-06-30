<?php
use WHMCS\View\Menu\Item as MenuItem;

if ( !defined('WHMCS')) {
    header("Location: ../../index.php");
}



add_hook('ClientAreaPrimarySidebar', 1, function(MenuItem $primarySidebar)
{
    if(!is_null($primarySidebar->getChild('My Account')) && !is_null($primarySidebar->getChild('My Account')->getChild('Billing Information'))){
    $primarySidebar->getChild('My Account')->removeChild('Billing Information');
    }
});