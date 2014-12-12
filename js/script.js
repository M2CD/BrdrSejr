$(document).ready(function(){
	
	// MOBILE MENU TOGGLE
	$('.menu-toggle').on('click', function(){
		$('.menu-main').toggleClass('show');
	});
	$('.menu-main li').on('click', function(){
		$(this).children('ul.submenu').slideToggle(200);
	});
	
	// Make main full height of window
	var docHeight = $(window).height(); // height of window
	var mainHeight = $('main').height(); // height of <main> element
	var footerHeight = $('footer').height(); // height of <footer> element
	var footerTop = $('footer').position().top + footerHeight; // height of all content on page

	if (footerTop < docHeight) { // make main fill extra space
	$('main').css('height', (docHeight - footerTop) + mainHeight + 'px');
	}
	if (footerTop > docHeight) { // reset <main> height if content fills window height
	$('main').css('height', 'auto');
	}
	
});
$(window).resize(function(){ // adjust Main height when window is resized
	var docHeight = $(window).height(); // height of window
	var mainHeight = $('main').height(); // height of <main> element
	var footerHeight = $('footer').height(); // height of <footer> element
	var footerTop = $('footer').position().top + footerHeight; // height of all content on page

	if (footerTop < docHeight) { // make main fill extra space
	$('main').css('height', (docHeight - footerTop) + mainHeight + 'px');
	}
	if (footerTop > docHeight) { // reset <main> height if content fills window height
	$('main').css('height', 'auto');
	}
});