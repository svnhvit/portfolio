<?php

/**Load CSS and Javascript**/

function load_styles_and_scripts(){

	//load styles
	wp_enqueue_style(
		'bootstrap_styles',
		get_template_directory_uri().'/css/bootstrap.min.css'
		);

	wp_enqueue_style(
		'main_styles',
		get_template_directory_uri().'/style.css'
		);

	//load scripts
	wp_enqueue_script(
		'jquery',
		'http://code.jquery.com/jquery.min.js'
		);

	wp_enqueue_script(
		'bootstrap_scripts',
		get_template_directory_uri().'/js/bootstrap.min.js'
		);

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), false , true );
}



add_action('wp_enqueue_scripts', 'load_styles_and_scripts');	

register_nav_menus(array('main-nav' => 'Main Navigation'));

register_nav_menus( array(
    'footer_menu' => 'My Custom Footer Menu'
) );

register_sidebar( array(
	'name' => 'footer-sidebar',
	'description' => 'Footer Sidebar',
	'before_widget' => '<div class="footer-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	) );	

add_theme_support('post-thumbnails' );

