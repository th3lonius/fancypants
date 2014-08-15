<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<section id="content">
    <header>
        <h1><?php the_title(); ?></h1>
    </header>
    <?php the_content(); ?>
    
</section>

<aside class="sidebar">
    
    <?php get_template_part( 'sidebar', '' ); ?>
    
</aside>