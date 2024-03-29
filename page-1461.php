<?php

	// ---------------------------------------------------------------------------------
	// ----- AREAS SERVED PAGE ---------------------------------------------------------
	// ---------------------------------------------------------------------------------

	get_header();

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
