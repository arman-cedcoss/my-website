<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>
<?php
/**
 * This is comment
 *
 * @package WordPress
 */

bloginfo( 'name' );
?>
|<?php bloginfo( 'description' ); ?></title>

<?php
// echo bloginfo( 'stylesheet_directory' ).
// echo bloginfo( 'template_url' ).
// echo get_stylesheet_uri().
// echo get_template_directory_uri().
?>

<?php wp_head(); ?>
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="#">Start Bootstrap</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">

<?php
	wp_nav_menu(
		array(
			'menu'       => 'primary-menu',
			'container'  => '',
            'items_wrap' => '<ul class="nav navbar-nav navbar-right headerMenu" style ="margin-left:500px; text-align:right; padding:15px; background-color:white;">%3$s</ul>',
            'items_wrap' => '<li class="nav navbar-nav navbar-right headerMenu" style ="text-align:right; margin:10px; margin-left:500px; padding:px;">%3$s</li>',
		)
	);
    ?>
<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    
</div>
</div>
</nav>
