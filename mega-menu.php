<?php
/**
 * Plugin Name: Custom Mega Menu for WordPress
 * Smartfire technical test/ 24/03/2025
 * Description: Mega menu for WordPress.
 * Version: 1.0
 * Author: Philippe Lavocat
 */

if (!defined('ABSPATH')) exit; 

// Initialize the menu
// If plugin needs to be used with themes that do not natively support menus
add_action('after_setup_theme', function () {
    add_theme_support('menus');
});

// Load font awesome :
function load_fontawesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_fontawesome');


// Save a menu location in the WordPress menu system
function register_megamenu() {
   register_nav_menu('megamenu', __('Mega Menu', 'custom-mega-menu'));
}
add_action('after_setup_theme', 'register_megamenu');

function display_megamenu() {
    wp_nav_menu([
        'theme_location' => 'megamenu',
        'container'       => 'nav',
        'container_class' => 'mega-menu',
        'menu_class'      => 'mega-menu-list',
    ]);
}
// Html view, display Mega Menu
function display_megamenu_html() {
    include(plugin_dir_path(__FILE__) . 'templates/mega-menu-template.php');
}
// Include Css & JS
function megamenu_assets() {
    wp_enqueue_style('mega-menu-css', plugin_dir_url(__FILE__) . 'css/mega-menu.css');
    wp_enqueue_script('mega-menu-js', plugin_dir_url(__FILE__) . 'js/mega-menu.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'megamenu_assets');

// Insert  view in header
// via Wordpress wp_body_open  action 
function insert_megamenu_in_header() {
    if (function_exists('display_megamenu_html')) {
        echo '<div class="mega-menu-container">';
        display_megamenu_html(); 
        echo '</div>';
    }
}
add_action('wp_body_open', 'insert_megamenu_in_header');

?>

