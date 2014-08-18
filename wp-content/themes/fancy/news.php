<section class="news">
    
    <div class="wrapper">
        
        <h2>Fancy News &amp; Events</h2>
        
            <img src="<?php echo get_template_directory_uri(); ?>/images/sewingnews.png"/>
        
        <article>
            
                <?php

                    $args = array(
                        'category_name' => 'news'
                    );

                    $new_query = new WP_Query( $args );

                ?>

                <?php
                    // Start the Loop.
                    while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                        <a href="<?php the_permalink()?>"><?php the_title('<h3>','</h3>');?></a>
            
                        <?php
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