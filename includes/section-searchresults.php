<div class="container my-4">
    <div class="row g-3">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            // Fetch the first image from the post content
                            $content = get_the_content();
                            $first_image_url = '';
                            if ( preg_match( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches ) ) {
                                $first_image_url = $matches[1];
                            }

                            // Display the first image or fallback image
                            if ( $first_image_url ) :
                                echo '<div class="thumbnail-wrapper"><img src="' . esc_url( $first_image_url ) . '" alt="' . get_the_title() . '" class="card-img-top"></div>';
                            else :
                                echo '<div class="thumbnail-wrapper"><img src="' . esc_url( get_template_directory_uri() . '/images/default-thumbnail.jpg' ) . '" alt="Default Thumbnail" class="card-img-top"></div>';
                            endif;
                            ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>There are no search results for '<?php echo get_search_query();?>'</p>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="pagination-container mt-4">
        <?php
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __('« Previous'),
            'next_text' => __('Next »'),
            'type'      => 'plain',
            'screen_reader_text' => '',
        ) );
        ?>
    </div>
</div>
