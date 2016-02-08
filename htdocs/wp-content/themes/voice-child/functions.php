<?php 

/* 
	This is Voice Child Theme functions file
	You can use it to modify specific features and styling of Voice Theme
*/	

add_action( 'after_setup_theme', 'vce_child_theme_setup', 99 );

function vce_child_theme_setup(){
	add_action('wp_enqueue_scripts', 'vce_child_load_scripts');
}

function vce_child_load_scripts() {	
	wp_register_style('vce_child_load_scripts', trailingslashit(get_stylesheet_directory_uri()).'style.css', false, THEME_VERSION, 'screen');
	wp_enqueue_style('vce_child_load_scripts');
}

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
        'name' => 'Sidebar',
	'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
register_sidebar(array(
        'name' => 'header_right',
	'before_widget' => '<div class="header_right" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));	  
	}


?>
