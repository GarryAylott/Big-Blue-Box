$(document).ready(function() {

	// Fitvids global
	$(".page-wrap").fitVids();

	// Nav menu
		$('.menu-link').click(function(){
			$('.main-navigation ul').toggleClass('showing');
	});

	// Toggle class for burger icon
	$('#nav-icon').click(function() {
		$(this).toggleClass('open');
	});

	// Add rel noopener etc
	$('a[target^="_blank"]').attr('rel','noopener noreferrer');

});
