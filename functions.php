<?php


function themeslug_enqueue_style() {
	
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style2', get_template_directory_uri()."/style2.css" );
	wp_enqueue_script('script', get_template_directory_uri()."/script.js");
	
}


add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

function customBar_widgets_init(){
	
	register_sidebar(array(
		'name' => 'main menu',
		'id' => 'main-menu'
	));
	
	
	
	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'			=> 'Bottom bar',
		'id'			=> 'bottom_bar',
	));
	
	
}

add_action('widgets_init', 'customBar_widgets_init');




?>