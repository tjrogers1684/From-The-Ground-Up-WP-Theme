<?php get_header(); ?>

<div class="page-wrap">

		<div class="content-wrap">
		    <div class="content-area <?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo 'has-sidebar'; } ?>">
					<h1 class="page-title">We Apologize...</h1>

					<p>It seems that the page you are looking for does not exist. Feel free to browse the site to learn more about services we provide.</p>

					<p>- The From The Ground Up Team</p>
			</div>

			<?php get_sidebar(); ?>

			<br class="clearfloat" />
		</div>

	</div><!-- end of page-wrap -->

<?php get_footer(); ?>
