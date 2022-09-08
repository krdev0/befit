<?php


/**
 * Action hooks
 */

add_action('init', 'befit_register_menu');
add_action('wp_enqueue_scripts', 'befit_scripts');
add_action('after_setup_theme', 'befit_setup');
add_action('widgets_init', 'befit_widgets');


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

    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefonts'), '1.0.0');

    /** Load scripts */

    wp_enqueue_script('jquery');

    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', 'jquery', '1.0.10', true);

    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}

function befit_setup()
{
    //Register image sizes
    add_image_size('befitSquare', 340, 340, true);
    add_image_size('befitPortrait', 340, 724, true);
    add_image_size('befitBox', 400, 375, true);
    add_image_size('befitMedium', 800, 400, true);
    add_image_size('befitLarge', 1280, 650, true);

    add_theme_support('post-thumbnails');
}

function befit_widgets()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
