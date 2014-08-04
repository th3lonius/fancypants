<?php
/**
 * Template Name: Author page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<article class="page author_about">
    
    <main>
            
        <?php get_template_part( 'content', 'page' ); ?>
        
    </main>
    
</article>

<?php get_footer(); ?>