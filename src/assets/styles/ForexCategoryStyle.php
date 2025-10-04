<?php

return fn() => <<<CSS
   .forex-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
   }

   .price-up {
      color: #10b981;
   }

   .price-down {
      color: #ef4444;
   }

   .forex-hero {
      background: linear-gradient(135deg, #1e40af 0%, #3730a3 50%, #581c87 100%);
   }

   .currency-flag {
      width: 24px;
      height: 18px;
      border-radius: 2px;
      display: inline-block;
      margin-right: 8px;
   }

   .strength-meter {
      height: 8px;
      border-radius: 4px;
      overflow: hidden;
   }

   .session-indicator {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 8px;
   }

   .session-active {
      background-color: #10b981;
      box-shadow: 0 0 8px rgba(16, 185, 129, 0.5);
   }

   .session-closed {
      background-color: #6b7280;
   }
CSS;