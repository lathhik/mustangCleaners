(function ($) {
"use strict";


  $(window).on('scroll',function() {    
   var scroll = $(window).scrollTop();
   if (scroll < 245) {
    $("#header-sticky").removeClass("scroll-header");
   }else{
    $("#header-sticky").addClass("scroll-header");
   }
  });
  
/* meanmenu */
$('.main-menu nav').meanmenu({
	 meanMenuContainer: '.mobile-menu',
	 meanScreenWidth: "991"
 });
 
 
/* slider-active */
$('.slider-active').owlCarousel({
    loop:true,
    nav:false,
	dots:true,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* slider-active */
$('.slider1-active').owlCarousel({
    loop:true,
    nav:false,
	dots:true,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* testimonial-active */
$('.testimonial-active').owlCarousel({
    loop:true,
    nav:false,
	dots:false,
	autoplay:false,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

/* testimonial-2-active */
$('.testimonial-2-active').owlCarousel({
    loop:true,
    nav:true,
	dots:false,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


/* counter */
$('.counter').counterUp({
    delay: 10,
    time: 1000
});



/* image-link */
$('.image-link').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});

/* Scroll Up */
$.scrollUp({
	easingType: 'linear',
	scrollSpeed: 900,
	animation: 'fade',
	scrollText: '<i class="fa fa-angle-up"></i>',
});	


/* magnificPopup */
$('.video-popup').magnificPopup({
  type: 'iframe'
});

/* blog-thumb-active */
$('.blog-thumb-active').owlCarousel({
    loop:true,
    nav:true,
	autoplay:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        450:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* WOW active */
new WOW().init();

})(jQuery);	