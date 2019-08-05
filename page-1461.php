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

					<?php endwhile; ?><!-- PAGE MAIN QUERY -->

				</div>

			<?php } ?>

			<?php get_sidebar(); ?>

		</div>

	</div><!-- end of page-wrap -->

<?php get_footer(); ?>
