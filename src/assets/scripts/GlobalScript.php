<?php

return fn() => <<<JS
   // Mobile menu toggle
   $('#menuBtn').click(function () {
      $('#mobileMenu, #headerMobileMenu').slideToggle();
   });

   $('#page-loading-overlay').hide();
   $('#page-loading-bar').hide();
   $('#page-loading-dots').hide();

   /* Show Loading Page on Navigation */
   phpspa.on('beforeload', () => {
      $('#page-loading-overlay').show();
      $('#page-loading-bar').show();
      $('#page-loading-dots').show();
   });

   /* Hide Loading Page on Navigation */
   phpspa.on('load', () => {
      $('#page-loading-overlay').hide();
      $('#page-loading-bar').hide();
      $('#page-loading-dots').hide();
   });

   // Header color change on scroll
   $(window).scroll(function () {
      const scroll = $(window).scrollTop();
      const heroHeight = $('.hero-gradient').height();

      if (scroll >= heroHeight - 100) {
         // Scrolled past hero section - change to white background with dark text
         $('#header').removeClass('bg-white bg-opacity-10 text-white').addClass('bg-white bg-opacity-90 text-gray-800');
         $('#header a:not(.active)').removeClass('hover:text-indigo-200 hover:bg-white hover:bg-opacity-10').addClass('hover:text-indigo-600 hover:bg-indigo-50');
         $('#header a.active').removeClass('text-white bg-white bg-opacity-20').addClass('text-indigo-600 bg-indigo-50');
         $('#headerMobileMenu').removeClass('hero-gradient').addClass('bg-white bg-opacity-95 border-t');
         $('.header-mobile-menu a:not(.active), .header-mobile-menu button').removeClass('text-white hover:text-indigo-200 hover:bg-white hover:bg-opacity-10').addClass('text-gray-800 hover:text-indigo-600 hover:bg-indigo-50');
         $('.header-mobile-menu a.active').removeClass('text-white bg-white bg-opacity-20').addClass('text-indigo-600 bg-indigo-50');
         $('#signInBtn').removeClass('bg-white bg-opacity-20 backdrop-blur-sm').addClass('bg-indigo-600 text-white');
      } else {
         // In hero section - transparent background with white text
         $('#header').removeClass('bg-white bg-opacity-90 text-gray-800').addClass('bg-white bg-opacity-10 text-white');
         $('#header a:not(.active)').removeClass('hover:text-indigo-600 hover:bg-indigo-50').addClass('hover:text-indigo-200 hover:bg-white hover:bg-opacity-10');
         $('#header a.active').removeClass('text-indigo-600 bg-indigo-50').addClass('text-white bg-white bg-opacity-20');
         $('#headerMobileMenu').removeClass('bg-white bg-opacity-95 border-t').addClass('hero-gradient');
         $('.header-mobile-menu a:not(.active), .header-mobile-menu button').removeClass('text-gray-800 hover:text-indigo-600 hover:bg-indigo-50').addClass('text-white hover:text-indigo-200 hover:bg-white hover:bg-opacity-10');
         $('.header-mobile-menu a.active').removeClass('text-indigo-600 bg-indigo-50').addClass('text-white bg-white bg-opacity-20');
         $('#signInBtn').removeClass('bg-indigo-600 text-white').addClass('bg-white bg-opacity-20 backdrop-blur-sm');
      }
   });
JS;
