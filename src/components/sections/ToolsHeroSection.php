<?php

require_once 'components/Header.php';

class ToolsHeroSection
{
   public function __render() {
      return <<<HTML
         <!-- Hero Section with Integrated Header -->
         <section class="hero-gradient text-white py-12">
            <Header active="tools" />

            <!-- Hero Section -->
            <section class="crypto-grid text-white py-16 container mx-auto px-8 md:px-4 z-10 pt-48 md:pt-58 pb-20">
               <div class="container mx-auto px-4 text-center">
                  <div class="flex justify-center mb-6">
                     <i class="fas fa-calculator fa-4x md:fa-5x text-6xl text-blue-300"></i>
                  </div>

                  <h1 class="text-4xl md:text-5xl font-bold mb-4">Trading Calculators & Tools</h1>
                  <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Essential utilities for risk management, position sizing, and market analysis</p>
                  <div class="flex flex-wrap justify-center gap-3">
                     <a href="#pip-calculator" class="bg-white bg-opacity-20 hover:bg-opacity-30 px-4 py-2 rounded-md">Pip Calculator</a>
                     <a href="#position-size" class="bg-white bg-opacity-20 hover:bg-opacity-30 px-4 py-2 rounded-md">Position Sizer</a>
                     <a href="#forex-hours" class="bg-white bg-opacity-20 hover:bg-opacity-30 px-4 py-2 rounded-md">Market Hours</a>
                     <a href="#correlation" class="bg-white bg-opacity-20 hover:bg-opacity-30 px-4 py-2 rounded-md">Currency Correlation</a>
                  </div>
               </div>
            </section>
         </section>
      HTML;
   }
}
