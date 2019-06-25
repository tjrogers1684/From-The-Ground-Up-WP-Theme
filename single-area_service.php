<?php
	get_header();

	$city_id = $post->ID;

	//echo $city_id;

	// ----- 6 TESTIMONIALS QUERY ----
	$city_area_service_listing_args = [
		'post_type' => 'area_service',
		'posts_per_page' => '600',
		'order' => 'ASC',
		'orderby' => 'title',
		'post_parent' => $city_id,
	];

	// The Query
	$city_area_service_listing_query = new WP_Query( $city_area_service_listing_args );

?>

<div class="page-wrap">

		<div class="content-wrap">

			<?php if ( have_posts() ) { ?>

			    <div class="content-area<?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo ' has-sidebar'; } ?>">

					<?php while ( have_posts() ) : the_post(); ?>
						<h1 class="page-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>

						<?php // ------------------------------- CITIES SERVICED LISTING ------------------------------- ?>
						<div class="city-services-listing-container">

							<h2>Services Offered</h2>

							<div class="city-services-listing">

								<?php if ( $city_area_service_listing_query->have_posts() ) : while ($city_area_service_listing_query->have_posts() ) : $city_area_service_listing_query->the_post(); ?>

									<?php
										//echo '<pre>' . print_r( $post, true ) . '<pre>';
										//echo 'Parent ID = ' . $city_id;
									?>

									<div class="city-service-item">
										<p class="city-service-item-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
									</div>

								<?php endwhile; ?>

								<?php wp_reset_postdata(); ?>

								<?php endif; ?>

							</div>

						</div>

					<?php endwhile; ?><!-- PAGE MAIN QUERY -->

				</div>

			<?php } ?>

			<?php get_sidebar(); ?>

		</div>

	</div><!-- end of page-wrap -->

<?php get_footer(); ?>
