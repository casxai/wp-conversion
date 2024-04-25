<!-- 
    plugin that comes with a theme, 
    allows you to plugin all the functionality 
    u need in a theme 
-->
<?php

// load stylesheets
function load_css()
{



    wp_register_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('bootstrap');
    wp_register_style(
        'main',
        get_template_directory_uri() . '/css/main.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts', 'load_css');

// load javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        'jquery',
        false,
        true
    );
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// swiper 
function enqueue_swiper()
{
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper');

// owl carousel
function enqueue_owl_carousel()
{
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

    wp_enqueue_style('owl-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');

    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_owl_carousel');

function enqueue_owl_carousel_setup()
{
    wp_enqueue_script('owl-carousel-setup', get_template_directory_uri() . '/js/owl-carousel-setup.js', array('jquery', 'owl-carousel'), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_owl_carousel_setup');

// theme options
add_theme_support('menus');
add_theme_support('thumbnails');

// menus
register_nav_menus(

    array(
        // top-menu is the ID of the menu, Top Menu is the visual
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


