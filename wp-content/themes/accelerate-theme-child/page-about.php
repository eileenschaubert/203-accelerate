<?php
/**
 * The template for displaying the about page
 *
 * This is a modified template from the front-page template.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id=about-primary class="home-page hero-content">
		<div class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="our-services">
		<div class="site-content about-content">
			<h4>OUR SERVICES</h4>
			<p>We take pride in our clients and the content we create for them.</p>
			<p>Here’s a brief overview of our offered services.</p>

			<ul class="aboutpage-services">

			<?php query_posts('posts_per_page=4&post_type=services_offered'); ?>
				<?php while (have_posts() ) : the_post();
					$image_1 = get_field("logo_for_service");
					$size = "large";
				?>
					<li class="individual-services">
						<figure class="service-images">
								<?php echo wp_get_attachment_image($image_1, $size); ?>
						</figure>
						<div class="services-text">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					</li>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?> <!-- resets the altered query back to the original -->
			</ul>

		</div>
	</section>

	<div class="about-cta site-content">
		<h2>Interested in Working With Us?</h2>
		<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
	</div><!-- link back to case study page -->


<?php get_footer(); ?>
