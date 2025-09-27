<?php

class AnimatedBackground {
   public function __render() {
      return <<<HTML
         <!-- Animated Background Elements -->
         <div class="absolute inset-0 overflow-hidden z-0">
            <div class="absolute -top-20 -left-20 w-96 h-96 bg-purple-600 rounded-full opacity-30 filter blur-3xl animate-blob animation-delay-2000"></div>
            <div class="absolute top-10 right-10 w-72 h-72 bg-pink-500 rounded-full opacity-30 filter blur-2xl animate-blob animation-delay-4000"></div>
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 w-80 h-80 bg-blue-500 rounded-full opacity-30 filter blur-2xl animate-blob"></div>
         </div>
      HTML;
   }

   public function Learn() {
      return <<<HTML
         <div class="absolute top-44 left-10 text-white opacity-10 text-6xl">
            <i class="fas fa-graduation-cap"></i>
         </div>
         <div class="absolute bottom-20 right-10 text-white opacity-10 text-6xl">
            <i class="fas fa-chart-area"></i>
         </div>
      HTML;
   }

   public function Home() {
      return <<<HTML
         <div class="absolute top-44 left-10 text-white opacity-10 text-6xl pulse-animation">
            <i class="fas fa-chart-line"></i>
         </div>
         <div class="absolute bottom-20 right-10 text-white opacity-10 text-6xl pulse-animation" style="animation-delay: 1s;">
            <i class="fab fa-bitcoin"></i>
         </div>
      HTML;
   }
}