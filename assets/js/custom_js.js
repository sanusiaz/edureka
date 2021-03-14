$(document).ready(function () {
	var stickyOffset = $('.sticky').offset().top;
	var breakPoint = stickyOffset += 50;
	$(window).scroll(function(){
	  var sticky = $('.sticky'),
	      scroll = $(window).scrollTop();

	  	if (scroll >= stickyOffset){
	  		sticky.addClass('header_top_fixed');
	  	}
	  	else {
	  		sticky.removeClass('header_top_fixed');
	  	}
	});
});
