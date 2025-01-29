<?php
// Include the Bootstrap 5 Nav Walker
require_once get_template_directory() . '/css/class-bootstrap-5-nav-walker.php';

// Load CSS
function mytheme_load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array('bootstrap'), filemtime(get_template_directory() . '/css/main.css'), 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'mytheme_load_css');

// Load JavaScript
function mytheme_load_js() {
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.1.3', true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'mytheme_load_js');

// Enable Theme Support for Menus
add_theme_support('menus');

// Register Menus
function mytheme_register_menus() {
    register_nav_menus(array(
        'top-menu' => __('Top Menu', 'textdomain'),
        'mobile-menu' => __('Mobile Menu', 'textdomain'),
    ));
}
add_action('init', 'mytheme_register_menus');

add_theme_support('post-thumbnails');
add_image_size('custom-thumb', 500, 400, true);

// Enable Theme Support for Widgets
add_theme_support('widgets');

function my_sidebars(){
    register_sidebar(array(
        'name' => 'Page_Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'my_sidebars');
?>