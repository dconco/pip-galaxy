<?php

return fn() => <<<CSS
   .crypto-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
   }

   .price-up {
      color: #10b981;
   }

   .price-down {
      color: #ef4444;
   }

   .crypto-grid {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
   }

   .crypto-sparkline {
      height: 40px;
      background: linear-gradient(45deg, #4f46e5, #7c3aed);
      border-radius: 4px;
   }
CSS;