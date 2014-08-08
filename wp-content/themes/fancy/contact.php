<form action="<?php echo get_template_directory_uri(); ?>/process.php" method="post" id="contact_form">
    <div>
         <label for="name">Your Name:</label>
         <input type="text" name="name" id="name" rel="req" value="" tabindex="1" />
    </div>
    <div>
         <label for="email">Your Email:</label>
         <input type="text" name="email" id="email" rel="req" value="" tabindex="2" />
    </div>
	<div>
		<label for="message">Message:</label>
		<textarea cols="40" rows="8" name="message" id="message"></textarea>
	</div>
	<div id="loader">
	    <input type="submit" value="Submit" /> 
    </div>
</form>