$(document).ready(function() {

	// Fitvids global
	$(".page-wrap").fitVids();

	// Nav menu
		$('.menu-link').click(function(){
			$('.main-navigation ul').toggleClass('showing');
	});

	$('#nav-icon').click(function() {
		$(this).toggleClass('open');
	});

});
