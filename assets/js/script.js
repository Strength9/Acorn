
    
    jQuery('#searchsite').on('click', function(e) {
        jQuery("#searchholder").toggleClass("search-show"); //you can list several class names 
        e.preventDefault();
    });
    
    jQuery("#close-search-toggle").on('click', function(e) {
        jQuery("#searchholder").toggleClass("search-show"); //you can list several class names 
        e.preventDefault();
    });
    
    

if(jQuery('#insurers_repeater').length){
       jQuery('#insurers_repeater').slick({
         infinite: true,
         slidesToShow: 6,
         slidesToScroll: 1,
         autoplay: true,
         autoplaySpeed: 3000,
         infinite: true,
           responsive: [
               {
                   breakpoint: 1240,
                   settings: {
                     slidesToShow: 5,
                     slidesToScroll: 1,
                     infinite: true
                   }
                 },
               {
                    breakpoint: 1040,
                    settings: {
                      slidesToShow: 4,
                      slidesToScroll: 1,
                      infinite: true
                    }
                  },
               {
                 breakpoint: 840,
                 settings: {
                   slidesToShow: 3,
                   slidesToScroll: 1,
                   infinite: true
                 }
               },
               {
                 breakpoint: 640,
                 settings: {
                   slidesToShow: 2,
                   slidesToScroll:1,
                   infinite: true
                 }
               },
               {
                 breakpoint: 440,
                 settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1,
                   infinite: true
                 }
               }
            
             ]
       });
};
if(jQuery('#lenders_repeater').length){
       jQuery('#lenders_repeater').slick({
         infinite: true,
         slidesToShow: 6,
         slidesToScroll: 1,
         autoplay: true,
         autoplaySpeed: 3000,
         infinite: true,
           responsive: [
               {
                   breakpoint: 1240,
                   settings: {
                     slidesToShow: 5,
                     slidesToScroll: 1,
                     infinite: true
                   }
                 },
               {
                    breakpoint: 1040,
                    settings: {
                      slidesToShow: 4,
                      slidesToScroll: 1,
                      infinite: true
                    }
                  },
               {
                 breakpoint: 840,
                 settings: {
                   slidesToShow: 3,
                   slidesToScroll: 1,
                   infinite: true
                 }
               },
               {
                 breakpoint: 640,
                 settings: {
                   slidesToShow: 2,
                   slidesToScroll:1,
                   infinite: true
                 }
               },
               {
                 breakpoint: 440,
                 settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1,
                   infinite: true
                 }
               }
            
             ]
       });
};


jQuery(function() {
    var header = jQuery(".navgrid");
    jQuery(window).scroll(function() {    
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 90) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });

   var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
   jQuery('ul a').each(function() {
   if (this.href === path) {
       jQuery(this).addClass('active');
   }
   });
});