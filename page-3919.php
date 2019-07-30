<?php

// ---------------------------------------------------------------------------------
// ----- TESTIMONIALS LANDING PAGE -------------------------------------------------
// ---------------------------------------------------------------------------------

	get_header();

	// ----- SURFACES QUERY ----
	$surfaces_page_surface_listing_args = [
		'post_type' => 'surface',
		'posts_per_page' => '600',
		'order' => 'ASC',
		//'orderby' => 'publish',
	];

	// The Query
	$surfaces_page_surface_listing_query = new WP_Query( $surfaces_page_surface_listing_args );

?>

<div class="page-wrap">

		<div class="content-wrap">

			<?php if ( have_posts() ) { ?>

			    <div class="content-area<?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo ' has-sidebar'; } ?>">

					<?php while ( have_posts() ) : the_post(); ?>
						<h1 class="page-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>

						<?php // ------------------------------- SURFACES LISTING ------------------------------- ?>
						<div class="surfaces-landing-listing">

							<?php if ( $surfaces_page_surface_listing_query->have_posts() ) : while ($surfaces_page_surface_listing_query->have_posts() ) : $surfaces_page_surface_listing_query->the_post(); ?>

								<?php
									$post_meta = get_post_meta( $post->ID );
									// $first_name = get_field('first_name');
									// $last_name = get_field('last_name');
									$slug = $post->post_name;
									// $excerpt = the_excerpt();
									// $excerpt = wp_strip_all_tags( $excerpt );

									//echo 'Surface META<br/><pre>'.print_r( $post_meta, true ).'</pre>';
									//echo 'Surface OBJ<br/><pre>'.print_r( $post, true ).'</pre>';
								?>

								<div class="surface <?php echo $slug; ?>">
									<div class="surface-photo">
										<img src="http://sodandlandscaping.build/wp-content/uploads/2019/07/ph-surfaces-img.jpg" />
									</div>

									<div class="surface-content">
										<p class="surface-name"><?php the_title(); ?></p>
										<div class="surface-description"><?php the_excerpt(); ?></div>
									</div>

									<p class="surface-link-container"><a href="<?php the_permalink(); ?>" class="surface-link">&nbsp;</a></p>
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
