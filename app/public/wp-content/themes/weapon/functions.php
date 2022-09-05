<?php

function styles() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), false );
}
add_action( 'wp_enqueue_scripts', 'styles' );