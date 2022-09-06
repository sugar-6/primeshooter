<?php

function styles() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), false );
}
function main_js() {
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array(), false );
}
add_action( 'wp_enqueue_scripts', 'styles' );
add_action( 'wp_enqueue_scripts', 'main_js' );