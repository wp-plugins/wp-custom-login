<?php
/*
Plugin Name: WP Custom Login
Description: This plugin is adding the header and footer to the login page
Author: Ninos Ego
Version: 1.3.1
Author URI: http://ninosego.de/
*/

if( wp_custom_login_is_login_page() )
	wp_enqueue_script('jquery');

add_action( 'login_head', 'wp_custom_login_head_javascript' );
function wp_custom_login_head_javascript() {
?>
	<script type="text/javascript">
		$('#wp-admin-css, #colors-fresh-css').remove();
	</script>
<?php
}

add_action( 'login_head', 'wp_custom_login_header' );
function wp_custom_login_header() {
	echo '<link rel="stylesheet" href="' . get_bloginfo('stylesheet_directory') . '/wp-custom-login.css" type="text/css" />';
	do_action('wp_custom_login_header_before');
	get_header();
	do_action('wp_custom_login_header_after');
}

add_action( 'login_footer', 'wp_custom_login_footer' );
function wp_custom_login_footer() {
	do_action('wp_custom_login_footer_before');
	get_footer();
	do_action('wp_custom_login_footer_after');
}

function wp_custom_login_is_login_page() {
	return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}