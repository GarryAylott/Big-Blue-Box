$(document).ready(function() {

	// Fitvids global
	$(".page-wrap").fitVids();

	// Header parallax
	$(window).scroll(function() {   
	    var scroll = $(window).scrollTop();
	    if (scroll >= 0) {
	        $('#header').css({
		      'background-position' : '50% ' + (+scroll/4)+"px"
			});
	    } 
	});
	
	// Nav menu
	$('.menu-link').click(function(){
		$('.main-navigation ul').toggleClass('showing');
	});

	$('#nav-icon').click(function() {
		$(this).toggleClass('open');
	});
	
});