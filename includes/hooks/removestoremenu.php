<?php

# Remove Store From Navbar Hook
# Written by brian!

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
	if (!is_null($primaryNavbar->getChild('Store'))) {
            $primaryNavbar->removeChild('Store');
	}
});