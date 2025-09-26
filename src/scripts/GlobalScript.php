<?php

return fn() => <<<JS
   // Mobile menu toggle
   $('#menuBtn').click(function () {
      $('#mobileMenu').slideToggle();
   });
JS;
