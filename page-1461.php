<?php

	// ---------------------------------------------------------------------------------
	// ----- AREAS SERVED PAGE ---------------------------------------------------------
	// ---------------------------------------------------------------------------------

	get_header();

	// ----- 6 TESTIMONIALS QUERY ----
	$cities_serviced_listing_args = [
		'post_type' => 'area_service',
		'posts_per_page' => '600',
		'order' => 'ASC',
		'orderby' => 'title',
		'post_parent' => 0,
	];

	// The Query
	$cities_serviced_listing_query = new WP_Query( $cities_serviced_listing_args );

?>

<div class="page-wrap">

		<div class="content-wrap">

			<?php if ( have_posts() ) { ?>

			    <div class="content-area<?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo ' has-sidebar'; } ?>">

					<?php while ( have_posts() ) : the_post(); ?>
						<h1 class="page-title"><?php the_title(); ?></h1>

						<?php the_content(); ?>

						<?php // ------------------------------- CITIES SERVICED LISTING ------------------------------- ?>
						<div class="cities-serviced-listing-container">

							<h2>Cities Serviced</h2>

							<div class="cities-serviced-listing">

								<?php if ( $cities_serviced_listing_query->have_posts() ) : while ($cities_serviced_listing_query->have_posts() ) : $cities_serviced_listing_query->the_post(); ?>

									<?php  
										$post_meta = get_post_meta( $post->ID );
										$area_city = get_field('area_served_city');

										//echo 'Testimonial META<br/><pre>'.print_r( $post_meta, true ).'</pre>';
									?>

									<div class="city-item">
										<p class="city-item-name">
											<?php if ( $area_city ) { ?>
												<a href="<?php the_permalink(); ?>"><?php echo $area_city; ?></a>
											<?php } elseif (!$area_city) { ?>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
											<?php } ?>
										</p>
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
