<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Display Post Content -->
    <div class="post-content">
        <?php the_content(); ?>
    </div>

    <!-- Display Tags -->
    <?php 
    $tags = get_the_tags(); 
    if ( $tags ) : ?>
        <div class="post-tags">
            <h4>Tags:</h4>
            <?php foreach ( $tags as $tag ) : ?>
                <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="tag-link">
                    <?php echo esc_html( $tag->name ); ?>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Display Categories -->
    <?php 
    $categories = get_the_category(); 
    if ( $categories ) : ?>
        <div class="post-categories">
            <h4>Categories:</h4>
            <?php foreach ( $categories as $cat ) : ?>
                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="category-link">
                    <?php echo esc_html( $cat->name ); ?>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

