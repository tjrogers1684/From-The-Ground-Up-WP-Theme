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

<div class="content-wrap">

	<div class="content-area">

		<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

			<?php //the_content(); ?>

		<?php endwhile; else : ?>

			<?php // do something else ?>

		<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>