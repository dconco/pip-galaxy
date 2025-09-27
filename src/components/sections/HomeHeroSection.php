<?php

require_once 'components/Header.php';

class HomeHeroSection
{
   public function __render()
   {
      return <<<HTML
         <!-- Hero Section with Integrated Header -->
         <section class="hero-gradient text-white min-h-screen relative overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <Header />

            <!-- Hero Content -->
            <div class="container mx-auto px-4 text-center relative z-10 pt-48 md:pt-60 pb-20">
               <div class="fade-in">
                     <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">Market Insights & Trading Strategies</h1>
                     <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto opacity-90">Stay ahead with our expert analysis on Forex, Crypto, and global markets. Join thousands of traders making smarter decisions.</p>

                     <!-- Live Market Stats Bar -->
                     <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg p-4 mb-8 max-w-4xl mx-auto">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                           <div>
                                 <div class="text-2xl font-bold">$2.1T</div>
                                 <div class="text-sm opacity-75">Daily FX Volume</div>
                           </div>
                           <div>
                                 <div class="text-2xl font-bold text-green-300">+5.2%</div>
                                 <div class="text-sm opacity-75">BTC 24h</div>
                           </div>
                           <div>
                                 <div class="text-2xl font-bold">156.4</div>
                                 <div class="text-sm opacity-75">USD/JPY</div>
                           </div>
                           <div>
                                 <div class="text-2xl font-bold text-green-300">+0.8%</div>
                                 <div class="text-sm opacity-75">EUR/USD</div>
                           </div>
                        </div>
                     </div>

                     <div class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
                        <a href="learn/index.html" class="bg-white text-indigo-900 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition-all hover:scale-105 shadow-lg">
                           <i class="fas fa-graduation-cap mr-2"></i>Start Learning
                        </a>
                        <a href="tools/index.html" class="bg-transparent border-2 border-white hover:bg-white hover:text-indigo-900 px-8 py-4 rounded-lg font-bold text-lg transition-all hover:scale-105">
                           <i class="fas fa-tools mr-2"></i>Market Tools
                        </a>
                        <a href="/analysis/index.html" class="bg-indigo-800 bg-opacity-50 hover:bg-opacity-70 border-2 border-indigo-400 px-8 py-4 rounded-lg font-bold text-lg transition-all hover:scale-105">
                           <i class="fas fa-chart-area mr-2"></i>Latest Analysis
                        </a>
                     </div>

                     <!-- Trust Indicators -->
                     <div class="flex flex-wrap justify-center items-center gap-8 text-sm opacity-75">
                        <div class="flex items-center gap-2">
                           <i class="fas fa-users"></i>
                           <span>50,000+ Active Traders</span>
                        </div>
                        <div class="flex items-center gap-2">
                           <i class="fas fa-chart-line"></i>
                           <span>Daily Market Analysis</span>
                        </div>
                        <div class="flex items-center gap-2">
                           <i class="fas fa-shield-alt"></i>
                           <span>Trusted Since 2025</span>
                        </div>
                     </div>
               </div>
            </div>

            <!-- Animated Background Elements -->
            <div class="absolute top-20 left-10 text-white opacity-10 text-6xl pulse-animation">
               <i class="fas fa-chart-line"></i>
            </div>
            <div class="absolute bottom-20 right-10 text-white opacity-10 text-4xl pulse-animation" style="animation-delay: 1s;">
               <i class="fab fa-bitcoin"></i>
            </div>
         </section>
      HTML;
   }
}
