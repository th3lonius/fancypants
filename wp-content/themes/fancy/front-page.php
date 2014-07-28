<?php get_header(); ?>


<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

<section class="abstract">
    
    <div class="wrapper">
    
        <aside>

            <?php get_template_part( 'slideshow', '' ); ?>

        </aside>

        <article>

            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                    the_content();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile;
            ?>

        </article><!-- #content -->
        
    </div>
    
</section>

<section class="buythebook">
    
    <div class="wrapper">
        
        <aside>
            <img src="<?php echo get_template_directory_uri(); ?>/images/book_open.png"/>
        </aside>
        
        <article>
            
            <?php

                $args = array(
                    'name' => 'buy-the-book'
                );

                $new_query = new WP_Query( $args );

            ?>
        
            <?php
                // Start the Loop.
                while ( $new_query->have_posts() ) : $new_query->the_post();

                    the_content();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile;
            ?>
        
        </article>
    
    
    </div>


</section>

<?php get_footer(); ?>