function heightResize(){
		var docHeight = $(window).height(); // height of window
	var mainHeight = $('.main').height(); // height of .main class element
	var footerHeight = $('footer').height(); // height of <footer> element
	var footerTop = $('footer').position().top + footerHeight; // total height of content on page

	if (footerTop < docHeight) { // make .main's min-height fill extra space
	$('.main').css('min-height', (docHeight - footerTop) + mainHeight + 'px');
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
	//MOBILE WEBSHOP MENU
	$('.webshopmenu h2').on('click', function(){
		$('ul.sidemenu').slideToggle(200);
	});
	// Facebook like box
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=30274178883&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}
	(document, 'script', 'facebook-jssdk'));
	
	// Resize .main height
	heightResize();

});
$(window).resize(function(){ // adjust Main height when window is resized
	heightResize();
});