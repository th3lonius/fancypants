<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<section id="content">
    
    <header>

        <h1><?php echo get_the_title(); ?></h1>

        <?php 

        $image = get_field('image');

        if( !empty($image) ): ?>
        
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            
        <?php endif; ?>

    </header>
    
    <!-- PRIMARY CONTENT LOOP -->

        <?php while ( have_posts() ) : the_post();

                the_content();

        endwhile; ?>
    
    <?php if (is_page('contact')) {
            
            get_template_part( 'contact', '' );
    
        }
    ?>
    
    <!-- IMAGE GRID -->
        <?php if( have_rows('attachments') ): ?>

            <ul class="grid_thumb">

               <?php while( have_rows('attachments') ): the_row(); 

                // vars
                $image = get_sub_field('thumbnail');

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

                <li>

                    <a href="<?php echo get_sub_field('file'); ?>">

                        <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                    </a>

                </li>           

               <?php endwhile; ?>

            </ul>

        <?php endif; ?>
    
</section>

<aside class="sidebar">
    
    <?php get_template_part( 'sidebar', '' ); ?>

</aside>