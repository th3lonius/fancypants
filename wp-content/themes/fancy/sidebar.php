<?php

    $args = array(
        'category_name' => 'news'
    );

    $new_query = new WP_Query( $args );

?>

<div class="module">
    
    <h3>Fancy News &amp; Events</h3>

    <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

        <a href="<?php the_permalink()?>"><?php the_title('<h4>','</h4>'); ?></a>
        <time><?php echo get_the_date(); ?></time>
        <?php the_excerpt(); ?>

    <?php endwhile; ?>
    
</div>


<?php

    $args = array(
        'name' => 'reviews'
    );

    $review_query = new WP_Query( $args );

?>

<div class="review_module">
    
    <img class="frame_top" src="<?php echo get_template_directory_uri(); ?>/images/frame_top.png" width="396px" />
    
<?php 
$post_id = 142; 

$rows = get_field('reviews', $post_id ); // get all the rows
$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
$rand_row_body = $rand_row['body' ]; // get the sub field value 
 
?>
    
<p><?php echo $rand_row_body ?></p>

    
    <img class="frame_bottom" src="<?php echo get_template_directory_uri(); ?>/images/frame_bottom.png" width="396px" />
    
    <img class="frame_lookers" src="<?php echo get_template_directory_uri(); ?>/images/frame_lookers.png" width="396px" />

</div>
