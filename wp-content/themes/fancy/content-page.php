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

        <h1>About the Author</h1>

        <?php 

        $image = get_field('image');

        if( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>

    </header>

        <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();

                the_content();

            endwhile;
        ?>

</section>

<aside>
    
    <?php get_template_part( 'sidebar', '' ); ?>

</aside>