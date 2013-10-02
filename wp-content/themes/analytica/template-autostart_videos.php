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
	$video_english =array(); 
	$video = array();	
	$video = array("english" => 
					array(
						"http://www.youtube.com/embed/s0vHPIqOwJA?rel=0",
						"http://www.youtube.com/embed/rwC4PPA2OCs?rel=0",
						"http://www.youtube.com/embed/7I6Tk2Kmd34?rel=0",
						"http://www.youtube.com/embed/XxbzHJJxAps?rel=0",
						"http://www.youtube.com/embed/LJKrr4zTaD0?rel=0",
						"http://www.youtube.com/embed/O8KaksUBwF0?rel=0"),
					"portuguese" => 
					array(
						"http://www.youtube.com/embed/XFhtCKV9vzs?rel=0",
						"http://www.youtube.com/embed/lFA1G3O7qp8?rel=0",
						"http://www.youtube.com/embed/WBACsKzNP1Y?rel=0",
						"http://www.youtube.com/embed/c-3HjMH3gdo?rel=0",
						"http://www.youtube.com/embed/AOLev7iomS4?rel=0",
						"http://www.youtube.com/embed/l-VuyY8Vi_Q?rel=0"),
					"mandarin" => 
					array(
						"http://www.youtube.com/embed/Luziw99GEp8?rel=0",
						"http://www.youtube.com/embed/tG24N6C-ciM?rel=0",
						"http://www.youtube.com/embed/BXnOgaJ_DFU?rel=0",
						"http://www.youtube.com/embed/74j2ioz14qk?rel=0",
						"http://www.youtube.com/embed/kDec8uTlzbo?rel=0",
						"http://www.youtube.com/embed/PFG4XyWHVx4?rel=0")
					);
?>
<?php include TEMPLATEPATH.'/inc/autostart-header.php'; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main main_with_sidebar pull-right autostart_videos" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h1>Autostart Infusion System <?php echo the_title(); ?></h1>
				<?php for($i = 1; $i <= 6; $i++){ ?>
					<div class="as_videos" id="as_video_<?php echo $i; ?>">
						<img src="<?php echo get_template_directory_uri();?>/images/autostart/videos/<?php echo $final_url ?>/<?php echo $final_url."-".$i ?>.jpg">
					</div>
					<div id="video_<?php echo $i; ?>" class="video">
						<iframe width="100%" height="281" src="<?php echo $video[$final_url][$i-1] ?>" frameborder="0" allowfullscreen></iframe>
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