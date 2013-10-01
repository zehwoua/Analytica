<?php
/*
Template Name: Autostart index page template
*
 * @package Analytica
 */

get_header(); ?>
<?php include TEMPLATEPATH.'/inc/autostart-header.php'; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main main_with_sidebar pull-right" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
				<h2>Downloads and Links</h2>
				<ul>
					<li><a href="<?php echo home_url(); ?>/autostart/technical/" target="blank">AutoStart Infusion System Technical Information Pack.</a></li>
					<li><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/ALT002-0187-v1.wmv" target="blank">AutoStart Infusion System Animation. (WMV format, 5,957,936 bytes)</a></li>
					<li><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/ALT002-0109-v2.pdf" target="blank">AutoStart Infusion System Brochure. (PDF format, 432,680 bytes)</a></li>
				</ul>
			<?php endwhile; ?>

			<?php analytica_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<div id="panel" class=" autostart clearfix pull-left">
			<img src="<?php echo get_template_directory_uri();?>/images/autostart/needle.jpg" alt="Autostart" title="Autostart">
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>