<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Analytica
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="container">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title clearfix">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri();?>/images/logo.jpg" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" id="logo" class="pull-right">
					</a>
				</h1>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul>
					<li class="home">
						<a href="<?php echo site_url(); ?>" class="clearfix">
							<span class="text-center">Home</span>
							<div class="nav-thumb">
								<img class="nav_first_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/1.jpg">
								<img class="nav_hover_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/1a.jpg">
							</div><!--/nav-thumb-->
						</a>
					</li>
					<li class="about-us">
						<a href="<?php echo site_url(); ?>/about-us/" class="clearfix">
							<span class="text-center">About Us</span>
							<div class="nav-thumb">
								<img class="nav_first_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/2.jpg">
								<img class="nav_hover_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/2a.jpg">
							</div><!--/nav-thumb-->
						</a>
					</li>
					<li class="people">
						<a href="<?php echo site_url(); ?>/people/" class="clearfix">
							<span class="text-center">People</span>
							<div class="nav-thumb">
								<img class="nav_first_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/3.jpg">
								<img class="nav_hover_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/3a.jpg">
							</div><!--/nav-thumb-->
						</a>
					</li>
					<li class="products">
						<a href="<?php echo site_url(); ?>/products/" class="clearfix">
							<span class="text-center">Products</span>
							<div class="nav-thumb">
								<img class="nav_first_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/4.jpg">
								<img class="nav_hover_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/4a.jpg">
							</div><!--/nav-thumb-->
						</a>
					</li>
					<li class="releases">
						<a href="<?php echo site_url(); ?>/releases/" class="clearfix">
							<span class="text-center">Releases</span>
							<div class="nav-thumb">
								<img class="nav_first_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/5.jpg">
								<img class="nav_hover_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/5a.jpg">
							</div><!--/nav-thumb-->
						</a>
					</li>
					<li class="contact-us">
						<a href="<?php echo site_url(); ?>/contact-us/" class="clearfix">
							<span class="text-center">Contact Us</span>
							<div class="nav-thumb">
								<img class="nav_first_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/6.jpg">
								<img class="nav_hover_thumb" src="<?php echo get_template_directory_uri(); ?>/images/nav/6a.jpg">
							</div><!--/nav-thumb-->
						</a>
					</li>
				</ul>

				
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
