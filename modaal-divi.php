<?php
/**
 * Plugin Name: Modaal for Divi
 * Plugin URI:  https://github.com/Region13/modaal-divi
 * Description: WCAG 2.0 Level AA accessible modal window plugin by Humaan, adapted as WordPress Plugin for Divi theme. Visit Plugin site for usage instructions.
 * Version:     1.0.0
 * Author:      ESC Region 13
 */

// Enqueue scripts and styles from CDN
function modaal_enqueue_scripts() {
	//enqueue scripts here
	wp_enqueue_script( 'modaal.min', 'https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'modaal-triggers', plugins_url( 'public/js/modaal-triggers.js', __FILE__ ), array( 'modaal.min' ) );

	wp_enqueue_style( 'modaal.min' , 'https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css' );
	wp_enqueue_style( 'modaal-custom' , plugins_url( 'public/css/modaal-custom.css', __FILE__ ), array( 'modaal.min' ) );

}
add_action( 'wp_enqueue_scripts', 'modaal_enqueue_scripts' );

