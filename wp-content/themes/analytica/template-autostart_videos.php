<?php
/*
Template Name: Autostart videos page template
*
 * @package Analytica
 */

get_header(); ?>
<?php 
	$url = $_SERVER["REQUEST_URI"];
	$current_url = explode("/", $url);
	$current_url = array_filter($current_url);
	$current = end($current_url);
	$c = explode("-", $current);
	$final_url = end($c); 
?>
<?php include TEMPLATEPATH.'/inc/autostart-header.php'; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main main_with_sidebar pull-right" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h1>Autostart Infusion System <?php echo the_title(); ?></h1>
				<?php for($i = 1; $i <= 6; $i++){ ?>
					<div class="as_videos" id="as_video_<?php echo $i; ?>">
						<img src="<?php echo get_template_directory_uri();?>/images/autostart/videos/<?php echo $final_url ?>/<?php echo $final_url."-".$i ?>.jpg">
					</div>
				<?php }?>
				<?php the_content(); ?>

			<?php endwhile; ?>

			<?php analytica_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<div id="panel" class="release_years clearfix pull-left <?php echo $final_url; ?>">
			<h4 class="english"><a class="text-bold" href="<?php echo home_url(); ?>/autostart/videos-english/">English</a></h4>
			<h4 class="portuguese"><a class="text-bold" href="<?php echo home_url(); ?>/autostart/videos-portuguese/">Portuguese</a></h4>
			<h4 class="mandarin"><a class="text-bold" href="<?php echo home_url(); ?>/autostart/videos-mandarin/">Mandarin</a></h4>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>