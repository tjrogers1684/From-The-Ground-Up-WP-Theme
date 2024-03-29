<?php

// ---------------------------------------------------------------------------------
// ----- TESTIMONIALS LANDING PAGE -------------------------------------------------
// ---------------------------------------------------------------------------------

	get_header();

?>

<div class="page-wrap">

		<div class="content-wrap">

			<?php if ( have_posts() ) { ?>

			    <div class="content-area<?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo ' has-sidebar'; } ?>">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							$post_meta = get_post_meta( $post->ID );
							// $first_name = get_field('first_name');
							$benefits_tagline = get_field('surface_benefits_section_surface_turf_tagline');
							$benefits_description = get_field('surface_benefits_section_surface_benefits_description');
							$product_tagline = get_field('surface_product_info_section_surface_product_tagline');
							$product_description = get_field('surface_product_info_section_surface_product_info_description');
							$featured_img = get_field('surface_benefits_section_surface_benefits_image');
							$featured_img_url = $featured_img['url'];
							// $date_submitted = get_the_date();

							//echo 'Surface META<br/><pre>'.print_r( $post_meta, true ).'</pre>';
						?>

						<!-- LEADIN SECTION  -->
						<div class="page-leadin">
							<h1 class="page-title"><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>

						<!-- BENEFITS SECTION  -->
						<div class="surface-benefits-section">
							<div class="benefits-photo" style="background-image: url(<?php echo $featured_img_url; ?>);"></div>
							<div class="benefits-content">
								<h2>Turf Benefits</h2>
								<p class="benefits-tagline"><?php echo $benefits_tagline; ?></p>
								<?php echo $benefits_description; ?>

								<p class="product-get-started-link-container"><a href="#contactform" class="btn">Request a Free Estimate!</a></p>
							</div>
						</div>

						<!-- PRODUCT INFO SECTION  -->
						<div class="surface-product-section">
							<div class="product-content">
								<h2><?php echo $product_tagline; ?></h2>

								<div class="product-description"><?php echo $product_description; ?></div>

								<p class="product-get-started-link-container"><a href="#contactform" class="btn">Request a Free Estimate!</a></p>
							</div>
						</div>

						<!-- GALLERY SECTION  -->
						<div class="surface-gallery-section">
							<h2><?php echo ($post->post_name) ? ucwords(str_replace('-', ' ', $post->post_name)) : 'Product'; ?> Gallery</h2>

							<div class="surface-gallery">
								<?php
									$gallitems = get_field( 'surface_product_gallery' );

									foreach ($gallitems as $item) {
										echo '<p class="surface-gallery-item">'.
										'<a rel="lightbox" class="surface-gallery-item-image" href="'.$item['sizes']['large'].'">'.
										'<img src="'.$item['sizes']['thumbnail'].'" />'.
										'</a>'.
										'</p>';
									}
								?>
							</div>
						</div>

						<!-- CONTACT FORM SECTION  -->
						<a name="contactform"></a>
						<div class="surface-contact-section">
							<h2>Request a Free Estimate!</h2>
							<p>
								<?php echo do_shortcode( '[ninja_form id=1]' ) ?>
								<?php //echo do_shortcode( '[ninja_form id=4]' ) ?>
							</p>
						</div>

						<?php echo do_shortcode( '[do_widget id=custom_html-4]' ) ?>

					<?php endwhile; ?><!-- PAGE MAIN QUERY -->

				</div>

			<?php } ?>

			<?php get_sidebar(); ?>

		</div>

	</div><!-- end of page-wrap -->

<?php get_footer(); ?>
