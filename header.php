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
        <nav role="navigation" aria-label="Main Menu">

            <div class="container">
            <?php
            wp_nav_menu( array( 'theme_location' => 'top-menu' ) );
            ?>
            </div>
            
        </nav>
    </header>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>HDRWalls Free Wallpapers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Download free 4K HD Wallpapers For your devices at HDRWalls">
    <meta name="keywords" content="SEO, meta tags, HTML, website, free wallpaper, hd wallpaper, 4K wallpaper, android wallpaper, iphone wallpaper, download free wallpaper">
    <meta name="author" content="HDRWalls">
    <meta name="robots" content="index, follow">
    
    <?php wp_head();?>
</head>

<body>
    <header>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
            )
        ); 
        ?>

    </header> -->