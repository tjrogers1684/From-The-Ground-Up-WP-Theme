
jQuery(function($) {
// -------------------------------------------------------------------


// ---------------------------------------------------------------------------------
// ----- GLOBAL --------------------------------------------------------------------
// ---------------------------------------------------------------------------------

// ----- move site logo into center of menu -----
let header_logo_pos = Math.floor($('.header-menu').find('li').length / 2);
$('.header-menu').find('li:nth-child('+header_logo_pos+')').after('<li class="header-menu-site-logo"></li>');
$('.header-navigation').find('.site-logo').addClass('inside-menu').appendTo('.header-menu-site-logo');


// ---------------------------------------------------------------------------------
// ----- HP TESTIMONIALS SLIDER ----------------------------------------------------
// ---------------------------------------------------------------------------------
if( $('body').hasClass('home') ) {
	// sponsor sidebar rotator
	$(".hp-testimonials-wrap .hp-testimonials-listing").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		//autoplay: true,
		//autoplaySpeed: 3000,
		speed: 500,
		//fade: true,

		//prevArrow:"<img class='slick-prev' src='/wp-content/themes/ftgu/images/icon-nav-left.png'>",
      	//nextArrow:"<img class='slick-next' src='/wp-content/themes/ftgu/images/icon-nav-right.png'>",
      	prevArrow:"<i class='fas fa-arrow-circle-left'></i>",
      	nextArrow:"<i class='fas fa-arrow-circle-right'></i>",
		cssEase: 'linear',
		responsive: [
			{
				breakpoint: 900,
				settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
			},
			{
				breakpoint: 600,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});
}







// -------------------------------------------------------------------

});