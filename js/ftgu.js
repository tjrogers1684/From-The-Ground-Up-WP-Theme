
jQuery(function($) {
// -------------------------------------------------------------------


// ---------------------------------------------------------------------------------
// ----- GLOBAL --------------------------------------------------------------------
// ---------------------------------------------------------------------------------

// ----- move site logo into center of menu -----
let header_logo_pos = Math.floor($('.header-menu').find('li').length / 2);
$('.header-menu').find('li:nth-child('+header_logo_pos+')').after('<li class="header-menu-site-logo"></li>');
$('.header-navigation').find('.site-logo').addClass('inside-menu').appendTo('.header-menu-site-logo');








// -------------------------------------------------------------------

});