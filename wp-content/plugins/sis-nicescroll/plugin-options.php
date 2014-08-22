<div class="wrap">
    <h2><?php _e('Nicescroll Settings') ?></h2>
    <form method="post" action="options.php">
        <?php settings_fields('sis_nicescroll_plugin_options'); ?>
        <?php $options = get_option( 'sis_nicescroll_options' ); ?>

        <table class="form-table">
        	<tbody>
          		<tr valign="top">
            		<th scope="row">
              			<label><?php _e('Cursor Color') ?></label>
            		</th>
            		<td>
              			<input type="text" name="sis_nicescroll_options[cursor_color]" id="cursor_color" value="<?php esc_attr_e($options['cursor_color']); ?>">
              			<p class="description"><?php _e('Select cursor color. You can also write hexadecimal value of color. Defaults color is &lsquo; #000000 &lsquo;') ?></p>
            		</td>
          		</tr>
          		<tr valign="top">
            	<th scope="row">
              		<label><?php _e('Cursor Border Color') ?></label>
            	</th>
            	<td>
              		<input type="text" name="sis_nicescroll_options[cursor_border_color]" id="cursor_border_color" value="<?php esc_attr_e($options['cursor_border_color']); ?>">
              		<p class="description"><?php _e('Select cursor color. You can also write hexadecimal value of color. Defaults color is &lsquo; #000000 &lsquo;') ?></p>
            	</td>
          		</tr>
	          	<tr valign="top">
	            	<th scope="row">
	              		<label><?php _e('Cursor Width') ?></label>
	            	</th>
	            	<td>
	              		<input type="text" name="sis_nicescroll_options[cursor_width]" id="cursor_width" value="<?php esc_attr_e($options['cursor_width']); ?>">
	              		<p class="description"><?php _e('Write cursor Width at pixels. Defaults width is &lsquo; 10px &lsquo;') ?></p>
	            	</td>
	          	</tr>
	          	<tr valign="top">
	            	<th scope="row">
	              		<label><?php _e('Cursor Border Width') ?></label>
	            	</th>
	            	<td>
	              		<input type="text" name="sis_nicescroll_options[cursorborder_width]" id="cursorborder_width" value="<?php esc_attr_e($options['cursorborder_width']); ?>">
	              		<p class="description"><?php _e('Write cursor border width at pixels. Defaults width is &lsquo; 0px &lsquo;') ?></p>
	            	</td>
	          	</tr>
	          	<tr valign="top">
	            	<th scope="row">
	              		<label><?php _e('Cursor Border Radius') ?></label>
	            	</th>
	            	<td>
	              		<input type="text" name="sis_nicescroll_options[cursorborderradius]" id="cursorborderradius" value="<?php esc_attr_e($options['cursorborderradius']); ?>">
	              		<p class="description"><?php _e('Write cursor border radius at pixels. Defaults border radius is &lsquo; 0px &lsquo;') ?></p>
	            	</td>
	          	</tr>
	          	<tr valign="top">
	            	<th scope="row">
	              		<label><?php _e('Cursor Scroll Speed') ?></label>
	            	</th>
	            	<td>
	              		<input type="text" name="sis_nicescroll_options[scrollspeed]" id="scrollspeed" value="<?php esc_attr_e($options['scrollspeed']); ?>">
	              		<p class="description"><?php _e('Write cursor scroll speed. Defaults border radius is &lsquo; 60 &lsquo;') ?></p>
	            	</td>
	          	</tr>
	        </tbody>
    	</table>
        <p class="submit"><input type="submit" value="<?php _e('Save Changes') ?>" class="button button-primary" id="submit" name="submit"></p>
    </form>
</div>