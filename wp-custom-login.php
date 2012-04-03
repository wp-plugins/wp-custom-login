<?php
/*
Plugin Name: WP Custom Login
Description: With this plugin you add the header and footer to your login page
Author: Ninos Ego
Version: 1.0.0
Author URI: http://ninosego.de/
*/

add_action( 'login_head', 'custom_login_header' );
function custom_login_header() {
	echo '<link rel="stylesheet" href="' . get_bloginfo('stylesheet_directory') . '/custom-login.css" type="text/css" />';
	get_header();
}

add_action( 'login_footer', 'custom_login_footer' );
function custom_login_footer() {
	get_footer();
}