<?php
/**
 * This is comment
 * =============================================================
 *         ENQUEUING SCRIPTS
 * =============================================================
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
=============================================================
 *         ADDING MENU
=============================================================
 *
 *  @package WordPress
 */
function register_menu() {
	// menu register code.
	register_nav_menu('primary','primary header navigation');
	register_nav_menu('secondary','footer navigation');
	add_theme_support( 'menus' );
}
	// attach with action hook.

add_action( 'init', 'register_menu' );

/*
=============================================================
 *         POST-THUMBNAIL
=============================================================
*
*
*/
add_theme_support( 'post-thumbnails' );

/*
=============================================================
 *         CUSTOM-BACKGROUND
=============================================================
*
*
*/

add_theme_support( 'custom-background' );

/*
=============================================================
 *         CUSTOM-HEADER
=============================================================
*
*
*/
add_theme_support( 'custom-header' );

/*
=============================================================
 *         WIDGETS&SIDEBAR
=============================================================
*
*
*/
function awesome_widget_setup()	{
	register_sidebar(
		array(
		'name' => 'sidebar',
		'id' =>'sidebar-1',
		'class' =>'custom',
		'description' => 'standard sidebar',
		'before-widget' => '<aside id="%1$s" class="widget %$2s">',
		'after-widget' => '<aside>',
		'before-title' => '<h1 class="widget-title">',
		'after-title' => '</h1>',)
);
}
add_action('widgets_init','awesome_widget_setup');
















