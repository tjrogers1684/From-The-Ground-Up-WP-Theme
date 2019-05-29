<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header-banner">
	<ul class="header-banner-social-menu">
		<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
		<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
		<li><a href="#"><i class="fab fa-youtube"></i></a></li>
		<li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
		<li><a href="#"><i class="fab fa-yelp"></i></a></li>
		<li><a href="#"><i class="fab fa-instagram"></i></a></li>
	</ul>
	<span>Free Estimates. Call 407-501-2107</span>
</div>

<div class="header-navigation">
	<a href="<?php echo bloginfo('url'); ?>" class="site-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-ftgu.jpg" alt="From the Ground Up Landscaping"></a>
	<div class="header-menu">
		<ul>
			<li><a href="#">Surfaces</a></li>
			<li><a href="#">Why Us</a></li>
			<li><a href="#">FAQ</a></li>
			<li><a href="#">Locations We Serve</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Testimonials</a></li>
			<li><a href="#">Partners</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
</div>