<?php
/*
Template Name: Autostart technical page template
*
 * @package Analytica
 */

get_header(); ?>
<?php include TEMPLATEPATH.'/inc/autostart-header.php'; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<ul>
	<li>
			<h1>Analytica AutoStart Infusion System Technical Information Pack</h1>
			This disc/webpage contains technical information about Analytica's AutoStart Infusion System, compiled for the benefit of biomedical engineers and technicians. It is a work in progress and will be updated as additional information is generated.</li>
				<li>
					<h2>USFDA 510(k)</h2>
					<a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20100304-AutoStartBurette-510k-ClearanceLetter-K092905.pdf" target="blank">Clearance Letter K092905</a>
				</li>
				<li>
					<h2>ARTG Certificate</h2>
					<a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/ARTG148892-Certificate.pdf" target="blank">Certificate 148892</a>
				</li>
				<li>
					<h2>Third Party Validation Testing</h2>
					<p>The following test reports were created by US testing firm <a href="http://www.namsa.com/">NAMSA</a> using Validation units built in Sept 2008. These tests are required by ISO 8536-5:2004</p>

					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20081009-NamsaV0014-Cytotoxicity-Report.pdf" target="blank">Cytotoxicity Study</a></p>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20081014-NamsaTU010-USPPyrogens-Report.pdf" target="blank">Pyrogens and bacterial endotoxins</a></p>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20081015-NamsaT0625-SystemicToxicity-Report.pdf" target="blank">Systemic toxicity</a></p>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20081015-NamsaTI151-Intracutaneous-Report.pdf" target="blank">Intracutaneous study</a></p>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20081020-NamsaV0607-ASTMHaemolysis-Report.pdf" target="blank">Haemolysis (ASTM)</a></p>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20081111-NAMSATI261-MaximisationSensitisation-Report.pdf" target="blank">Sensitisation</a></p>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20081114-NamsaC0559-ChemicalTest-Report.pdf" target="blank">Chemical Testing</a></p>
				</li>
				<li>
					<h2>Internal Validation Testing</h2>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/ALT002-VAL026-20081025-ParticulateContaminationTestReport.pdf" target="blank">Particulate Contamination Testing to ISO 8536-4:2004 Section 6.1</a></p>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/002-44007439-20081202-13_26_243.pdf" target="blank">Leak Testing to ISO 8536-4:2004 Section 6.2</a></p>
					<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/20091029-ASB-Concentration-WhitePaper-Final.pdf" target="blank">Medicine Concentration in the AutoStart® Infusion System following an Automatic Flow Restart Event</a></p>
				</li>
				<li>
					<h2>Other Items</h2>
					<div>
						<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/ALT002-0082-20090409.pdf" target="blank">Example Instruction Card (supplied with each unit)</p>
						<img alt="Instructions thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/autostart/ALT002-0082-20080912.jpg"/></a>
					</div>
					<div>
						<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/ALT002-0187-v1.wmv" target="blank">Trade Show Animation (WMV file)</p>
						<img alt="ARTG thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/autostart/ALT002-0187-v1.jpg"/></a>
					</div>
					<div>
						<p><a href="<?php echo get_template_directory_uri();?>/inc/docs/autostart/ALT002-0109-v2.pdf" target="blank">Sales Brochure</p>
						<img alt="Brochure p1 thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/autostart/ALT002-0109-v2_Page_1.jpg"/><img alt="Brochure p1 thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/autostart/ALT002-0109-v2_Page_2.jpg" border="1" /></a>
					</div>
				</li>
			</ul>

			<?php endwhile; ?>

			<?php analytica_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>