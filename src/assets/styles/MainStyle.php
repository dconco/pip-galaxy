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

   /* Page loading overlay */
   .page-loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.221);
      z-index: 9998;
      pointer-events: all;
      backdrop-filter: blur(1px);
   }

   /* Page loading bar */
   .page-loading {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 8px;
      background: rgba(255, 255, 255, 0.2);
      z-index: 9999;
      overflow: hidden;
   }

   .page-loading::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: #10b981;
      animation: loading-scroll 4s infinite;
   }

   .page-loading::after {
      content: '';
      position: absolute;
      top: 0;
      left: -50%;
      width: 50%;
      height: 100%;
      background: #059669;
      animation: loading-scroll 4s infinite 1s;
   }

   @keyframes loading-scroll {
      0% {
         left: -100%;
      }
      50% {
         left: 100%;
      }
      100% {
         left: 100%;
      }
   }

   /* Alternative pulsing dots loading */
   .page-loading-dots {
      position: fixed;
      top: 12px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 9999;
      display: flex;
      gap: 4px;
   }

   .loading-dot {
      width: 8px;
      height: 8px;
      background: #10b981;
      border-radius: 50%;
      animation: loading-pulse 3s infinite;
   }

   .loading-dot:nth-child(2) {
      animation-delay: 0.6s;
   }

   .loading-dot:nth-child(3) {
      animation-delay: 1.2s;
   }

   @keyframes loading-pulse {
      0%, 80%, 100% {
         opacity: 0.3;
         transform: scale(0.8);
      }
      40% {
         opacity: 1;
         transform: scale(1.2);
      }
   }
CSS;
