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

// WP Updates Code
require_once('wp-updates-plugin.php');
new WPUpdatesPluginUpdater_1197( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));
