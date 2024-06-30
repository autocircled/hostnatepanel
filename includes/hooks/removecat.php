<?php

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaSecondarySidebar', 1, function(MenuItem $SecondarySidebar)
{
   if(!is_null($SecondarySidebar->getChild('Categories'))){
               $SecondarySidebar->removeChild('Categories');
   }
});