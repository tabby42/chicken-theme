var $j = jQuery.noConflict();

$j(document).ready(function( $ ) {
	"use strict";
    
    $(window).scroll(function() {
      //console.log($(window).scrollTop());
      if ($(window).scrollTop() > 300) {
        $('nav.navbar').addClass('stickynav');
      } else {
        $('nav.navbar').removeClass('stickynav');
      }
    });
    
    //smooth scroll für Sprungmarkenmenü
    $('.menu-item > a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({scrollTop: targetOffset}, 750);
                return false;
            }
        }
    });
    
    $('.mobile-slider').flexslider({
        animation: "slide",
        animationSpeed: 300,
        slideshowSpeed: 3000
      });
});
