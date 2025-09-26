<?php

return fn() => <<<JS
   // Header color change on scroll
   $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      var heroHeight = $('.hero-gradient').height();

      if (scroll >= heroHeight - 100) {
         // Scrolled past hero section - change to white background with dark text
         $('header').removeClass('bg-white bg-opacity-10 text-white').addClass('bg-white bg-opacity-90 text-gray-800');
         $('header a:not(.active)').removeClass('hover:text-indigo-200 hover:bg-white hover:bg-opacity-10').addClass('hover:text-indigo-600 hover:bg-indigo-50');
         $('header a.active').removeClass('text-white bg-white bg-opacity-20').addClass('text-indigo-600 bg-indigo-50');
         $('#mobileMenu').removeClass('hero-gradient').addClass('bg-white bg-opacity-95 border-t');
         $('.mobile-menu a:not(.active), .mobile-menu button').removeClass('text-white hover:text-indigo-200 hover:bg-white hover:bg-opacity-10').addClass('text-gray-800 hover:text-indigo-600 hover:bg-indigo-50');
         $('.mobile-menu a.active').removeClass('text-white bg-white bg-opacity-20').addClass('text-indigo-600 bg-indigo-50');
      } else {
         // In hero section - transparent background with white text
         $('header').removeClass('bg-white bg-opacity-90 text-gray-800').addClass('bg-white bg-opacity-10 text-white');
         $('header a:not(.active)').removeClass('hover:text-indigo-600 hover:bg-indigo-50').addClass('hover:text-indigo-200 hover:bg-white hover:bg-opacity-10');
         $('header a.active').removeClass('text-indigo-600 bg-indigo-50').addClass('text-white bg-white bg-opacity-20');
         $('#mobileMenu').removeClass('bg-white bg-opacity-95 border-t').addClass('hero-gradient');
         $('.mobile-menu a:not(.active), .mobile-menu button').removeClass('text-gray-800 hover:text-indigo-600 hover:bg-indigo-50').addClass('text-white hover:text-indigo-200 hover:bg-white hover:bg-opacity-10');
         $('.mobile-menu a.active').removeClass('text-indigo-600 bg-indigo-50').addClass('text-white bg-white bg-opacity-20');
      }
   });
JS;
