<!-- Footer -->
<div style="background-color: black; color: white;">
<?php wp_nav_menu(array(
	'menu'       => 'primary-menu',
	'container'  => '',
	'items_wrap' => '<ul class="nav navbar-nav navbar-right headerMenu" style ="margin-left:500px; text-align:right; padding:15px; background-color:white; text-decoration:inline;">%3$s</ul>',
	'items_wrap' => '<li class="nav navbar-nav navbar-right headerMenu" style ="text-align:right; margin:10px; margin-left:500px; padding:px;">%3$s</li>',
));
?>
</div>
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
	</div>
	<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<?php
/**
 * This is comment
 *
 * @package WordPress
 */
wp_footer(); ?>
</body>
</html>
