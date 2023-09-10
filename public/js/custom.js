(function ($) {

  "use strict";

    // HOME SLIDER & COURSES & CLIENTS
    $('.home-slider').owlCarousel({
      animateOut: 'fadeOut',
      loop: true,
      dots: false,
      autoplayHoverPause: false,
      autoplay: true,
      smartSpeed: 1000,
      nav:true,
      navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>'
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        1000: {
          items: 2,
        }
      }
    });

    $('.re-slider').owlCarousel({
      animateOut: 'fadeOut',
      items: 3,
      autoWidth: true,
      loop: true,
      dots: true,
      autoplayHoverPause: false,
      autoplay: false,
      smartSpeed: 1000,
      nav: false,
      navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>'
      ],
    });

    $('.owl-courses').owlCarousel({
      animateOut: 'fadeOut',
      loop: true,
      autoplayHoverPause: false,
      autoplay: true,
      smartSpeed: 1000,
      dots: false,
      nav: true,
      navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>'
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        1000: {
          items: 3,
        }
      }
    });

    $('.owl-client').owlCarousel({
      animateOut: 'fadeOut',
      loop: true,
      autoplayHoverPause: false,
      autoplay: false,
      smartSpeed: 1000,
      dots: false,
      margin: 10,
      nav: true,
      navText: [
          '<i class="fa fa-chevron-left"></i>',
          '<i class="fa fa-chevron-right"></i>'
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
        },
        1000: {
          items: 3,
        }
      }
    });

    $('.owl-carousel').owlCarousel({
      items: 1,
      merge: true,
      loop: true,
      margin: 10,
      video: true,
      lazyLoad: true,
      center: true,
      responsive:{
        480: {
          items: 2,
        },
        600: {
          items:4
        }
      }
    });


    // SMOOTHSCROLL
    $(function() {
      $('.custom-navbar a, #home a').on('click', function(event) {
        var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
          }, 1000);
            event.preventDefault();
      });
    });

})(jQuery);
