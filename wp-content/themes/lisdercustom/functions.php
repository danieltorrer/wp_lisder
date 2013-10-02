<?php 
	// activate widget area
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=>'Sidebar Widgets',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
		));
}

if (function_exists('add_theme_support')) { add_theme_support('post-thumbnails'); }

//Enable custom menus
add_theme_support( "menus" );



function theme_styles(){
	wp_enqueue_style("foundation", get_template_directory_uri() . '/css/foundation.min.css');
	wp_enqueue_style("normalize", get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style("main", get_template_directory_uri() . '/style.css');
}

function theme_js(){
	//wp_register_script("jquery", get_template_directory_uri() . "./js/jquery.js", "", "", true);
	//wp_register_script("foundation", get_template_directory_uri() . "./js/foundation.js",array(), "", true);
	//wp_enqueue_scripts("jquery");
	//wp_enqueue_scripts("foundation");

}

add_action('wp_enqueue_scripts',"theme_styles");
add_action('wp_enqueue_scripts',"theme_js");

?>