<?php


/**
 * Action hooks
 */

add_action('init', 'befit_register_menu');
add_action('wp_enqueue_scripts', 'befit_scripts');


function befit_register_menu()
{
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'main-menu-2' => 'Main Menu 2',
        'socials-menu' => 'Socials Menu'
    ));
}


function befit_scripts()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Antonio:wght@700&family=Lato:wght@100;300;400;700&display=swap');

    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefonts'), '1.0.0');
}
