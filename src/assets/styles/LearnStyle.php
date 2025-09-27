<?php

return fn() => <<<CSS
   body {
      font-family: 'Inter', sans-serif;
   }

   .logo-font {
      font-family: 'Space Grotesk', sans-serif;
   }

   .mobile-menu {
      transition: all 0.3s ease;
   }

   .hero-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
   }

   .card-hover {
      transition: all 0.3s ease;
   }

   .card-hover:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
   }

   .learning-gradient {
      background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
   }

   .crypto-gradient {
      background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
   }

   .forex-gradient {
      background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
   }

   .progress-gradient {
      background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
   }

   .fade-in {
      animation: fadeIn 0.6s ease-in;
   }

   @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
   }
CSS;