<?php

return fn() => <<<HTML
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/dist/tailwind.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   </head>
   <body>
      <!-- Page Loading Overlay -->
      <div class="page-loading-overlay" id="page-loading-overlay"></div>

      <!-- Page Loading Bar -->
      <div class="page-loading" id="page-loading-bar"></div>

      <!-- Alternative Loading Dots -->
      <div class="page-loading-dots" id="page-loading-dots">
         <div class="loading-dot"></div>
         <div class="loading-dot"></div>
         <div class="loading-dot"></div>
      </div>

      <div id="app"></div>

      <script src="https://unpkg.com/phpspa-js"></script>
   </body>
   </html>
HTML;
