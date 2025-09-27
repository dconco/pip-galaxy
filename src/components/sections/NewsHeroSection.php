<?php

require_once 'components/HeaderComponent.php';

class NewsHeroSection {
   public function __render ()
   {
      return <<<HTML
         <HeaderComponent active="news" />
         <NewsHeroSection::NewsTicker />
         <NewsHeroSection::PageHeader />
      HTML;
   }



   public function NewsTicker ()
   {
      return <<<HTML
         <!-- News Ticker -->
         <div class="bg-red-600 text-white py-2 overflow-hidden">
            <div class="container mx-auto px-4 flex items-center">
                  <span class="font-bold mr-3 whitespace-nowrap">LIVE:</span>
                  <div class="overflow-hidden">
                     <div class="news-ticker whitespace-nowrap">
                        <span class="mr-8">USD strengthens after Powell comments • </span>
                        <span class="mr-8">Bitcoin drops below $29k as SEC delays ETF decisions • </span>
                        <span class="mr-8">Gold rebounds from 3-month lows • </span>
                        <span class="mr-8">ECB expected to hike rates by 25bps next week • </span>
                        <span class="mr-8">Oil prices surge on OPEC+ production cuts</span>
                     </div>
                  </div>
            </div>
         </div>
      HTML;
   }



   public function PageHeader ()
   {
      return <<<HTML
         <!-- Page Header -->
         <section class="hero-gradient text-white py-16">
            <div class="container mx-auto px-4">
                  <div class="flex flex-col md:flex-row justify-between items-start md:items-end">
                     <div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">Market News</h1>
                        <p class="text-lg text-indigo-100">Latest financial news and economic events impacting global markets</p>
                     </div>
                     <div class="mt-4 md:mt-0">
                        <div class="flex space-x-3">
                              <div class="relative">
                                 <select class="appearance-none bg-indigo-700 bg-opacity-50 border border-indigo-400 text-white pl-3 pr-8 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                                    <option>All Categories</option>
                                    <option>Forex</option>
                                    <option>Crypto</option>
                                    <option>Stocks</option>
                                    <option>Commodities</option>
                                    <option>Economy</option>
                                 </select>
                                 <i class="fas fa-chevron-down absolute right-3 top-3 text-white text-xs"></i>
                              </div>
                              <div class="relative">
                                 <select class="appearance-none bg-indigo-700 bg-opacity-50 border border-indigo-400 text-white pl-3 pr-8 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                                    <option>Today</option>
                                    <option>This Week</option>
                                    <option>This Month</option>
                                    <option>Custom Range</option>
                                 </select>
                                 <i class="fas fa-chevron-down absolute right-3 top-3 text-white text-xs"></i>
                              </div>
                        </div>
                     </div>
                  </div>
            </div>
         </section>
      HTML;
   }
}