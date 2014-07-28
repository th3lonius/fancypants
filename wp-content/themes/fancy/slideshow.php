<?php if( have_rows('slideshow_images') ): ?>
 
	<div id="slides">
        
        <div class="slides-container">
 
	<?php while( have_rows('slideshow_images') ): the_row(); 
 
		// vars
		$image = get_sub_field('slideshow_image');

        // thumbnail
        $size = 'thumbnail';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
 
		?>  
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
 
	<?php endwhile; ?>
            
        </div>
 
	</div>
 
<?php endif; ?>