<?php

// ---------------------------------------------------------------------------------
// ----- TESTIMONIALS LANDING PAGE -------------------------------------------------
// ---------------------------------------------------------------------------------

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

<!-- REVIEW [OTHER PLATFORMS] CALLOUT -->
<div class="review-platforms-conatiner">

	<h2>We'd love to hear from you! <span> Review From the Ground Up on these platforms</span></h2>

	<p class="review-platforms">
		<a href="https://www.yelp.com/biz/from-the-ground-up-oviedo"><img class="footer-review-site review-yelp" src="/wp-content/themes/ftgu/images/icon-yelp.svg" alt=""></a>
		<a href="https://www.google.com/search?q=google%20reviews%20From%20the%20Ground%20Up%20Inc%20Orlando&rlz=1C5CHFA_enUS721US721&oq=google+reviews+From+the+Ground+Up+Inc+Orlando&aqs=chrome..69i57j69i64.16879j0j0&sourceid=chrome&ie=UTF-8&npsic=0&rflfq=1&rlha=0&rllag=28578179,-81252117,9229&tbm=lcl&rldimm=7324884979202964679&lqi=Ci1nb29nbGUgcmV2aWV3cyBGcm9tIHRoZSBHcm91bmQgVXAgSW5jIE9ybGFuZG8iBTgBiAEB&ved=2ahUKEwivsLjRh_TjAhWmnOAKHUhwB-kQvS4wBHoECAoQMg&rldoc=1&tbs=lrf:!2m4!1e17!4m2!17m1!1e2!2m1!1e2!2m1!1e3!2m1!1e16!3sIAE,lf:1,lf_ui:14#lrd=0x88e76951e08289b7:0x65a7381465fcbcc7,1,,,&rldoc=1&rlfi=hd:;si:7324884979202964679,l,Ci1nb29nbGUgcmV2aWV3cyBGcm9tIHRoZSBHcm91bmQgVXAgSW5jIE9ybGFuZG8iBTgBiAEB;mv:!1m2!1d28.6387309!2d-81.18738599999999!2m2!1d28.517628!2d-81.3168489!3m12!1m3!1d58650.80568580489!2d-81.25211745!3d28.57817945!2m3!1f0!2f0!3f0!3m2!1i3017!2i3214!4f13.1;tbs:lrf:!2m1!1e2!2m1!1e3!2m1!1e16!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:14"><img class="footer-review-site review-google" src="/wp-content/themes/ftgu/images/icon-google-logo-black.svg" alt=""></a>
	</p>
</div>

<div class="page-wrap">

		<div class="content-wrap">

			<?php if ( have_posts() ) { ?>

			    <div class="content-area<?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo ' has-sidebar'; } ?>">

					<?php while ( have_posts() ) : the_post(); ?>
						<h1 class="page-title"><?php the_title(); ?></h1>
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
