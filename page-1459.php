<?php
	get_header();

	// ----- 6 TESTIMONIALS QUERY ----
	$testimonials_page_listing_args = [
		'post_type' => 'testimonial',
		'posts_per_page' => '600',
		'order' => 'DESC',
		'orderby' => 'publish',
	];

	// The Query
	$testimonials_page_listing_query = new WP_Query( $testimonials_page_listing_args );

?>

<div class="page-wrap">

		<div class="content-wrap">

			<?php if ( have_posts() ) { ?>

			    <div class="content-area<?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo ' has-sidebar'; } ?>">

					<?php while ( have_posts() ) : the_post(); ?>
						<?php // the_title(); ?>
						<?php the_content(); ?>

						<?php // ------------------------------- TESTIMONIALS LISTING ------------------------------- ?>
						<div class="testimonials-page-testimonials-listing">

							<?php if ( $testimonials_page_listing_query->have_posts() ) : while ($testimonials_page_listing_query->have_posts() ) : $testimonials_page_listing_query->the_post(); ?>

								<?php
									$post_meta = get_post_meta( $post->ID );
									$first_name = get_field('first_name');
									$last_name = get_field('last_name');
									$date_submitted = get_the_date();

									//echo 'Testimonial META<br/><pre>'.print_r( $post_meta, true ).'</pre>';
								?>

								<div class="testimonial-item">
									<?php
										if ( has_post_thumbnail() ) { ?>
											<div class="testimonial-item-pic">
												<img src="<?php the_post_thumbnail_url(); ?>" alt="">
											</div>
									<?php } ?>

									<div class="testimonial-item-content">
										<p class="testimonial-item-testimonial"><?php the_content(); ?></p>
										<p class="testimonial-item-author"> - <?php echo $first_name .' '.$last_name; ?></p>
										<p class="testimonial-item-date"> <?php echo meks_time_ago(); /* post date in time ago format */ ?></p>
									</div>
								</div>

							<?php endwhile; ?>

							<?php wp_reset_postdata(); ?>

							<?php endif; ?>

						</div>

					<?php endwhile; ?><!-- PAGE MAIN QUERY -->

				</div>

			<?php } ?>

			<?php get_sidebar(); ?>

		</div>

	</div><!-- end of page-wrap -->

<?php get_footer(); ?>
