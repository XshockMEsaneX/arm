<?php 

function arm_enqueue_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_style( 'original-theme', get_template_directory_uri() . '/css/original-theme.css', 'bootstrap' );
}

add_action( 'wp_enqueue_scripts', 'arm_enqueue_scripts' );

 ?>