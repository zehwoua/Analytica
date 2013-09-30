<?php
/*
Template Name: Home page template
*
 * @package Analytica
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main main_with_sidebar pull-left" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php analytica_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<div id="panel" class="clearfix pull-right">
			<div class="inner">
				<h1>Recent News</h1>
				<div class="clearfix" id="home-susbcribe">
					<a href="http://eepurl.com/xVl2n" class="clearfix">
						<img src="<?php echo get_template_directory_uri();?>/images/envelope.gif" title="subscribe email list" alt="subscribe email list" class="pull-left">
						<span class="text-center text-bold pull-left">Subscribe to our announcement email list</span>
					</a>
				</div>
				<p class="blue text-bold">...or Like Us on facebook</p>
				<iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FAnalyticaMedical&amp;send=false&amp;layout=button_count&amp;width=192&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:192px; height:21px;" allowTransparency="true"></iframe>
				<?php
					$type = 'analytica_releases';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'posts_per_page' => 6,
					  'ignore_sticky_posts' => 1);
				?>
				<?php
					$my_query = null;
					$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) { ?>
				<ul id="latest-releases-list">
				<?php  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    <li>
				    	<p class="blue text-bold news_title"><?php the_title(); ?></p>
				    	<span class="red"><?php the_time('d F Y'); ?></span>
				    	<?php the_content(); ?>
				    	<span class="clearfix attachment"><a class="pull-right" href="<?php echo get_post_meta( get_the_ID(), 'analytica_url', true ); ?>" target="blank"><?php echo get_post_meta( get_the_ID(), 'analytica_attachment', true ); ?></a></span>

				    </li>
				    <?php
				  endwhile; ?>
				  	<li class="rss">
				  		<a href="rss2feed.xml" class="clearfix">
				  			<img src="<?php echo get_template_directory_uri();?>/images/rss.gif" title="rss feed of releases" alt="rss feed of releases" class="pull-left">
				  			<span class="">Announcements are also available as an RSS feed</span>
				  		</a>	
				  	</li>
				</ul>
				<?php } ?>
			</div>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>