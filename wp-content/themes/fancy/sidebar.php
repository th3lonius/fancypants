<?php

    $args = array(
        'category_name' => 'news'
    );

    $new_query = new WP_Query( $args );

?>

<?php 

	if ( is_page('events') ) {
	
	
	} else { ?>

<div class="module">
    
    <h3>Fancy News &amp; Events</h3>

    <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

        <a href="<?php the_permalink()?>"><?php the_title('<h4>','</h4>'); ?></a>
        <time><?php echo get_the_date(); ?></time>
        <?php the_excerpt(); ?>

    <?php endwhile; ?>
    
</div>

<?php

}
?>


<?php

    $args = array(
        'name' => 'reviews'
    );

    $review_query = new WP_Query( $args );

?>

<div class="review_module">
    
    <img class="frame_top" src="<?php echo get_template_directory_uri(); ?>/images/frame_top.png" width="396px" />
    
<?php 
$post_id = 140; 

$rows = get_field('review', $post_id ); // get all the rows

if($rows) {
	
	shuffle( $rows );
	$i = 0;
	
	foreach($rows as $row){
		
		$body = $row['body'];
		$name = $row['name'];
		
		?>
		
	<p><?php echo $body ?></p>
	<span>- <?php echo $name ?></span>
	
	<?php
	
		if(++$i == 1) break;
	
	}
}

 
?>

    
    <img class="frame_bottom" src="<?php echo get_template_directory_uri(); ?>/images/frame_bottom.png" width="396px" />
    
    <img class="frame_lookers" src="<?php echo get_template_directory_uri(); ?>/images/frame_lookers.png" width="396px" />

</div>
