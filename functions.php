<?php


add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_scripts', 1001 );

function astra_child_enqueue_scripts(){
    wp_enqueue_style( 'styles-child', esc_url( get_stylesheet_directory_uri() ) . '/style.css', '1.2');
	wp_enqueue_script( 'wpforms-astra-child-tweaks', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/wpform-tweak.js', '1.1');
}