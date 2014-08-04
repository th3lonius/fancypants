<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        
        <div class="stitching">

            <div class="wrapper">
                <h1></h1>
                <nav>
                    <ul>
                        <li>
                            <a href="<?php bloginfo( 'site_url' ); ?>/author" class="stitched">The Author</a>
                            <div class="author"></div>
                        </li>
                        <li>
                            <a href="#" class="stitched">Events</a>
                            <div class="events"></div>
                        </li>
                        <li>
                            <a href="#" class="stitched">Kid's Fun</a>
                            <div class="fun"></div>
                        </li>
                        <li>
                            <a href="#" class="stitched">Charities</a>
                            <div class="charities"></div>
                        </li>
                        <li>
                            <a href="#" class="stitched">Merchandise</a>
                            <div class="merchandise"></div>
                        </li>
                        <li>
                            <a href="#" class="stitched">Contact</a>
                            <div class="contact"></div>
                        </li>
                    </ul>
                </nav>
                <a href="#" class="stitched btn">Buy The Book!</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/book_closed.png"/>
            </div>
            
        </div>
        
    </header>