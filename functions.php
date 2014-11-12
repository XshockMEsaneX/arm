<?php 

function arm_enqueue_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic', false );
	wp_enqueue_style( 'original-theme', get_template_directory_uri() . '/css/original-theme.css', array( 'bootstrap', 'google-fonts' ) );
	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?sensor=false', false );
	wp_enqueue_script( 'my-map', get_template_directory_uri() . '/js/google-map.js', array( 'google-map' ) );
}

add_action( 'wp_enqueue_scripts', 'arm_enqueue_scripts' );

 ?>