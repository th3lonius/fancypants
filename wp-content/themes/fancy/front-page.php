<?php get_header(); ?>

<?php get_template_part( 'abstract', '' ); ?>

<section class="buythebook">
    
    <div class="stitching">
    
        <div class="wrapper">

            <aside>
                <img src="<?php echo get_template_directory_uri(); ?>/images/book_open.png"/>
                <a href="#" class="stitched btn">Buy the Book!</a>
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

    </div>

</section>

<section class="news">
    
    <div class="wrapper">
        
        <h2>Fancy News &amp; Events</h2>
        
        <article>
            
                <?php

                    $args = array(
                        'category_name' => 'news'
                    );

                    $new_query = new WP_Query( $args );

                ?>

                <?php
                    // Start the Loop.
                    while ( $new_query->have_posts() ) : $new_query->the_post();
                        the_title('<h3>','</h3>');
                        the_date('','<time>','</time>');
                        the_content();

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                    endwhile;
                ?>
        
        </article>
        
        <aside>
            <img src="<?php echo get_template_directory_uri(); ?>/images/sewingnews.png"/>
        </aside>
    
    </div>

</section>

<?php get_footer(); ?>