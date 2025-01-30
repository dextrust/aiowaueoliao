<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="keywords" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_keywords', true ) ); ?>">
    <meta name="author" content="HDRWalls">
    <meta name="robots" content="index, follow">

    <!-- Add preconnect for external resources (Google Fonts, etc.) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

    <!-- Title and other meta -->
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/HDRWalls%20Logo%20Light%20Mode.png" alt="HDRWalls Logo" height="50">
                </a>
                <div>
                <form class="d-flex mx-auto" action="<?php echo home_url('/'); ?>" method="get">
                    <input class="form-control me-2" type="search" name="s" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'top-menu',
                        'container' => false,
                        'menu_class' => 'navbar-nav ms-auto',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ) );
                    ?>
                </div>
            </div>
        </nav>
        <div class="header-line"></div>
    </header>
    <?php wp_body_open(); ?>