<?php get_header(); ?>

<?php

	// ----- NEWEST NEWS ARTICLES QUERY ----
	$hp_blog_args = [
		'post_type' => 'post',
		'posts_per_page' => '3',
		'order' => 'DESC',
		'orderby' => 'date',
	];

	// The Query
	$hp_blog_query = new WP_Query( $hp_blog_args );

	// ----- 6 TESTIMONIALS QUERY ----
	$hp_testimonials_args = [
		'post_type' => 'testimonial',
		'posts_per_page' => '6',
		'order' => 'DESC',
		'orderby' => 'rand',
	];

	// The Query
	$hp_testimonials_query = new WP_Query( $hp_testimonials_args );

?>

<div class="feature-wrap">

	<div class="feature-image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/feature-placeholder.jpg" alt="">
	</div>

	<div class="feature-callouts">
		<div class="feature-callout">
			<h1>Improving the way landscape projects are performed.</h1>
		</div>
		<div class="feature-callout">
			<p>Our passion is felt from the moment we meet and carries throughoutthe entire design and installation of each and every project.</p>
			<p><a href="/about-us/" class="btn btn-alt"><i class="fas fa-user-circle"></i> Learn More About Us</a></p>
		</div>
	</div>
</div>

<div class="hp-surfaces-wrap">
	<h2 class="hp-section-header">Surfaces</h2>
	<ul class="hp-surfaces">
		<li class="hp-surface-lawns"><a href="#"><span>Lawns</span></a></li>
		<li class="hp-surface-pets"><a href="#"><span>Pets</span></a></li>
		<li class="hp-surface-playgrounds"><a href="#"><span>Playgrounds</span></a></li>
		<li class="hp-surface-putting"><a href="#"><span>Putting</span></a></li>
		<li class="hp-surface-pavers"><a href="#"><span>Pavers</span></a></li>
		<li class="hp-surface-natural"><a href="#"><span>Natural</span></a></li>
	</ul>
</div>

<div class="hp-choose-ftgu-wrap">
	<h2 class="hp-section-header">Why Choose Us?</h2>

	<div class="hp-choose-ftgu">
		<div class="hp-choose-ftgu-description">
			<p>From The Ground Up Landscaping was designed with one thing in mind: improving the way landscape projects are performed. Our passion is felt from the moment we meet and carries throughout the entire design and installation of each and every project.</p>

			<p>We’ve been in business since 2010 and service all of Central Florida including Tampa, Lakeland, Orlando, Kissimmee, Deland, Ormond Beach, New Symra and more. There are many ways in which we can help in crafting and creating the outdoor experience you’ve always dreamed of.</p>

			<p>
				<a href="/areas-served" class="btn"><i class="fas fa-map-marker-alt"></i> Find Out the Areas We Serve</a>
				<a href="/contact/" class="btn"><i class="fas fa-envelope"></i> Contact Us</a>
			</p>
		</div>

		<img class="img-sod-block" src="<?php echo get_template_directory_uri(); ?>/images/img-hp-choose-fgtu-sod-block.png" alt="Sod Block Example">
	</div>
</div>

<div class="hp-testimonials-wrap-outer">
	<div class="hp-testimonials-wrap">
		<h2 class="hp-section-header">From Our Customers...</h2>

		<p class="hp-testimonials-leadin">We love when our clients love their natural and artificial turf.<br/>Here’s what some of them had to say about our landscaping services:</p>

		<div class="hp-testimonials-listing">

			<?php if ( $hp_testimonials_query->have_posts() ) : while ($hp_testimonials_query->have_posts() ) : $hp_testimonials_query->the_post(); ?>

				<?php
					$post_meta = get_post_meta( $post->ID );
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					$testimonial_text = get_the_content();
					$testimonial_text = wp_trim_words( $testimonial_text, 15, '!' );

					//echo 'Testimonial META<br/><pre>'.print_r( $post_meta, true ).'</pre>';
				?>

				<div class="hp-testimonial-item">
					<?php
						if ( has_post_thumbnail() ) { ?>
							<div class="hp-testimonial-pic">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							</div>
					<?php } ?>

					<p class="hp-testimonial-item-testimonial"><?php echo $testimonial_text; ?></p>
				</div>

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php endif; ?>

		</div>

		<p class="more-testimonials-link"><a href="/testimonials" class="btn btn-alt"><i class="fas fa-comment-alt"></i> More Testimonials</a>
	</div>
</div>

<div class="content-wrap">
	<div class="content-area">

		<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

			<h2 class="hp-section-header">FREE ESTIMATES: 407-501-2107</h2>

			<div class="hp-main-content-text">
				<p>
					<span>In today’s landscaping culture there are many different design and installation philosophy’s for just about every outdoor service. Not to mention outdoor service companies are a dime a dozen, you never can be too sure what to expect. Do they have the proper knowledge and experience for the landscaping design you’re searching for? At From The Ground Up Landscaping Inc,</span> <span>we provide just about every type of outdoor service from retaining wall installation to brick artificial putting green installation. Now, it’s tough for one company to provide many services and still bring the quality, this is true. But, not if the level of knowledge and care is there.</span>
			</p>
			</div>

			<?php //the_content(); ?>

		<?php endwhile; else : ?>

			<?php // do something else ?>

		<?php endif; ?>

	</div>
</div>

<!-- BLOG ARTICLES [Content] -->
<div class="hp-blog-listing-container">
	<h2 class="hp-section-header">Blog</h2>

	<div class="hp-blog-listing">
		<?php if ( $hp_blog_query->have_posts() ) : while ($hp_blog_query->have_posts() ) : $hp_blog_query->the_post(); ?>

			<?php
				$article_text = get_the_content();
				$article_text = wp_trim_words( $article_text, 40, '...' );
			?>

			<div class="hp-blog-item">
				<p class="blog-article-meta"><?php echo get_the_time( "F j, Y" );  ?>
				<h3 class="blog-article-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="blog-article-text"><?php echo $article_text; ?></p>
			</div>

		<?php endwhile; else : ?>
		<?php endif; ?>

		<a href="/blog" class="btn more-blog-link">Read more articles »</a>
	</div>
</div><!-- END END HP NEWS LISTING -->


<?php get_footer(); ?>