<?php
	$url = $_SERVER["REQUEST_URI"];
	$current_url = explode("/", $url);
	$current_url = array_filter($current_url);
	$current = end($current_url);
	if ($current == "autostart-infusion-system"){
		wp_redirect( home_url()."/autostart/" );
		exit; 
	}
?>
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Analytica
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="products" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>