$(document).ready(function(){
	
	// MOBILE MENU TOGGLE
	$('.menu-toggle').on('click', function(){
		$('.menu-main').toggleClass('show');
	});
	$('.menu-main li').on('click', function(){
		$(this).children('ul.submenu').slideToggle(200);
	});
	
	
});