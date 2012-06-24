<?php
/*
Plugin Name: WP Custom Login
Description: With this plugin you add the header and footer to your login page
Author: Ninos Ego
Version: 1.2.0
Author URI: http://ninosego.de/
*/

add_action( 'login_head', 'custom_login_header' );
function custom_login_header() {
	echo '<link rel="stylesheet" href="' . get_bloginfo('stylesheet_directory') . '/wp-custom-login.css" type="text/css" />';
	do_action('wp_custom_login_header_before');
	get_header();
	do_action('wp_custom_login_header_after');
}

add_action( 'login_footer', 'custom_login_footer' );
function custom_login_footer() {
	do_action('wp_custom_login_footer_before');
	get_footer();
	do_action('wp_custom_login_footer_after');
}