<?php
/*
 Template Name: About-us page template
 * @package Analytica
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			<div class="clearfix">
				<img src="<?php echo get_template_directory_uri();?>/images/asx.jpg" title="asx" alt="asx" class="pull-right">
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
