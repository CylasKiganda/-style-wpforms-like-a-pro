<?php

/**
 * Enqueuing the necessary scripts 
 */
 
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_scripts', 1001 );

function astra_child_enqueue_scripts(){
    wp_enqueue_style( 'styles-child', esc_url( get_stylesheet_directory_uri() ) . '/style.css', '1.2');
	wp_enqueue_script( 'wpforms-astra-child-tweaks', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/wpform-tweak.js', '1.1');
}

/**
 * Modifying the wpforms required field indicator 
 */
 
function wpf_dev_required_indicator( $text ) {
 
    return ' <span class="wpforms-required-label">' . __( 'REQ', 'wpforms' ) . '</span>';
}
 
add_filter( 'wpforms_get_field_required_label', 'wpf_dev_required_indicator', 10, 1 );