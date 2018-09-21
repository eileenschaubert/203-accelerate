<?php
/**
 * The template for displaying all services offered on the about page
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div class="main-content" role="main">


<?php while ( have_posts() ) : the_post();
		$services = get_field('service_offering');
		$image_1 = get_field('logo_for_service');
		$size = "full"; ?>

		<article class="service-name">
			<aside class="services-sidebar">
				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>

			</aside>

			<div class="service-images">
				<?php if($image_1){
					echo wp_get_attachment_image( $image_1, $size );
				} ?>
			</div>

		</article>
<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->


	 <div>
	 		<h2 class="back-nav"><a href="../">Back to Services</a></h2>
	 </div><!-- link back to services page -->





<?php get_footer(); ?>
