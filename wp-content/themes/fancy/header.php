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
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>

    <header>
        
        <div class="sparkle star-1"></div>
        <div class="sparkle star-2"></div>
        <div class="sparkle star-3"></div>
        
        <div class="stitching">

            <div class="wrapper">
                <a class="masthead" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/masthead.png"/>
                </a>
                <a class="menu-link" href="#">Menu</a>
                <nav>
                    <ul>
                        <li>
                        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="stitched current">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/author" class="stitched">Author</a>
                            <div class="author"></div>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/events" class="stitched">Events</a>
                            <div class="events"></div>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/kids-fun" class="stitched">Kid's Fun</a>
                            <div class="fun"></div>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/charities" class="stitched">Charities</a>
                            <div class="charities"></div>
                        </li>
                        <li>
                            <a href="#" class="stitched">Merchandise</a>
                            <div class="merchandise">Coming Soon!</div>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/contact" class="stitched">Contact</a>
                            <div class="contact"></div>
                        </li>
                    </ul>
                </nav>
                <a href="http://www.amazon.com/Lord-Fancy-Pants-Debbie-Pakzaban/dp/1493713736" class="stitched btn">Get Your Copy Today!</a>
                <img class="slideDown book-closed" src="<?php echo get_template_directory_uri(); ?>/images/book_closed.png"/>
            </div>
            
        </div>
        
    </header>