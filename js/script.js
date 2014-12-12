$(document).ready(function(){
	
	// MOBILE MENU TOGGLE
	$('.menu-toggle').on('click', function(){
		$('.menu-main').toggleClass('show');
	});
	$('.menu-main li').on('click', function(){
		$(this).children('ul.submenu').slideToggle(200);
	});
	
	// Make main full height of window
	var docHeight = $(window).height();
	var mainHeight = $('main').height();
	var footerHeight = $('footer').height();
	var footerTop = $('footer').position().top + footerHeight;

	if (footerTop < docHeight) {
	$('main').css('height', (docHeight - footerTop) + mainHeight + 'px');
	}
	
});
// adjust Main height when window is resized
$(window).resize(function(){
	var docHeight = $(window).height();
	var mainHeight = $('main').height();
	var footerHeight = $('footer').height();
	var footerTop = $('footer').position().top + footerHeight;

	if (footerTop < docHeight) {
	$('main').css('height', (docHeight - footerTop) + mainHeight + 'px');
	}
	if (footerTop > docHeight) {
	$('main').css('height', 'auto');
	}
});