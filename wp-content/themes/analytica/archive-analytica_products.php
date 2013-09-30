<?php get_header();?>

<div id="primary" class="content-area">
		<main id="products" class="site-main" role="main">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="product p-<?php echo get_the_ID(); ?>">
					<h1><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content(); ?>
				</div><!--/product-->
			<?php endwhile; // end of the loop. ?>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>