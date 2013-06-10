<?php
/*
enqueue.php

Includes the style and script defnitions.
 */

add_action( 'wp_enqueue_scripts', 'v_site_enqueues', 999 );
function v_site_enqueues() {

	/*** REGISTER ***/

	// I'm using the Bower version, you should customize this for production by
	// going to http://modernizr.com/download/ and only checking the things you
	// will actually need.
	wp_register_script(
		'modernizr',
		THEME_URL . '/components/modernizr/modernizr.js',
		array(),
		'2.6.2',
		false );
	// This file calls all the JS used in Vanilli. You can place JS here or any
	// place you want to register, really.
	wp_register_script(
		'vanilli-scripts',
		THEME_URL . '/javascript/vanilli-scripts.js',
		array('jquery'),
		VERSION,
		true );
	// Prism.js syntax highlighting, it's awesome
	// http://prismjs.com
	wp_register_script(
		'prismjs',
		THEME_URL . '/components/prism/prism.js',
		array(),
		VERSION,
		true );

	/*** QUEUE ***/

	// Let's use Sass and compile into one stylsheet. Compress for production.
	wp_enqueue_style(
		'main',
		THEME_URL . '/css/main.css',
		array(),
		VERSION,
		'all' );
	wp_enqueue_script( 'modernizr' );
	// Use a plugin to load from CDN if you want, make sure it loads in
	// noConflict mode for compatibility. Probably better to just use native
	// if you can afford the bandwidth.
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'vanilli-scripts' );
	wp_enqueue_script( 'prismjs' );
}

?>
