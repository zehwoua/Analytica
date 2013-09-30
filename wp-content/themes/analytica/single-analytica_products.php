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