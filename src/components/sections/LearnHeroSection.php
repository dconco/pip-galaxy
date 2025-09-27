<?php

require_once 'components/Header.php';
require_once 'components/AnimatedBackground.php';

class LearnHeroSection
{
   public function __render() {
      return <<<HTML
         <!-- Hero Section with Integrated Header -->
         <section class="hero-gradient text-white py-12">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <Header active="learn" />

            <!-- Hero Content -->
            <div class="container mx-auto px-4 text-center relative z-10 pt-48 md:pt-44 pb-20">
               <div class="fade-in">
                  <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">Master Trading</h1>
                  <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto opacity-90">From beginner to expert - comprehensive guides, tutorials, and resources to accelerate your trading journey in Forex, Crypto, and financial markets.</p>
                  
                  <!-- Learning Path Stats -->
                  <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg p-4 mb-8 max-w-4xl mx-auto">
                     <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                        <div>
                           <div class="text-2xl font-bold">50+</div>
                           <div class="text-sm opacity-75">Lessons</div>
                        </div>
                        <div>
                           <div class="text-2xl font-bold">10K+</div>
                           <div class="text-sm opacity-75">Students</div>
                        </div>
                        <div>
                           <div class="text-2xl font-bold">95%</div>
                           <div class="text-sm opacity-75">Success Rate</div>
                        </div>
                        <div>
                           <div class="text-2xl font-bold">Free</div>
                           <div class="text-sm opacity-75">Always</div>
                        </div>
                     </div>
                  </div>

                  <div class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
                     <Component.Link to="/learn/forex" class="bg-white text-indigo-900 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition-all hover:scale-105 shadow-lg">
                        <i class="fas fa-chart-line mr-2"></i>Start with Forex
                     </Component.Link>
                     <Component.Link to="/learn/crypto" class="bg-transparent border-2 border-white hover:bg-white hover:text-indigo-900 px-8 py-4 rounded-lg font-bold text-lg transition-all hover:scale-105">
                        <i class="fab fa-bitcoin mr-2"></i>Learn Crypto
                     </Component.Link>
                     <Component.Link to="/learn/glossary" class="bg-indigo-800 bg-opacity-50 hover:bg-opacity-70 border-2 border-indigo-400 px-8 py-4 rounded-lg font-bold text-lg transition-all hover:scale-105">
                        <i class="fas fa-book mr-2"></i>Trading Glossary
                     </Component.Link>
                  </div>

                  <!-- Trust Indicators -->
                  <div class="flex flex-wrap justify-center items-center gap-8 text-sm opacity-75">
                     <div class="flex items-center gap-2">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Beginner Friendly</span>
                     </div>
                     <div class="flex items-center gap-2">
                        <i class="fas fa-certificate"></i>
                        <span>Expert Reviewed</span>
                     </div>
                     <div class="flex items-center gap-2">
                        <i class="fas fa-clock"></i>
                        <span>Self-Paced Learning</span>
                     </div>
                  </div>
               </div>
            </div>

            <AnimatedBackground />
            <AnimatedBackground::Learn />
         </section>
      HTML;
   }
}
