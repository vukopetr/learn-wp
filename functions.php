<?php 

function load_scripts() {
	wp_enqueue_script( 'bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), '5.1.3', true);
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', null, '5.1.3', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', null, '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

function learwp_config(){
	
	register_nav_menus( 
		array(
			'header_menu' => 'Header Menu',
			'footer_menu' => 'Footer Menu',
		)
	);
	
	$args = array(
		'height'	=>	225,
		'width'		=>	1920
	);
	add_theme_support( 'custom-header', $args ); 
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'learwp_config', 0 );

add_action( 'widgets_init', 'learn_sidebars' );
function learn_sidebars(){
	register_sidebar(
		array(
			'name'			=>	'Home Sidebar',
			'id'			=>	'sidebar-1',
			'description'	=>	'This is Home Sidebar. Add your widgets here',
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	'Blog Sidebar',
			'id'			=>	'sidebar-2',
			'description'	=>	'This is Blog Sidebar. Add your widgets here',
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	'Service 1 Sidebar',
			'id'			=>	'service-1',
			'description'	=>	'This is Service 1 Sidebar. Add your widgets here',
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	'Service 2 Sidebar',
			'id'			=>	'service-2',
			'description'	=>	'This is Service 2 Sidebar. Add your widgets here',
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	'Service 3 Sidebar',
			'id'			=>	'service-3',
			'description'	=>	'This is Service 3 Sidebar. Add your widgets here',
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
}

