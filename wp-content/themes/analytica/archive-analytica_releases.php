<?php get_header();?>
<?php 
	if(isset($_GET['release_year'])){
		$published_year =  $_GET['release_year'];
	}else{
		$published_year =  get_the_time('Y');
	}
?>
<div id="primary" class="content-area">
	<div id="panel" class=" release_years pull-left">
		<?php $oldyear = $postyear = get_the_time('Y', $post->ID); ?>
		<h4 class="<?php if ($published_year === $postyear) echo "active" ?>"><a href="<?php echo home_url(); ?>/releases/"><?php echo $postyear; ?></a></h4>
		<?php while (have_posts()) {
		  	the_post();
		  	$postyear = get_the_time('Y', $post->ID);
		  	if ($oldyear != $postyear) {
		    	$oldyear = $postyear; ?>
		    	
		    	<h4 class="<?php if ($published_year === $postyear) echo "active" ?>"><a href="<?php echo add_query_arg( 'release_year', $postyear, home_url().'/releases' )?>"><?php echo $postyear; ?></a></h4>
			<?php } ?>
		<?php } ?>
	</div>
		<main id="releases" class="site-main main_with_sidebar pull-right" role="main">
			<a href="http://eepurl.com/xVl2n">
				<img src="<?php echo get_template_directory_uri(); ?>/images/envelope.gif" width="46px" class="pull-left">
				<span class="text-bold">Subscribe to our company announcement email list</span>
			</a>
			<?php $year =  get_the_time('Y');?>
			<h1>Company Announcements - <?php echo $published_year; ?></h1>
			<?php
				$type = 'analytica_releases';
				$args = array(
					'post_type' => $type,
					'year'  => $published_year,
					'posts_per_page' => -1);
			?>
			<?php 
				$my_query = null;
				$my_query = new WP_Query($args); 
			?>

			<?php if( $my_query->have_posts() ) { ?>
				<?php  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    <div class="release r-<?php echo get_the_ID(); ?>">
						<div class="inner">
							<p class="blue text-bold"><?php the_title(); ?></p>
							<span class="red"><?php the_time('d F Y'); ?></span>
							<?php the_content(); ?>
							<span class="clearfix attachment"><a class="pull-right" href="<?php echo get_post_meta( get_the_ID(), 'analytica_url', true ); ?>" target="blank"><?php echo get_post_meta( get_the_ID(), 'analytica_attachment', true ); ?></a></span>
						</div><!--/inner-->
					</div><!--/person-->
				    <?php
				  endwhile; ?>
			<?php }  wp_reset_postdata(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>