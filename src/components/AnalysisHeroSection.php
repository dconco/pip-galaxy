<?php

require_once 'HomeHeader.php';

function AnalysisHeroSection(): string
{
   return <<<HTML
      <!-- Hero Section with Integrated Header -->
      <section class="hero-gradient text-white py-12">
         <HomeHeader active="analysis" />

         <!-- Page Header -->
         <div class="container mx-auto px-8 md:px-4 z-10 pt-48 md:pt-58 pb-20">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end">
               <div>
                  <h1 class="text-3xl md:text-4xl font-bold mb-2">Market Analysis</h1>
                  <p class="text-lg text-indigo-100">Expert technical and fundamental analysis for Forex, Crypto, and Commodities</p>
               </div>
               <div class="mt-12 md:mt-0">
                  <div class="relative">
                     <input type="text" placeholder="Search analysis..." class="pl-10 pr-4 py-2 rounded-full text-gray-800 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                     <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
                  </div>
               </div>
            </div>
         </div>
      </section>
   HTML;
}
