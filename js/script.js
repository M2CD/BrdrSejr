function heightResize(){
		var docHeight = $(window).height(); // height of window
	var mainHeight = $('main').height(); // height of <main> element
	var footerHeight = $('footer').height(); // height of <footer> element
	var footerTop = $('footer').position().top + footerHeight; // height of all content on page

	if (footerTop < docHeight) { // make <main>'s min-height fill extra space
	$('main').css('min-height', (docHeight - footerTop) + mainHeight + 'px');
	}
}

$(document).ready(function(){
	
	// MOBILE MENU TOGGLE
	$('.menu-toggle').on('click', function(){
		$('.menu-main').toggleClass('show');
	});
	$('.menu-main li').on('click', function(){
		$(this).children('ul.submenu').slideToggle(200);
	});
	
	heightResize();

});
$(window).resize(function(){ // adjust Main height when window is resized
	heightResize();
});
$(document).load(function(){ // Run funtions after document is loaded (including images)
	heightResize();
});