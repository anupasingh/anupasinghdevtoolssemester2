<?php
function my_theme_enqueue_styles () {
	
	$parent_style = 'twentysixteen-style' ; 

	wp_enqueue style ( $parent_style, get_template_directory_uri () . '/style.css');
	wp_enqueue_style ( 'child-style', 
		get_stylesheet_directory_uri () .
		array( $parent_style),
		wp_get_theme ()->get('Version')
		);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>
