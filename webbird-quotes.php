<?php
/**
 * Plugin Name: WebBird Quotes
 * Plugin URI:  https://webbird.be
 * Description: WebBird Quotes.
 * Version:     1.0.0
 * Author:      Filip Van Reeth
 * Author URI:  https://webbird.be
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function webbird_quotes_load_textdomain()
{
    load_plugin_textdomain('webbird-quotes', false, basename( dirname( __FILE__ ) ) . '/languages' );
}

add_action( 'after_setup_theme', 'webbird_quotes_load_textdomain' );

require_once( plugin_dir_path( __FILE__ ) . '/assets/acf/quotes.php' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
    'page_title' 	=> __('Quotes', 'webbird-quotes'),
		'menu_title'	=> __('Quotes', 'webbird-quotes'),
		'menu_slug' 	=> 'webbird-quotes',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-plugins',
		'redirect'		=> true
	));
}

function webbird_quotes_start() {
	$webbird_quotes = new Webbird_Quotes_Shortcode();
	$webbird_quotes->initialize();
}

webbird_quotes_start();

class Webbird_Quotes_Shortcode {

	public function initialize() {

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );

	}

	public function enqueue_styles() {
		wp_enqueue_style(
			'webbird-quotes',
			plugins_url( 'webbird-quotes/css/styles.css' )
		);
	}
}

function webbird_quotes_shortcode( $atts ){
	require_once( plugin_dir_path( __FILE__ ) . '/views/webbird-quotes-shortcode.php' );
}
add_shortcode( 'webbird-quotes', 'webbird_quotes_shortcode' );
