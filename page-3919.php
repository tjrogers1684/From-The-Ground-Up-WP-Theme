<?php

// ---------------------------------------------------------------------------------
// ----- SURFACES LANDING PAGE -----------------------------------------------------
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
									$slug = $post->post_name;
									$featured_img = get_field('surface_benefits_section_surface_benefits_image');
									$featured_img_url = $featured_img['url'];
									$title = get_the_title();
									$title = explode(" ", $title);
									$title = $title[count($title)-1];
								?>

								<div class="surface <?php echo $slug; ?>">
									<div class="surface-photo" style="background-image: url(<?php echo $featured_img_url; ?>);">
									</div>

									<div class="surface-content">
										<p class="surface-name"><?php echo $title; ?></p>
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
