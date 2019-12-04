(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		
		$(document).ready(function(){
			$('.header-menu__toggle').click(function(){
				$('.header-menu__nav').toggleClass('visible');
				$('body').toggleClass('cover-bg');
			});
		});
		
	});
	
	// Display our mobile callout
	if ($(window).width() < 500) {
		$(window).scroll(function() {
			if ($(window).scrollTop() > 100) {
				$('.mobile-callout').fadeIn('slow').css('display','flex');
			} else if ($(window).scrollTop() < 100) {
				$('.mobile-callout').fadeOut('slow');
			} 
		});
	}
	
})(jQuery, this);
