<?php get_header();?>

<section class="page-wrap">

    <div class="container">

        <?php echo get_search_query();?>
        <h1><?php echo single_cat_title();?></h1>
        <?php get_template_part('includes/section','searchresults');?>

    </div>
    
</section>

<?php get_footer();?>