<section class="events">
    
    <div class="wrapper">
        
        <h1><?php echo get_the_title(); ?></h1>
                    
            <?php

                $args = array(
                    'category_name' => 'news'
                );

                $new_query = new WP_Query( $args );

            ?>

            <?php
                // Start the Loop.
                while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
        
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>

                <?php endwhile; ?>

    </div>

</section>

<aside class="sidebar">
    
    <?php get_template_part( 'sidebar', '' ); ?>
    
</aside>