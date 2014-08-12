<?php
/**
 * The template for displaying all pages
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

<article class="page <?php global $post; echo $post->post_name; ?>">
    
    <main>
        
        <?php if (is_page('events')) {

            get_template_part( 'archive', '' );

            } else {
    
            get_template_part( 'content', 'page' );
            
            }
        
        ?>
        
    </main>
    
</article>

<?php get_footer(); ?>