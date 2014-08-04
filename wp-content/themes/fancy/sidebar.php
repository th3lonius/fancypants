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
        the_excerpt();

    endwhile;
?>