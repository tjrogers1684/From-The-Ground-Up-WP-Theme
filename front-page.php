<?php get_header(); ?>

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
			<p><a href="#" class="btn btn-alt"><i class="fas fa-user-circle"></i> Learn More About Us</a></p>
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
				<a href="#" class="btn"><i class="fas fa-map-marker-alt"></i> Find Out the Areas We Serve</a>
				<a href="#" class="btn"><i class="fas fa-envelope"></i> Contact Us</a>
			</p>
		</div>

		<img class="img-sod-block" src="<?php echo get_template_directory_uri(); ?>/images/img-hp-choose-fgtu-sod-block.png" alt="Sod Block Example">
	</div>
</div>

<div class="content-wrap">

	<div class="content-area">

		<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

			<?php //the_content(); ?>

		<?php endwhile; else : ?>

			<?php // do something else ?>

		<?php endif; ?>

	</div>

</div>

<div class="hp-testimonials-wrap-outer">
	<div class="hp-testimonials-wrap">
		<h2 class="hp-section-header">From Our Customers...</h2>

		<p class="hp-testimonials-leadin">We love when our clients love their natural and artificial turf.Here’s what some of them had to say about our landscaping services:</p>

		<div class="hp-testimonials-listing">

			<div class="hp-testimonials-slider-nav">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon-nav-left.png" class="hp-testimonial-slider-nav-left">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon-nav-right.png" class="hp-testimonial-slider-nav-right">
			</div>

			<div class="hp-testimonial-item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-ph-tesimonial-male.jpg" alt="" alt="" class="hp-testimonial-item-photo">

				<p class="hp-testimonial-item-testimonial">From the Ground Up did such an amazing job! Would hire them again in a heartbeat!</p>
			</div>

			<div class="hp-testimonial-item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-ph-tesimonial-female.jpg" alt="" alt="" class="hp-testimonial-item-photo">

				<p class="hp-testimonial-item-testimonial">From the Ground Up did such an amazing job! Would hire them again in a heartbeat!</p>
			</div>

			<div class="hp-testimonial-item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-ph-tesimonial-male-black.jpg" alt="" alt="" class="hp-testimonial-item-photo">

				<p class="hp-testimonial-item-testimonial">From the Ground Up did such an amazing job! Would hire them again in a heartbeat!</p>
			</div>
		</div>

		<p class="more-testimonials-link"><a href="#" class="btn btn-alt"><i class="fas fa-comment-alt"></i> More Testimonials</a>
	</div>
</div>

<?php get_footer(); ?>