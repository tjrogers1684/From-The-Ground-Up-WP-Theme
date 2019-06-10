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
		<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
		<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
		<li><a href="#"><i class="fab fa-youtube"></i></a></li>
		<li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
		<li><a href="#"><i class="fab fa-yelp"></i></a></li>
		<li><a href="#"><i class="fab fa-instagram"></i></a></li>
	</ul>
	<span>Free Estimates. Call 407-501-2107</span>
</div>

<div class="mobile-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>

<div class="header-navigation">
	<a href="<?php echo bloginfo('url'); ?>" class="site-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-ftgu.jpg" alt="From the Ground Up Landscaping"></a>

	<p class="mobile-nav-btns">
		<a class="mobile-nav-open" href="#mobilenavopen"><i class="fa fa-bars"></i></a>
		<a class="mobile-nav-close" href="#mobilenavclose"><i class="fas fa-times"></i></a></p>
	</p>

	<div class="header-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
</div>

<?php if ( !is_front_page() ) { ?>
	<div class="feature-wrap">
		<div class="feature-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/feature-placeholder-subpages.jpg" alt="">
		</div>
	</div>
<?php } ?>