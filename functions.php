<?php 

function load_scripts() {
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', null, '1.0', 'all' );
	wp_enqueue_script( 'bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), '5.1.3', true);
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', null, '5.1.3', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

register_nav_menus( 
	array(
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu',
	)
);