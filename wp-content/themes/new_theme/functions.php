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
	register_nav_menu( 'primary','primary header navigation' );
	register_nav_menu( 'secondary','footer navigation' );
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
set_post_thumbnail_size( 1200, 9999 );

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

/**
=============================================================
					WIDGETS&SIDEBAR
=============================================================
 *
 *
 */
function awesome_widget_setup()	{
	register_sidebar(
		array(
			'name' => ' sidebar ',
			'id'	=> 'sidebar-1',
			'class' =>'custom',
			'description' => 'standard sidebar',
			'before-widget' => '<aside id="%1$s" class="widget %$2s">',
			'after-widget' => '<aside>',
			'before-title' => '<h1 class="widget-title">',
			'after-title' => '</h1>',)
);
}
add_action('widgets_init','awesome_widget_setup');

/**
 * This is comment
=============================================================
					ADDING POST-FORMATS
=============================================================
 *
 *  @package WordPress
 */

add_theme_support('post-formats',array('aside','image','video'));



/**
 * This is comment
=============================================================
					AUTOMATIC FEED-LINKS
=============================================================
 *
 *  @package WordPress
 */

add_theme_support( 'automatic-feed-links' );


/**
 * This is comment
=============================================================
					STYLE EDITOR
=============================================================
 *
 *  @package WordPress
 */

add_editor_style( get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );



/**
 * This is comment
=============================================================
					ADDING CUSTOM-LOGO
=============================================================
 *
 *  @package WordPress
 */

// Custom logo.
$logo_width  = 120;
$logo_height = 90;

// If the retina setting is active, double the recommended width and height.
if ( get_theme_mod( 'retina_logo', false ) ) {
	$logo_width  = floor( $logo_width * 2 );
	$logo_height = floor( $logo_height * 2 );
}

add_theme_support(
	'custom-logo',
	array(
		'height'      => $logo_height,
		'width'       => $logo_width,
		'flex-height' => true,
		'flex-width'  => true,
	)
);

/**
 * This is comment
=============================================================
					TITLE-TAG
=============================================================
 *
 *  @package WordPress
 */

add_theme_support( 'title-tag' );

/**
* This is comment
=============================================================
					HTML-5
=============================================================
*
* @package WordPress
* Switch default core markup for search form, comment form, and comments
* to output valid HTML5.
*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

/**
 * This is comment
=============================================================
					CONTENT-WIDTH
=============================================================
 *
 *  @package WordPress  //CONTENT-WIDTH
 */
if ( ! isset( $content_width ) )
	$content_width = 625;

function new_theme_content_width() {
	if ( is_page_template( 'full-width-page.php' ) || is_attachment() ) {
		global $content_width;
		$content_width = 960;
	}
}
add_action( 'template_redirect', 'new_theme_content_width' );





















