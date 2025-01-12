<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <!-- Logo -->
        <a href="<?php echo home_url('/'); ?>" class="site-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" alt="Logo" class="logo">
        </a>

        <!-- Navigation -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu d-flex list-unstyled m-0',
                'container'      => false,
            ));
            ?>
        </nav>

        <!-- Search Bar -->
        <div class="header-search">
            <?php get_search_form(); ?>
        </div>
    </div>
</header>
