<?php 


/* Title + Logo */

function followandrew_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','followandrew_theme_support');




/* Menus */

function followandrew_menus(){
	$location = array(
		'primary' => "Desktop primary left sidebar",
		'footer' => "footer Menu Items"
	);
	register_nav_menus( $location );
}

add_action('init','followandrew_menus');


/* Styles */

function followandrew_register_styles(){

	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('followandrew-style', get_template_directory_uri() . "/style.css", array('followandrew-bootstrap'), $version, 'all');
	wp_enqueue_style('followandrew-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", '4.4.1', 'all');
	wp_enqueue_style('followandrew-fontawesome', get_template_directory_uri() . "/assets/css/all.min.css" , '5.13', 'all');
	
	
}

add_action('wp_enqueue_scripts', 'followandrew_register_styles');



/* Scripts */

function followandrew_register_scripts(){

	wp_enqueue_script('followandrew-jqueryslim', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '1.0', true);
	wp_enqueue_script('followandrew-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.0', true);
	wp_enqueue_script('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '1.0', true);
	wp_enqueue_script('followandrew-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);


}

add_action('wp_enqueue_scripts', 'followandrew_register_scripts');



/* Widgets */



function followandrew_widget_area(){

	register_sidebar(
		array(
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
			'after_widget' => '</ul>',
			'name' => 'sidebar-1',
			'id' => 'sidebar-1',
			'description'   => 'Add widgets here to appear in your region.',
		)
	);

	register_sidebar(
		array(
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
			'after_widget' => '</ul>',
			'name' => 'Footer Area',
			'id' => 'footerbar-1',
			'description'   => 'Add widgets here to appear in your region.',
		)
	);
}



add_action('widgets_init', 'followandrew_widget_area');

?>