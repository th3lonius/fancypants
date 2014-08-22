<?php
/*
Plugin Name: WordPress Nicescroll
Description: Nicescroll is a jquery plugin for WordPress site, for nice scrollbars with a very similar ios/mobile style.
Version: 1.1
Author: sayful
Author URI: http://sis.netai.net
License: GPLv2 or later
*/
/* Load plugin textdomain. */
function sis_nicescroll_load_textdomain() {
  	load_plugin_textdomain( 'nicescroll', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
add_action( 'plugins_loaded', 'sis_nicescroll_load_textdomain' );

// Set up our WordPress Plugin
function sis_nicescroll_check_WP_ver()
{
	$options_array = array(
      	'cursor_color' => '#000000', 
        'cursor_border_color' => '#000000', 
        'cursor_width' => '10px', 
        'cursorborder_width' => '0px', 
        'cursorborderradius' => '0px', 
      	'scrollspeed' => '60', 
    );
	if ( get_option( 'sis_nicescroll_options' ) !== false ) {
		// The option already exists, so we just update it.
      	update_option( 'sis_nicescroll_options', $options_array );
   } else{
   		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
   		add_option( 'sis_nicescroll_options', $options_array );
   }
}
register_activation_hook( __FILE__, 'sis_nicescroll_check_WP_ver' );

// add the admin options page
add_action('admin_menu', 'sis_nicescroll_add_menu');
function sis_nicescroll_add_menu(){
   add_options_page( 'sis nicescroll', 'Nicescroll', 'manage_options', 'sis-nicescroll/plugin-options.php');
}

// This function registers our options to be updated.
add_action('admin_init', 'sis_nicescroll_register_settings');
function sis_nicescroll_register_settings(){
   register_setting( 'sis_nicescroll_plugin_options', 'sis_nicescroll_options','sis_nicescroll_validate_data');
}

// validate our options
function sis_nicescroll_validate_data($input) {
  $options = get_option('sis_nicescroll_options');

  // Strips all of the HTML in the content. 
  $options['cursor_color'] = wp_filter_nohtml_kses( $input['cursor_color'] );
  $options['cursor_border_color'] = wp_filter_nohtml_kses( $input['cursor_border_color'] );
  $options['cursor_width'] = wp_filter_nohtml_kses( $input['cursor_width'] );
  $options['cursorborder_width'] = wp_filter_nohtml_kses( $input['cursorborder_width'] );
  $options['cursorborderradius'] = wp_filter_nohtml_kses( $input['cursorborderradius'] );  
  // Validate scrollspeed as an integer
  $options['scrollspeed'] = intval( $input['scrollspeed'] );

  return $options;
}

/* Adding Latest color picker from Wordpress for admin page */
function sis_nicescroll_color_picker( $hook_suffix ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'nicescroll-color-handle', plugins_url('/js/main.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'sis_nicescroll_color_picker' );

/* Adding Latest jQuery for Wordpress front page */
function sis_nicescroll_plugin_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('sis_nicescroll_main_script',plugins_url( '/js/jquery.nicescroll.min.js' , __FILE__ ),array( 'jquery' ));
}
add_action('init', 'sis_nicescroll_plugin_scripts');

function sis_nicescroll_activation_hook(){ ?>
<?php $options = get_option( 'sis_nicescroll_options' ); ?>
<script type="text/javascript">
jQuery(document).ready(function() {  
    jQuery("html").niceScroll({
	    cursorcolor:"<?php echo $options['cursor_color']; ?>",
	    cursorwidth:"<?php echo $options['cursor_width']; ?>",
	    cursorborder:"<?php echo $options['cursorborder_width']; ?> solid <?php echo $options['cursor_border_color']; ?>",
	    cursorborderradius:"<?php echo $options['cursorborderradius']; ?>",
	    scrollspeed:<?php echo $options['scrollspeed']; ?>,
    });
});
</script>
<?php }
add_action('wp_footer','sis_nicescroll_activation_hook');

?>