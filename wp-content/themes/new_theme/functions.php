<?php
/**
 * This is comment
 *
 * @package WordPress
 */

/**
 * This is comment
 *
 * @package WordPress
 */
function themeslug_enqueue_style() {
	wp_enqueue_style( 'main_style', get_stylesheet_uri(), array(), '1.1', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'blog-home', get_template_directory_uri() . '/css/blog-home.css', array(), '1.1', 'all' ); }

/**
 * This is comment
 *
 * @package WordPress
 */
function themeslug_enqueue_script() {
	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '1.1', true );
	wp_enqueue_script( 'bootstrap.bundle.min.js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.1', true );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

/**
 * This is comment
 *
 * @package WordPress
 */
function register_menu() {
	// menu register code.
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'footer-menu'  => __( 'Footer Menu' ),
			'sidebar-menu' => __( 'Sidebar Menu' ),
		)
	);
}
	// attach with action hook.

add_action( 'init', 'register_menu' );


add_theme_support( 'post-thumbnails' );



function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    )
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );


add_theme_support( 'custom-header' );














