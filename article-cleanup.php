<?php // SIDEBAR: RANDOM TESTIMONIALS ?>

<?php
	$testimonials_sidebar_listing_args = [
		'post_type' => 'testimonial',
		'posts_per_page' => '1',
		'order' => 'DESC',
		'orderby' => 'rand',
	];

	// The Query
	$testimonials_sidebar_listing_query = new WP_Query( $testimonials_sidebar_listing_args );

?>

<?php if ( $testimonials_sidebar_listing_query->have_posts() ) : while ($testimonials_sidebar_listing_query->have_posts() ) : $testimonials_sidebar_listing_query->the_post(); ?>

	<?php
		$post_meta = get_post_meta( $post->ID );
		$first_name = get_field('first_name');
		$last_name = get_field('last_name');
		$date_submitted = get_the_date();
		$testimonial_text = get_the_content();
		$testimonial_text = wp_trim_words( $testimonial_text, 15, '!' );

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
			<p class="testimonial-item-testimonial"><?php echo $testimonial_text; ?></p>
			<p class="testimonial-item-author"> - <?php echo $first_name .' '.$last_name; ?></p>
			<p class="testimonial-item-date"> <?php echo meks_time_ago(); /* post date in time ago format */ ?></p>
		</div>
	</div>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<p class="more-testimonials-link"><a href="/testimonials" class="btn"><i class="fas fa-comment-alt"></i> More Testimonials</a></p>