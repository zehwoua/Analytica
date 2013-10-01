<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Analytica
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="products" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?> - <?php echo get_post_meta( get_the_ID(), 'analytica_position', true ); ?></h1>
			<table>
				<?php if (get_post_meta( get_the_ID(), 'analytica_telephone', true )){ ?>
					<tr>
						<td class="first_row">Mobile:</td>
						<td><?php echo get_post_meta( get_the_ID(), 'analytica_telephone', true ); ?></td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_email', true )){ ?>
					<tr>
						<td class="first_row">Email:</td>
						<td><a href="mailto:<?php echo get_post_meta( get_the_ID(), 'analytica_email', true ); ?>"><?php echo get_post_meta( get_the_ID(), 'analytica_email', true ); ?></a></td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_skype', true )){ ?>
					<tr>
						<td class="first_row">Skype Call:</td>
						<td><a href="skype:<?php echo get_post_meta( get_the_ID(), 'analytica_skype', true ); ?>?call">
								<img src="<?php echo get_template_directory_uri(); ?>/images/skype.png" alt="skype" title="skype"/>
							</a>
						</td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_linkedin', true )){ ?>
					<tr>
						<td class="first_row">LinkedIn Profile:</td>
						<td><a href="<?php echo get_post_meta( get_the_ID(), 'analytica_linkedin', true ); ?>" target="blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin" title="linkedin"/>
							</a>
						</td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_vcard', true )){ ?>
					<tr>
						<td class="first_row">Download VCard:</td>
						<td><a href="<?php echo get_post_meta( get_the_ID(), 'analytica_vcard', true ); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/vcard.png" alt="vcard" title="vcard"/>
							</a>
						</td>
					</tr>
				<?php } ?>
			</table>

				<h2><?php echo get_post_meta( get_the_ID(), 'analytica_company_name', true ); ?></h2>
			<table>
				<?php if (get_post_meta( get_the_ID(), 'analytica_company_url', true )){ ?>
					<tr>
						<td class="first_row">Company Website:</td>
						<td><a href="<?php echo get_post_meta( get_the_ID(), 'analytica_company_url', true ); ?>" target="blank">
								<?php echo get_post_meta( get_the_ID(), 'analytica_company_url', true ); ?>
							</a>
						</td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_company_address', true )){ ?>
					<tr>
						<td class="first_row">Company Address:</td>
						<td><?php echo get_post_meta( get_the_ID(), 'analytica_company_address', true ); ?></td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_mailing_address', true )){ ?>
					<tr>
						<td class="first_row">Mailing Address:</td>
						<td><?php echo get_post_meta( get_the_ID(), 'analytica_mailing_address', true ); ?></td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_company_phone', true )){ ?>
					<tr>
						<td class="first_row">Company Phone:</td>
						<td><?php echo get_post_meta( get_the_ID(), 'analytica_company_phone', true ); ?></td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_stock', true )){ ?>
					<tr>
						<td class="first_row">ASX Stock Ticker: </td>
						<td><a href="<?php echo get_post_meta( get_the_ID(), 'analytica_stock', true ); ?>" target="blank">
								ALT
							</a>
						</td>
					</tr>
				<?php } ?>

				<?php if (get_post_meta( get_the_ID(), 'analytica_abn', true )){ ?>
					<tr>
						<td class="first_row">ABN:</td>
						<td><?php echo get_post_meta( get_the_ID(), 'analytica_abn', true ); ?></td>
					</tr>
				<?php } ?>

			</table>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>