<?php 

function provo_theme_support(){
	add_theme_support("title-tag");
}

add_action("after_setup_theme","provo_theme_support");

function provo_register_styles(){
	wp_enqueue_style("bootstrap-style",get_template_directory_uri() . "/assets/css/bootstrap.min.css",array("custom-style"),"5.2.0");
	wp_enqueue_style("custom-style",get_template_directory_uri() . "/assets/css/styles.css",array(),"1.0");
	wp_enqueue_style("fontawesome-style",get_template_directory_uri() . "/assets/css/all.min.css",array());
}

add_action("wp_enqueue_scripts","provo_register_styles");

function provo_register_scripts(){
	wp_enqueue_script("bootstrap-script",get_template_directory_uri() . "assets/js/bootstrap.min.js",array(),"5.2.0");
	wp_enqueue_script("fontawesome-script",get_template_directory_uri() . "/assets/js/all.min.js",array());
}

add_action("wp_enqueue_scripts","provo_register_scripts")

?>