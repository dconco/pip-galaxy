<?php

class LearnIndexComponents
{
   public function __render() {
      return <<<HTML
         <LearnIndexComponents::LearningPaths />
         <LearnIndexComponents::QuickAccessToolsSection />
         <LearnIndexComponents::LearningStatistics />
      HTML;
   }



   
   public function LearningPaths() {
      return <<<HTML

         <!-- Learning Paths Section -->
         <section class="py-16 bg-gradient-to-b from-gray-50 to-white">
            <div class="container mx-auto px-4">
               <div class="text-center mb-12">
                  <h2 class="text-4xl font-bold mb-4">Choose Your Learning Path</h2>
                  <p class="text-xl text-gray-600 max-w-3xl mx-auto">Structured courses designed to take you from novice to professional trader</p>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                  <!-- Forex Learning Path -->
                  <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 card-hover relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-32 h-32 forex-gradient rounded-full opacity-10 transform translate-x-16 -translate-y-16"></div>
                     <div class="flex items-center mb-6 relative z-10">
                        <div class="forex-gradient p-3 rounded-xl text-white text-xl mr-4">
                           <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                           <h3 class="font-bold text-xl">Forex Trading</h3>
                           <div class="text-sm text-gray-500">15 Lessons • 6 Hours</div>
                        </div>
                     </div>
                     <p class="text-gray-600 mb-6 leading-relaxed">Master the world's largest financial market. Learn currency pairs, technical analysis, and risk management strategies.</p>
                     
                     <!-- Progress Bar -->
                     <div class="mb-6">
                        <div class="flex justify-between text-sm mb-2">
                           <span>Progress</span>
                           <span>0/15 Lessons</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                           <div class="forex-gradient h-2 rounded-full" style="width: 0%"></div>
                        </div>
                     </div>

                     <!-- Key Topics -->
                     <div class="space-y-2 mb-6 text-sm">
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-green-500 mr-2"></i>
                           Currency Pairs & Market Basics
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-green-500 mr-2"></i>
                           Technical Analysis & Charts
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-green-500 mr-2"></i>
                           Risk Management Strategies
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-green-500 mr-2"></i>
                           Trading Psychology
                        </div>
                     </div>

                     <Component.Link to="/forex" class="inline-flex items-center justify-center w-full bg-gradient-to-r from-green-500 to-teal-500 text-white font-semibold py-3 rounded-lg hover:from-green-600 hover:to-teal-600 transition-all">
                        Start Forex Course <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
                  </div>

                  <!-- Crypto Learning Path -->
                  <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 card-hover relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-32 h-32 crypto-gradient rounded-full opacity-10 transform translate-x-16 -translate-y-16"></div>
                     <div class="flex items-center mb-6 relative z-10">
                        <div class="crypto-gradient p-3 rounded-xl text-white text-xl mr-4">
                           <i class="fab fa-bitcoin"></i>
                        </div>
                        <div>
                           <h3 class="font-bold text-xl">Crypto Trading</h3>
                           <div class="text-sm text-gray-500">12 Lessons • 5 Hours</div>
                        </div>
                     </div>
                     <p class="text-gray-600 mb-6 leading-relaxed">Navigate the exciting world of cryptocurrency. Understand blockchain, digital assets, and crypto market dynamics.</p>
                     
                     <!-- Progress Bar -->
                     <div class="mb-6">
                        <div class="flex justify-between text-sm mb-2">
                           <span>Progress</span>
                           <span>0/12 Lessons</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                           <div class="crypto-gradient h-2 rounded-full" style="width: 0%"></div>
                        </div>
                     </div>

                     <!-- Key Topics -->
                     <div class="space-y-2 mb-6 text-sm">
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-orange-500 mr-2"></i>
                           Blockchain & Digital Assets
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-orange-500 mr-2"></i>
                           Major Cryptocurrencies
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-orange-500 mr-2"></i>
                           DeFi & NFT Markets
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-orange-500 mr-2"></i>
                           Portfolio Management
                        </div>
                     </div>

                     <Component.Link to="/crypto" class="inline-flex items-center justify-center w-full bg-gradient-to-r from-pink-500 to-red-500 text-white font-semibold py-3 rounded-lg hover:from-pink-600 hover:to-red-600 transition-all">
                        Start Crypto Course <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
                  </div>

                  <!-- Trading Fundamentals -->
                  <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 card-hover relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-32 h-32 learning-gradient rounded-full opacity-10 transform translate-x-16 -translate-y-16"></div>
                     <div class="flex items-center mb-6 relative z-10">
                        <div class="learning-gradient p-3 rounded-xl text-white text-xl mr-4">
                           <i class="fas fa-book-open"></i>
                        </div>
                        <div>
                           <h3 class="font-bold text-xl">Trading Fundamentals</h3>
                           <div class="text-sm text-gray-500">10 Lessons • 4 Hours</div>
                        </div>
                     </div>
                     <p class="text-gray-600 mb-6 leading-relaxed">Essential trading concepts, market analysis, and investment principles applicable across all financial markets.</p>
                     
                     <!-- Progress Bar -->
                     <div class="mb-6">
                        <div class="flex justify-between text-sm mb-2">
                           <span>Progress</span>
                           <span>0/10 Lessons</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                           <div class="learning-gradient h-2 rounded-full" style="width: 0%"></div>
                        </div>
                     </div>

                     <!-- Key Topics -->
                     <div class="space-y-2 mb-6 text-sm">
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                           Market Types & Structure
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                           Fundamental Analysis
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                           Portfolio Theory
                        </div>
                        <div class="flex items-center text-gray-600">
                           <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                           Economic Indicators
                        </div>
                     </div>

                     <Component.Link to="/glossary" class="inline-flex items-center justify-center w-full bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-semibold py-3 rounded-lg hover:from-blue-600 hover:to-cyan-600 transition-all">
                        Start Learning <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
                  </div>
               </div>
            </div>
         </section>
      HTML;
   }




   public function QuickAccessToolsSection() {
      return <<<HTML
         <!-- Quick Access Tools Section -->
         <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
               <div class="text-center mb-12">
                  <h2 class="text-4xl font-bold mb-4">Quick Learning Resources</h2>
                  <p class="text-xl text-gray-600 max-w-3xl mx-auto">Essential tools and references to support your learning journey</p>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                  <!-- Trading Glossary -->
                  <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all card-hover">
                     <div class="text-3xl text-indigo-600 mb-4">
                        <i class="fas fa-book"></i>
                     </div>
                     <h3 class="font-bold text-lg mb-2">Trading Glossary</h3>
                     <p class="text-gray-600 text-sm mb-4">Comprehensive dictionary of trading terms and concepts</p>
                     <Component.Link to="/glossary" class="text-indigo-600 font-semibold text-sm hover:text-indigo-800">
                        Browse Terms <i class="fas fa-arrow-right ml-1"></i>
                     </Component.Link>
                  </div>

                  <!-- Market Analysis -->
                  <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all card-hover">
                     <div class="text-3xl text-green-600 mb-4">
                        <i class="fas fa-chart-area"></i>
                     </div>
                     <h3 class="font-bold text-lg mb-2">Live Analysis</h3>
                     <p class="text-gray-600 text-sm mb-4">Real-time market analysis and trading setups</p>
                     <Component.Link to="/analysis" class="text-green-600 font-semibold text-sm hover:text-green-800">
                        View Analysis <i class="fas fa-arrow-right ml-1"></i>
                     </Component.Link>
                  </div>

                  <!-- Trading Tools -->
                  <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all card-hover">
                     <div class="text-3xl text-purple-600 mb-4">
                        <i class="fas fa-calculator"></i>
                     </div>
                     <h3 class="font-bold text-lg mb-2">Trading Calculators</h3>
                     <p class="text-gray-600 text-sm mb-4">Position size, pip value, and risk management tools</p>
                     <Component.Link to="/tools" class="text-purple-600 font-semibold text-sm hover:text-purple-800">
                        Use Tools <i class="fas fa-arrow-right ml-1"></i>
                     </Component.Link>
                  </div>

                  <!-- Market News -->
                  <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all card-hover">
                     <div class="text-3xl text-orange-600 mb-4">
                        <i class="fas fa-newspaper"></i>
                     </div>
                     <h3 class="font-bold text-lg mb-2">Market News</h3>
                     <p class="text-gray-600 text-sm mb-4">Latest financial news and market updates</p>
                     <Component.Link to="/news" class="text-orange-600 font-semibold text-sm hover:text-orange-800">
                        Read News <i class="fas fa-arrow-right ml-1"></i>
                     </Component.Link>
                  </div>
               </div>
            </div>
         </section>
      HTML;
   }



   public function LearningStatistics() {
      return <<<HTML
         <!-- Learning Statistics -->
         <section class="py-16 progress-gradient">
            <div class="container mx-auto px-4">
               <div class="text-center mb-12">
                  <h2 class="text-4xl font-bold text-white mb-4">Join Successful Traders</h2>
                  <p class="text-xl text-yellow-100 max-w-3xl mx-auto">Our comprehensive education platform has helped thousands achieve trading success</p>
               </div>
               
               <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center text-white">
                  <div class="fade-in">
                     <div class="text-5xl font-bold mb-2">10K+</div>
                     <div class="text-xl text-yellow-200">Students Trained</div>
                     <div class="text-sm text-yellow-300 mt-1">Active learners</div>
                  </div>
                  <div class="fade-in" style="animation-delay: 0.2s;">
                     <div class="text-5xl font-bold mb-2">37</div>
                     <div class="text-xl text-yellow-200">Course Modules</div>
                     <div class="text-sm text-yellow-300 mt-1">Comprehensive content</div>
                  </div>
                  <div class="fade-in" style="animation-delay: 0.4s;">
                     <div class="text-5xl font-bold mb-2">95%</div>
                     <div class="text-xl text-yellow-200">Success Rate</div>
                     <div class="text-sm text-yellow-300 mt-1">Student satisfaction</div>
                  </div>
                  <div class="fade-in" style="animation-delay: 0.6s;">
                     <div class="text-5xl font-bold mb-2">24/7</div>
                     <div class="text-xl text-yellow-200">Support</div>
                     <div class="text-sm text-yellow-300 mt-1">Always available</div>
                  </div>
               </div>

               <LearnIndexComponents::TestimonialSection />
            </div>
         </section>
      HTML;
   }



   public function TestimonialSection() {
      return <<<HTML
         <!-- Testimonial -->
         <div class="mt-16 max-w-4xl mx-auto">
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 text-center">
               <div class="text-2xl text-white mb-4 leading-relaxed">
                  "The learning resources at TradePulse are incredible. I went from complete beginner to profitable trader in just 3 months thanks to their structured approach."
               </div>
               <div class="flex items-center justify-center">
                  <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Testimonial" class="w-12 h-12 rounded-full mr-4">
                  <div class="text-left">
                     <div class="text-white font-semibold">Emma Rodriguez</div>
                     <div class="text-yellow-200 text-sm">Independent Trader, Miami</div>
                  </div>
               </div>
            </div>
         </div>
      HTML;
   }
}