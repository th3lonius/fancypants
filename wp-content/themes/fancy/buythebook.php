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