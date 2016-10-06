<?php 

function carrega_scripts(){

	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'carrega_scripts' );