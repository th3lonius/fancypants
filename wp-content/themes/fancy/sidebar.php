<?php

    $args = array(
        'category_name' => 'news'
    );

    $new_query = new WP_Query( $args );

?>

<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

    <a href="<?php the_permalink()?>"><?php the_title('<h3>','</h3>'); ?></a>
    <?php the_date('','<time>','</time>'); ?>
    <?php the_excerpt(); ?>

<?php endwhile; ?>