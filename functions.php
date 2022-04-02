<?php 

require get_template_directory() . '/inc/customizer.php';
 
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

function load_scripts() {
	wp_enqueue_script( 'bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), '5.1.3', true);
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', null, '5.1.3', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', null, '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

function learnwp_gutenberg_fonts(){
	wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,900' );
	wp_enqueue_style( 'oswald-font', 'https://fonts.googleapis.com/css?family=Oswald:200,400,900' );
}
add_action( 'enqueue_block_editor_assets', 'learnwp_gutenberg_fonts' );

function learwp_config(){
	
	register_nav_menus( 
		array(
			'header_menu' => __( 'Header Menu', 'learnwp' ),
			'footer_menu' => __( 'Footer Menu', 'learnwp' )
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
	add_theme_support( 'custom-logo', array(
		'height'	=>	'110',
		'width'		=>	'200'
	) );
	
	$textdomain = 'learnwp';
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );
	
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => __( 'Blood Red', 'learnwp' ),
			'slug' => 'blood-red',
			'color' => '#b9121b'
		),
		array(
			'name' => __( 'Snow White', 'learnwp' ),
			'slug' => 'snow-white',
			'color' => '#ffffff'
		)
	) );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/style-editor.css' );
	add_theme_support( 'wp-block-styles' );
	
}

add_action( 'after_setup_theme', 'learwp_config', 0 );

add_action( 'widgets_init', 'learn_sidebars' );
function learn_sidebars(){
	register_sidebar(
		array(
			'name'			=>	__( 'Home Sidebar', 'learnwp' ),
			'id'			=>	'sidebar-1',
			'description'	=>	__( 'This is Home Sidebar. Add your widgets here', 'learnwp' ),
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	__( 'Blog Sidebar', 'learnwp' ),
			'id'			=>	'sidebar-2',
			'description'	=>	__( 'This is Blog Sidebar. Add your widgets here', 'learnwp' ),
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	__( 'Service 1 Sidebar', 'learnwp' ),
			'id'			=>	'service-1',
			'description'	=>	__('This is Service 1 Sidebar. Add your widgets here', 'learnwp' ),
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	__( 'Service 2 Sidebar', 'learnwp' ),
			'id'			=>	'service-2',
			'description'	=>	__( 'This is Service 2 Sidebar. Add your widgets here', 'learnwp' ),
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	__( 'Service 3 Sidebar', 'learnwp' ),
			'id'			=>	'service-3',
			'description'	=>	__( 'This is Service 3 Sidebar. Add your widgets here', 'learnwp' ),
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	__( 'Social Media', 'learnwp' ),
			'id'			=>	'social-media',
			'description'	=>	__( 'This is Social Media Sidebar. Add your widgets here', 'learnwp' ),
			'before_widget'	=>	'<div class="widget-wrapper">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>'
		)
	);
}

