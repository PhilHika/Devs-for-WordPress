<?php
if (!defined('ABSPATH')) exit;

// Remove the saved menu location upon uninstallation
function custom_megamenu_uninstall() {
    unregister_nav_menu('megamenu');
}
custom_megamenu_uninstall();
