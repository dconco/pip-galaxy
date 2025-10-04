<?php

require_once 'components/Header.php';
require_once 'components/BreadcrumbComponent.php';

class ForexCategoryHeroSection
{
   public function __render() {
      return <<<HTML
         <!-- Hero Section with Integrated Header -->
         <section class="hero-gradient text-white py-12">
            <Header active="analysis" />

            <!-- Hero Section -->
            <section class="crypto-grid text-white py-16 container mx-auto px-8 md:px-4 z-10 pt-48 md:pt-58 pb-20">
               <div class="container mx-auto px-4 text-center">
                  <div class="flex justify-center mb-6">
                     <i class="fas fa-chart-line text-6xl text-blue-300"></i>
                  </div>
                  <h1 class="text-4xl md:text-5xl font-bold mb-4">Forex Market Analysis</h1>
                  <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Professional currency analysis, trading strategies, and market insights for major and exotic forex pairs</p>
                  <div class="flex flex-col sm:flex-row justify-center gap-4">
                     <a href="#market-overview" class="bg-white text-indigo-900 hover:bg-gray-100 px-6 py-3 rounded-md font-bold text-center">Market Overview</a>
                     <a href="#analysis" class="bg-transparent border-2 border-white hover:bg-white hover:text-indigo-900 px-6 py-3 rounded-md font-bold text-center">Latest Analysis</a>
                  </div>
               </div>
            </section>
         </section>

         <BreadcrumbComponent active="forex" />
      HTML;
   }
}
