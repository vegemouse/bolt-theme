<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bolt
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bolt' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="very-top">
			<div>
				<p>Vancouver: (360) 699 - 4407<br />
				Toll Free: 1 (800) 822 - 2658</p>
			</div>
			<div>
				<p>
					<a href="/cart">Cart</a> | 

					<?php if ( is_user_logged_in() ) { ?>
 					<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('My Account','woothemes'); ?></a>
					<?php }
					else { ?>
 					<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Client Sign In','woothemes'); ?></a>
					<?php } ?>



				</p>
			</div>
		</div>

	</header>

	<div id="content" class="site-content">
