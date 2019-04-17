<?php
//cargar estilos
function wmt_theme_style()
{
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/css/jumbotron.css');
	wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts','wmt_theme_style');
//caragar js
function wmt_theme_js()
{
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'),'','true');
}
add_action('wp_enqueue_scripts','wmt_theme_js');
//cargar menus
add_theme_support( 'menus' );

function register_mis_menus() {
  register_nav_menus(
    array(
      'principal-menu' => __( 'menu principal' ),
      'footer-menu' => __( 'menu pie_pagina' ),
    )
  );
}
add_action( 'init', 'register_mis_menus' );

//thumbnails
add_theme_support( 'post-thumbnails' );
 ?>