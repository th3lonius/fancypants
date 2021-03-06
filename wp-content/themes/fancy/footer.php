<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 */
?>

<footer id="colophon" role="contentinfo">
    
    <div class="stitching">
        
        <div class="wrapper">
            
            <div class="main">
        
                <img class="mastfoot" src="<?php echo get_template_directory_uri(); ?>/images/masthead.png"/>

                <a href="https://www.facebook.com/lordfancypantsbooks"><img class="facebook" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"/></a>
                
            </div>
    
            <div class="contact">
                <a href="<?php echo get_site_url(); ?>/contact" class="btn">Contact the Author</a>
            </div>
            
        </div>
            
    </div>    

</footer><!-- #colophon -->

<?php wp_footer(); ?>	
</body>
</html>