<?php

// Load CSS
function mytheme_load_css() {
    // Bootstrap CSS
    wp_register_style(
        'bootstrap', 
        get_template_directory_uri() . '/css/bootstrap.min.css', 
        array(), 
        '5.1.3',  // Update to the actual version of Bootstrap you are using
        'all'
    );
    wp_enqueue_style('bootstrap');

    // Main CSS with automatic versioning for cache busting
    wp_register_style(
        'main', 
        get_template_directory_uri() . '/css/main.css', 
        array('bootstrap'), // Set Bootstrap as a dependency to ensure loading order
        filemtime(get_template_directory() . '/css/main.css'), 
        'all'
    );
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'mytheme_load_css');

// Load JavaScript
function mytheme_load_js() {
    wp_enqueue_script('jquery'); // Enqueue jQuery, which is included with WordPress

    // Bootstrap JavaScript with dependency on jQuery
    wp_register_script(
        'bootstrap', 
        get_template_directory_uri() . '/js/bootstrap.min.js', 
        array('jquery'),  // Use an array to specify dependencies
        '5.1.3',          // Bootstrap version
        true              // Load in footer
    );
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'mytheme_load_js');

// Enable Theme Support for Menus
add_theme_support('menus');

// Register Menus
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'textdomain'),       // Use unique descriptions
            'mobile-menu' => __('Mobile Menu', 'textdomain'), // to differentiate menu locations
        )
    );
}
add_action('init', 'mytheme_register_menus');

add_theme_support('post-thumbnails');
add_image_size('custom-thumb', 500, 400, true); // Optional: Custom size (300x200px cropped)

// Enable Theme Support for Widgets

add_theme_support('widgets');

function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Page_Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget_title">',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init','my_sidebars');