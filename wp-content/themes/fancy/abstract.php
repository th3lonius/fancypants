<?php

    $args = array(
        'name' => 'abstract'
    );

    $new_query = new WP_Query( $args );

?>

<section class="abstract">
    
    <div class="wrapper">
        
        <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
    
        <aside>

            <?php get_template_part( 'slideshow', '' ); ?>

        </aside>

        <article>
            
            <?php
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