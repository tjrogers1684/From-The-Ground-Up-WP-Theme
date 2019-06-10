<?php
/**
* Add theme supports
*/
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'title-tag' );
add_post_type_support( 'page', 'excerpt' );

// add additional excerpt support by post type
// add_post_type_support( 'post_type' , 'excerpt' );

function register_ftgu_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' ),
			'sidebar-sub-menu' => __( 'Sidebar Sub Menu' ),
		)
	);
}
add_action( 'init', 'register_ftgu_menus' );

/**
Add theme support for WooCommerce (optional)
*/
// add_action( 'after_setup_theme', 'woocommerce_support' );
// function woocommerce_support() {
//     add_theme_support( 'woocommerce' );
// }



/**
* Enqueue scripts and styles.
>>> REPLACE "theme" with namespace for this theme <<<
*/
function theme_styles_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'ftgu-main', get_theme_file_uri( '/style.css' ) );
	wp_enqueue_style( 'ftgu-all', get_theme_file_uri( '/css/all.css' ) );
	wp_enqueue_style( 'ftgu-slick-carousel', get_theme_file_uri( '/css/slick.css' ) );
	wp_enqueue_style( 'ftgu-slick-carousel-theme', get_theme_file_uri( '/css/slick-theme.css' ) );
	wp_enqueue_style( 'ftgu-fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );

	if( is_front_page() ){
		wp_enqueue_style( 'ftgu-homepage', get_theme_file_uri( '/css/home.css' ) );
	}

	wp_enqueue_style( 'ftgu-googlefonts', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&display=swap' );

	wp_enqueue_script( 'ftgu-slick-carousel', get_theme_file_uri( '/js/slick.js' ) );
	//wp_enqueue_script( 'ftgu-fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/js/all.js' );
	//wp_enqueue_style( 'ftgu-animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
	wp_enqueue_script( 'ftgu-global', get_theme_file_uri( '/js/ftgu.js' ), array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );



/**
* Register our sidebars and widgetized areas.
*/
function create_widget($name, $id, $description) {

    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div id="'.$id.'" class="widget %1$s %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

}
// Create the actual widgets (ID is a unique string)
create_widget("Name", "id", "Description");


// ---------------------------------------------------------------------------------
// ----- GIVE PAGES PRIORITY OVER POSTS IN URLS ------------------------------------
// ----- https://wordpress.stackexchange.com/questions/22438/how-to-make-pages-slug-have-priority-over-any-other-taxonomies-like-custom-post
// ---------------------------------------------------------------------------------
add_action( 'init', 'thrive_init' );
function thrive_init() {
	$GLOBALS['wp_rewrite']->use_verbose_page_rules = true;
}

add_filter( 'page_rewrite_rules', 'thrive_collect_page_rewrite_rules' );
function thrive_collect_page_rewrite_rules( $page_rewrite_rules ){
	$GLOBALS['thrive_page_rewrite_rules'] = $page_rewrite_rules;
	return array();
}

add_filter( 'rewrite_rules_array', 'thrive_prepend_page_rewrite_rules' );
function thrive_prepend_page_rewrite_rules( $rewrite_rules ){
	return $GLOBALS['thrive_page_rewrite_rules'] + $rewrite_rules;
}