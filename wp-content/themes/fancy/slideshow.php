<?php if( have_rows('slideshow') ): ?>
 
	<div id="slides">
        
        <div class="slides-container">
 
	   <?php while( have_rows('slideshow') ): the_row(); 
 
		// vars
		$image = get_sub_field('image');

        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        // thumbnail
        $size = 'thumbnail';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
 
		?>
            
<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
           
 
	   <?php endwhile; ?>
            
        </div><!-- /slides-container -->
 
	</div><!-- /slides -->
 
<?php endif; ?>

 