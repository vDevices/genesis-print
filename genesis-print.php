<?php
/*
Plugin Name: Genesis Print Style
Plugin URI: http://www.ramoonus.nl/wordpress/genesis-print/
Description: This plugin adds a printer-ready CSS file for the Genesis Theme Framework.
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/
function genesis_print() {
	/* CSS */ 
	wp_deregister_style('genesis-print-style'); // de-register
	wp_register_style('genesis-print-style', plugins_url('/css/print.css', __FILE__), false, '1.0.0', "print"); // re-register
	wp_enqueue_style('genesis-print-style'); // load
}
add_action('init', 'genesis_print');
?>