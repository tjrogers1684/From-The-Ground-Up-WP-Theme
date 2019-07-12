<?php
	wp_footer();

	$orlando_city_id = '1559';

	//echo $city_id;

	// ----- 6 TESTIMONIALS QUERY ----
	$orlando_area_service_listing_args = [
		'post_type' => 'area_service',
		'posts_per_page' => '600',
		'order' => 'ASC',
		'orderby' => 'title',
		'post_parent' => $orlando_city_id,
	];

	// The Query
	$orlando_area_service_listing_query = new WP_Query( $orlando_area_service_listing_args );
?>

<div class="footer-wrap-outer">
	<div class="footer-wrap">
		<div class="footer-section footer-logo-connect">
			<a href="/" class="site-logo-footer">
				<img src="/wp-content/themes/ftgu/images/logo-ftgu-footer.svg" alt="From the Ground up">
			</a>

			<div class="footer-connect-address">
				<p>
					From the Ground Up Landscaping, Inc<br/>
					1029 Gould Place<br/>
					Oviedo, FL 32765
				</p>
			</div>

			<div class="footer-connect-social">
				<ul class="footer-social-menu">
					<li><a href="https://www.facebook.com/fromthegroundupincfl/"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="https://twitter.com/sodnrocks"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCle7ByEOF7XT4nqK8StIwXg"><i class="fab fa-youtube"></i></a></li>
					<li><a href="https://www.pinterest.com/orlandosod/"><i class="fab fa-pinterest-square"></i></a></li>
					<li><a href="https://www.yelp.com/biz/from-the-ground-up-oviedo"><i class="fab fa-yelp"></i></a></li>
					<li><a href="https://www.linkedin.com/in/marc-rose-458508104/"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="https://www.instagram.com/ftgulandscapinginc/"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="footer-section footer-contact">
			<p>FREE ESTIMATES:</p>
			<p class="footer-contact-phone">407-501-2107</p>
		</div>

		<div class="footer-section footer-services">
			<h2>Orlando Landscape Services</h2>

			<div class="orlando-services-listing">

				<?php if ( $orlando_area_service_listing_query->have_posts() ) : while ($orlando_area_service_listing_query->have_posts() ) : $orlando_area_service_listing_query->the_post(); ?>

					<a class="orlando-service-item-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

				<?php endif; ?>

			</div>

		</div>
	</div>
</div>

</body>
</html>