<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?> 
<!-- Page Content -->
<div class="container">

<div class="row">

<!-- Blog Entries Column -->
<div class="col-md-8">

<h1 class="my-4">My Website
<small>Theme</small>
</h1>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//echo 'THIS ID THE POST FORMAT:' .get_post_format();
		?>
		//content.php is working
		<?php	get_template_part('content',get_post_format()); ?>

		<?php
	}
}
?>
<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
	<li class="page-item">
		<a class="page-link" href="#">&larr; Older</a>
	</li>
	<li class="page-item disabled">
		<a class="page-link" href="#">Newer &rarr;</a>
	</li>
</ul>

	</div>

<?php get_sidebar(); ?>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
