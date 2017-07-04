(function ($, root, undefined) {

	$(function () {
		'use strict';
	
		// DOM ready, take it away
		jQuery('ul.slider').bxSlider({
			pager:false,
		});


		// Barra Top logo
		$(window).scroll(function()
    	{
	        if ($(this).scrollTop() > 205){
	            $('#barra-top-menu').css({"position":"fixed", "display":"block"});
	        }

	        else {
	             $('#barra-top-menu').css({"position":"fixed", "display":"none"});          
	        }
    	});

		// Iniciar WOW Animaciones
    	var wow = new WOW(
		  {
		    boxClass:     'wev',      // animated element css class (default is wow)
		    animateClass: 'animated', // animation css class (default is animated)
		    offset:       0,          // distance to the element when triggering the animation (default is 0)
		    mobile:       true,       // trigger animations on mobile devices (default is true)
		    live:         true,       // act on asynchronously loaded content (default is true)
		    callback:     function(box) {
		      // the callback is fired every time an animation is started
		      // the argument that is passed in is the DOM node being animated
		    },
		    scrollContainer: null // optional scroll container selector, otherwise use window
		  }
		);
		wow.init();

    	


	});
	
})(jQuery, this);

