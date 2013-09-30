<?php get_header();?>

<div id="primary" class="content-area">
		<main id="people" class="site-main" role="main">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="person p-<?php echo get_the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<h3><?php echo get_post_meta( get_the_ID(), 'analytica_position', true ); ?></h3>
					<?php the_content(); ?>
				</div><!--/person-->
			<?php endwhile; // end of the loop. ?>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>