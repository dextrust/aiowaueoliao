<?php
// Theme setup
function mytheme_setup() {
    // Make theme available for translation
    load_theme_textdomain('mytheme', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register primary menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Enable support for Post Formats
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
    ));

    // Set up the WordPress core custom background feature
    add_theme_support('custom-background', apply_filters('mytheme_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue scripts and styles
function mytheme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');

    // Enqueue custom CSS
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/custom.css');

    // Enqueue jQuery (comes with WordPress)
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Enqueue custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

// Register widget area
function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'mytheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'mytheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');

// Include custom navigation walker for Bootstrap
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
