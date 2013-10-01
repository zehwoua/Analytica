<?php
/*
Template Name: Autostart distributors page template
*
 * @package Analytica
 */

get_header(); ?>
<?php include TEMPLATEPATH.'/inc/autostart-header.php'; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<p class="blue text-bold">Australia and New Zealand</p>
				<p class="blue text-bold">Taiwan and South-East Asia</p>
				<p class="blue text-bold">Brazil and South America</p>

			<?php endwhile; ?>

			<?php analytica_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>