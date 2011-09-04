<?php
/*
Plugin Name: Genesis Print Style
Plugin URI: http://www.ramoonus.nl/wordpress/genesis-print/
Description: This plugin adds a printer-ready CSS file for the Genesis Theme Framework.
Version: 1.1.3
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/
/* CSS */ 
function genesis_print() {
	//wp_enqueue_style('genesis', get_bloginfo('template_directory').'/style.css', false, '1.1.2', 'print');
	wp_enqueue_style('genesis-print-style', plugins_url('/css/print.css', __FILE__), false, '1.1.2', 'print');
}
add_action('init', 'genesis_print');
?>