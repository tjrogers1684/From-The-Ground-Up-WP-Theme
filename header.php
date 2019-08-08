<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<?php
$addl_body_classes = array();
$addl_body_classes[] = 'section-'.explode('/', $_SERVER['REQUEST_URI'])[1];
if( !empty(explode('/', $_SERVER['REQUEST_URI'])[2]) && !strstr(explode('/', $_SERVER['REQUEST_URI'])[2], '?') ){
	$addl_body_classes[] = 'section-'.explode('/', $_SERVER['REQUEST_URI'])[1].'-'.explode('/', $_SERVER['REQUEST_URI'])[2];
}

if ( !is_front_page() ) {
	$addl_body_classes[] = 'not-front';
}

if( !is_user_logged_in() ){ $addl_body_classes[] = 'not-logged-in'; }
?>

<body <?php body_class( $addl_body_classes ); ?>>

<div class="header-banner">
	<ul class="header-banner-social-menu">
		<li><a href="https://www.facebook.com/fromthegroundupincfl/"><i class="fab fa-facebook-square"></i></a></li>
		<li><a href="https://twitter.com/sodnrocks"><i class="fab fa-twitter-square"></i></a></li>
		<li><a href="https://www.youtube.com/channel/UCle7ByEOF7XT4nqK8StIwXg"><i class="fab fa-youtube"></i></a></li>
		<li><a href="https://www.pinterest.com/orlandosod/"><i class="fab fa-pinterest-square"></i></a></li>
		<li><a href="https://www.yelp.com/biz/from-the-ground-up-oviedo"><i class="fab fa-yelp"></i></a></li>
		<li><a href="https://www.linkedin.com/in/marc-rose-458508104/"><i class="fab fa-linkedin"></i></a></li>
		<li><a href="https://www.instagram.com/ftgulandscapinginc/"><i class="fab fa-instagram"></i></a></li>
	</ul>
<span class="header-banner-phone">Free Estimates. Call <?php if(wp_is_mobile()){ ?><a href="tel:407-501-2107">407-501-2107</a><?php } else { ?>407-501-2107<?php } ?></span>
</div>

<div class="mobile-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>

<div class="header-navigation">
	<a href="<?php echo bloginfo('url'); ?>" class="site-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-ftgu.svg" alt="From the Ground Up Landscaping"></a>

	<p class="mobile-nav-btns">
		<a class="mobile-nav-open" href="#mobilenavopen"><i class="fa fa-bars"></i></a>
		<a class="mobile-nav-close" href="#mobilenavclose"><i class="fas fa-times"></i></a></p>
	</p>

	<div class="header-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
</div>


<?php // SUBPAGE HEADERS ?>
<?php if ( !is_front_page() && !is_home() && !is_archive() && !is_singular( 'post' ) && !is_404() && !is_page(2053) && !is_page(2042) && !is_page(2055) && !is_page(2040) && !is_page(2047) && !is_page(2051) && !is_page(2049) ) { ?>
	<?php if ( have_posts() ) { ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) { ?>

				<div class="feature-wrap">
					<div class="feature-image page-featured-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
				</div>

			<?php } else { ?>

				<div class="feature-wrap">
					<div class="feature-image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/feature-placeholder-subpages.jpg" alt="">
					</div>
				</div>

			<?php } ?>
		<?php endwhile; ?><!-- PAGE MAIN QUERY -->

	<?php } ?>
<?php } ?>

<?php // BLOG LANDING PAGE HEADER ?>
<?php if ( is_404() ) { ?>
	<div class="feature-wrap">
		<div class="feature-image">
			<div class="feature-image page-featured-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hdr-blog.jpg)"></div>
		</div>
	</div>
<?php } ?>

<?php if ( is_home() || is_archive() || is_singular( 'post' ) ) { ?>
	<div class="feature-wrap">
		<div class="feature-image">
			<div class="feature-image page-featured-image" style="background-image: url(http://dev.sodandlandscaping.services/wp-content/uploads/2019/08/blog-feature-sub.jpg)"></div>
		</div>
	</div>
<?php } ?>

<?php if ( is_page(2053) || is_page(2042) || is_page(2055) || is_page(2040) || is_page(2047) || is_page(2051) || is_page(2049) ) { ?>
	<div class="feature-wrap">
		<div class="feature-image">
			<div class="feature-image page-featured-image" style="background-image: url(http://dev.sodandlandscaping.services/wp-content/uploads/2019/08/sod-types-feature-sub.jpg)"></div>
		</div>
	</div>
<?php } ?>
















