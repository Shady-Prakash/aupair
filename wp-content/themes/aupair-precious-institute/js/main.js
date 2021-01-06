
/* start-sticky-header-js */

jQuery(document).ready(function($){
	var header = $('.navbar');
	$(window).on("scroll", function(){
		var sticky = header.offset().top;
		if($(window).width() > 991){
			stickyHeader();
		}
	});
	
	function stickyHeader(sticky){
		if(window.pageYOffset > 100 ) {
			header.addClass('sticky').addClass('sticky__header').removeClass('parallax__header');
		}
		else if(window.pageYOffset === 0){
			header.removeClass('sticky').removeClass('sticky__header').addClass('parallax__header');	
		}
	}

	$("#news-slider").owlCarousel({
		items : 4,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[980,2],
		itemsMobile : [600,1],
		autoPlay:true,
		dots:false
		
	});

	$("#lightgallery").lightGallery({
		thumbnail: true,
	});
	$("#testimonial-slider").owlCarousel({
		items:1,
		itemsDesktop:[1000,1],
		itemsDesktopSmall:[979,1],
		itemsTablet:[768,1],
		slideSpeed:1000,
		singleItem:true,
		autoPlay:true,
	});


});
/* end-sticky-header */

