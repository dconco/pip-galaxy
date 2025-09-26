<?php

class HomePageComponents
{
   public function __render()
   {
      return <<<HTML
         {$this->MarketOverview()}
         {$this->StatisticSection()}
         {$this->LatestArticles()}
         {$this->FeaturedTools()}
         {$this->Newsletter()}
      HTML;
   }

   public function MarketOverview()
   {
      return <<<HTML
         <!-- Market Overview -->
         <section class="py-16 bg-gradient-to-b from-gray-50 to-white">
            <div class="container mx-auto px-4">
               <div class="text-center mb-12">
                  <h2 class="text-4xl font-bold mb-4">Live Market Overview</h2>
                  <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real-time market data and insights to keep you informed of the latest opportunities</p>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                  <!-- Forex Strength Meter -->
                  <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 card-hover relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-32 h-32 stats-gradient rounded-full opacity-10 transform translate-x-16 -translate-y-16"></div>
                     <div class="flex items-center mb-6 relative z-10">
                        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-3 rounded-xl text-white text-xl mr-4">
                           <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="font-bold text-xl">Forex Strength Meter</h3>
                     </div>
                     <div class="mb-6">
                        <div class="grid grid-cols-2 gap-2 text-sm mb-4">
                           <div class="flex justify-between"><span>USD</span><span class="text-green-600 font-bold">+85%</span></div>
                           <div class="flex justify-between"><span>EUR</span><span class="text-blue-600 font-bold">+72%</span></div>
                           <div class="flex justify-between"><span>GBP</span><span class="text-yellow-600 font-bold">+58%</span></div>
                           <div class="flex justify-between"><span>JPY</span><span class="text-red-600 font-bold">+23%</span></div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                           <div class="bg-gradient-to-r from-green-400 to-blue-500 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                     </div>
                     <a href="/analysis/category/forex.html" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors">
                        View Forex Analysis <i class="fas fa-arrow-right ml-2"></i>
                     </a>
                  </div>

                  <!-- Crypto Market Snapshot -->
                  <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 card-hover relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-32 h-32 market-stats rounded-full opacity-10 transform translate-x-16 -translate-y-16"></div>
                     <div class="flex items-center mb-6 relative z-10">
                        <div class="bg-gradient-to-r from-orange-500 to-yellow-500 p-3 rounded-xl text-white text-xl mr-4">
                           <i class="fab fa-bitcoin"></i>
                        </div>
                        <h3 class="font-bold text-xl">Crypto Market</h3>
                     </div>
                     <div class="mb-6">
                        <div class="space-y-3">
                           <div class="flex justify-between items-center">
                              <span class="flex items-center"><span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>BTC</span>
                              <div class="text-right">
                                 <div class="font-bold">$43,250</div>
                                 <div class="text-green-600 text-sm">+5.2%</div>
                              </div>
                           </div>
                           <div class="flex justify-between items-center">
                              <span class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>ETH</span>
                              <div class="text-right">
                                 <div class="font-bold">$2,685</div>
                                 <div class="text-red-600 text-sm">-1.8%</div>
                              </div>
                           </div>
                           <div class="flex justify-between items-center">
                              <span class="flex items-center"><span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>Total Cap</span>
                              <div class="text-right">
                                 <div class="font-bold">$1.67T</div>
                                 <div class="text-green-600 text-sm">+3.1%</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a href="/analysis/category/crypto.html" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors">
                        Explore Crypto <i class="fas fa-arrow-right ml-2"></i>
                     </a>
                  </div>

                  <!-- Top Gainers/Losers -->
                  <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 card-hover relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-r from-green-400 to-blue-500 rounded-full opacity-10 transform translate-x-16 -translate-y-16"></div>
                     <div class="flex items-center mb-6 relative z-10">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-3 rounded-xl text-white text-xl mr-4">
                           <i class="fas fa-trophy"></i>
                        </div>
                        <h3 class="font-bold text-xl">Market Movers</h3>
                     </div>
                     <div class="space-y-4 mb-6">
                        <div class="flex justify-between items-center p-3 bg-green-50 rounded-lg">
                           <div>
                              <div class="font-semibold">EUR/USD</div>
                              <div class="text-sm text-gray-500">1.0985</div>
                           </div>
                           <div class="text-green-600 font-bold text-right">
                              <div>+0.85%</div>
                              <div class="text-xs">↗ +93 pips</div>
                           </div>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-red-50 rounded-lg">
                           <div>
                              <div class="font-semibold">GBP/JPY</div>
                              <div class="text-sm text-gray-500">189.45</div>
                           </div>
                           <div class="text-red-600 font-bold text-right">
                              <div>-0.62%</div>
                              <div class="text-xs">↘ -118 pips</div>
                           </div>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-green-50 rounded-lg">
                           <div>
                              <div class="font-semibold">BTC/USD</div>
                              <div class="text-sm text-gray-500">$43,250</div>
                           </div>
                           <div class="text-green-600 font-bold text-right">
                              <div>+3.2%</div>
                              <div class="text-xs">↗ $1,340</div>
                           </div>
                        </div>
                     </div>
                     <a href="analysis/list.html" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors">
                        View All Markets <i class="fas fa-arrow-right ml-2"></i>
                     </a>
                  </div>

                  <!-- Economic Calendar -->
                  <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 card-hover relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full opacity-10 transform translate-x-16 -translate-y-16"></div>
                     <div class="flex items-center mb-6 relative z-10">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-600 p-3 rounded-xl text-white text-xl mr-4">
                           <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3 class="font-bold text-xl">Economic Calendar</h3>
                     </div>
                     <div class="space-y-4 mb-6">
                        <div class="flex items-center justify-between p-3 border-l-4 border-red-500 bg-red-50 rounded-r-lg">
                           <div>
                              <div class="font-semibold text-sm">15:30 GMT</div>
                              <div class="text-xs text-gray-600">USD NFP</div>
                           </div>
                           <div class="flex items-center">
                              <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                              <span class="text-red-600 font-bold text-xs">HIGH</span>
                           </div>
                        </div>
                        <div class="flex items-center justify-between p-3 border-l-4 border-yellow-500 bg-yellow-50 rounded-r-lg">
                           <div>
                              <div class="font-semibold text-sm">13:00 GMT</div>
                              <div class="text-xs text-gray-600">EUR CPI</div>
                           </div>
                           <div class="flex items-center">
                              <span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span>
                              <span class="text-yellow-600 font-bold text-xs">MED</span>
                           </div>
                        </div>
                        <div class="flex items-center justify-between p-3 border-l-4 border-green-500 bg-green-50 rounded-r-lg">
                           <div>
                              <div class="font-semibold text-sm">09:00 GMT</div>
                              <div class="text-xs text-gray-600">GBP GDP</div>
                           </div>
                           <div class="flex items-center">
                              <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                              <span class="text-green-600 font-bold text-xs">LOW</span>
                           </div>
                        </div>
                     </div>
                     <a href="tools/index.html" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors">
                        Full Calendar <i class="fas fa-arrow-right ml-2"></i>
                     </a>
                  </div>
               </div>
            </div>
         </section>
      HTML;
   }




   public function StatisticSection()
   {
      return <<<HTML
         <!-- Statistics Section -->
         <section class="py-16 stats-gradient">
            <div class="container mx-auto px-4">
                  <div class="text-center mb-12">
                     <h2 class="text-4xl font-bold text-white mb-4">Trusted by Traders Worldwide</h2>
                     <p class="text-xl text-blue-100 max-w-3xl mx-auto">Join thousands of successful traders who rely on our analysis and insights</p>
                  </div>

                  <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center text-white">
                     <div class="fade-in">
                        <div class="text-5xl font-bold mb-2">50K+</div>
                        <div class="text-xl text-blue-200">Active Traders</div>
                        <div class="text-sm text-blue-300 mt-1">Growing daily</div>
                     </div>
                     <div class="fade-in" style="animation-delay: 0.2s;">
                        <div class="text-5xl font-bold mb-2">98%</div>
                        <div class="text-xl text-blue-200">Accuracy Rate</div>
                        <div class="text-sm text-blue-300 mt-1">Signal performance</div>
                     </div>
                     <div class="fade-in" style="animation-delay: 0.4s;">
                        <div class="text-5xl font-bold mb-2">24/7</div>
                        <div class="text-xl text-blue-200">Market Coverage</div>
                        <div class="text-sm text-blue-300 mt-1">Never miss an opportunity</div>
                     </div>
                     <div class="fade-in" style="animation-delay: 0.6s;">
                        <div class="text-5xl font-bold mb-2">500+</div>
                        <div class="text-xl text-blue-200">Daily Analysis</div>
                        <div class="text-sm text-blue-300 mt-1">Fresh insights</div>
                     </div>
                  </div>

                  <!-- Testimonial -->
                  <div class="mt-16 max-w-4xl mx-auto">
                     <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 text-center">
                        <div class="text-2xl text-white mb-4 leading-relaxed">
                              "TradePulse transformed my trading. Their analysis is spot-on and the educational content helped me become a consistently profitable trader."
                        </div>
                        <div class="flex items-center justify-center">
                              <img src="https://randomuser.me/api/portraits/men/46.jpg" alt="Testimonial" class="w-12 h-12 rounded-full mr-4">
                              <div class="text-left">
                                 <div class="text-white font-semibold">Alex Chen</div>
                                 <div class="text-blue-200 text-sm">Professional Trader, Singapore</div>
                              </div>
                        </div>
                     </div>
                  </div>
            </div>
         </section>
      HTML;
   }



   public function LatestArticles()
   {
      return <<<HTML
         <!-- Latest Articles -->
         <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
               <div class="flex justify-between items-center mb-12">
                  <div>
                     <h2 class="text-4xl font-bold mb-2">Latest Market Analysis</h2>
                     <p class="text-xl text-gray-600">Expert insights and trading strategies updated daily</p>
                  </div>
                  <a href="analysis/list.html" class="hidden md:inline-flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">
                     View All Articles <i class="fas fa-arrow-right ml-2"></i>
                  </a>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  <!-- Article 1 -->
                  <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 card-hover">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1604594849809-dfedbc827105?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Gold Chart Analysis" class="w-full h-56 object-cover">
                        <div class="absolute top-4 left-4">
                           <span class="bg-indigo-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Technical Analysis</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-white bg-opacity-90 rounded-full px-3 py-1">
                           <span class="text-gray-600 text-xs font-medium">6 hours ago</span>
                        </div>
                     </div>
                     <div class="p-6">
                        <h3 class="font-bold text-xl mb-3 leading-tight hover:text-indigo-600 transition-colors">Gold (XAU/USD) Testing Support Turned Resistance Zone</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">After breaking below its long-term triangle support, gold seems to be going for a retest of the area of interest.</p>
                        <div class="flex items-center justify-between">
                           <div class="flex items-center">
                              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="w-10 h-10 rounded-full mr-3">
                              <div>
                                 <div class="text-sm font-semibold">Niko Peterson</div>
                                 <div class="text-xs text-gray-500">Senior Analyst</div>
                              </div>
                           </div>
                           <div class="flex items-center text-gray-400">
                              <i class="fas fa-eye mr-1"></i>
                              <span class="text-xs">2.1k views</span>
                           </div>
                        </div>
                     </div>
                  </article>

                  <!-- Article 2 -->
                  <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 card-hover">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="GBP/NZD Chart" class="w-full h-56 object-cover">
                        <div class="absolute top-4 left-4">
                           <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Forex Analysis</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-white bg-opacity-90 rounded-full px-3 py-1">
                           <span class="text-gray-600 text-xs font-medium">6 hours ago</span>
                        </div>
                     </div>
                     <div class="p-6">
                        <h3 class="font-bold text-xl mb-3 leading-tight hover:text-indigo-600 transition-colors">GBP/NZD Resistance and NZD/CAD Support If NZ Jobs Data Beats Estimates</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Key levels to watch as New Zealand employment data could spark volatility in NZD pairs.</p>
                        <div class="flex items-center justify-between">
                           <div class="flex items-center">
                              <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Author" class="w-10 h-10 rounded-full mr-3">
                              <div>
                                 <div class="text-sm font-semibold">Sarah Williams</div>
                                 <div class="text-xs text-gray-500">Forex Strategist</div>
                              </div>
                           </div>
                           <div class="flex items-center text-gray-400">
                              <i class="fas fa-eye mr-1"></i>
                              <span class="text-xs">1.8k views</span>
                           </div>
                        </div>
                     </div>
                  </article>

                  <!-- Article 3 -->
                  <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 card-hover">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Trading Psychology" class="w-full h-56 object-cover">
                        <div class="absolute top-4 left-4">
                           <span class="bg-purple-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Psychology</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-white bg-opacity-90 rounded-full px-3 py-1">
                           <span class="text-gray-600 text-xs font-medium">3 days ago</span>
                        </div>
                     </div>
                     <div class="p-6">
                        <h3 class="font-bold text-xl mb-3 leading-tight hover:text-indigo-600 transition-colors">3 Tips to Help You Trade Larger Positions</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">How to scale up your trading size without letting emotions affect your decisions.</p>
                        <div class="flex items-center justify-between">
                           <div class="flex items-center">
                              <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Author" class="w-10 h-10 rounded-full mr-3">
                              <div>
                                 <div class="text-sm font-semibold">Mark Johnson</div>
                                 <div class="text-xs text-gray-500">Trading Coach</div>
                              </div>
                           </div>
                           <div class="flex items-center text-gray-400">
                              <i class="fas fa-eye mr-1"></i>
                              <span class="text-xs">3.2k views</span>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <!-- Mobile View All Button -->
               <div class="mt-8 text-center md:hidden">
                  <a href="analysis/list.html" class="inline-flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">
                     View All Articles <i class="fas fa-arrow-right ml-2"></i>
                  </a>
               </div>
            </div>
         </section>
      HTML;
   }





   public function FeaturedTools()
   {
      return <<<HTML
         <!-- Featured Tools -->
         <section class="py-16 bg-gradient-to-r from-indigo-900 via-purple-900 to-pink-900 text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-20"></div>
            <div class="container mx-auto px-4 relative z-10">
               <div class="text-center mb-12">
                  <h2 class="text-4xl font-bold mb-4">Professional Trading Tools</h2>
                  <p class="text-xl text-indigo-200 max-w-3xl mx-auto">Advanced calculators and market analysis tools used by professional traders</p>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                  <div class="bg-white bg-opacity-10 backdrop-blur-sm p-8 rounded-2xl hover:bg-opacity-20 transition-all duration-300 card-hover">
                     <div class="text-4xl mb-6 text-blue-300">
                        <i class="fas fa-calculator"></i>
                     </div>
                     <h3 class="font-bold text-xl mb-3">Pip Value Calculator</h3>
                     <p class="text-indigo-200 mb-6 leading-relaxed">Quickly calculate the value per pip for any currency pair and lot size.</p>
                     <div class="bg-blue-500 bg-opacity-20 rounded-lg p-3 mb-4">
                        <div class="flex justify-between text-sm">
                           <span>EUR/USD</span>
                           <span>$10.00/pip</span>
                        </div>
                     </div>
                     <a href="tools/index.html" class="inline-flex items-center text-white font-semibold hover:text-blue-300 transition-colors">
                        Try Calculator <i class="fas fa-arrow-right ml-2"></i>
                     </a>
                  </div>

                  <div class="bg-white bg-opacity-10 backdrop-blur-sm p-8 rounded-2xl hover:bg-opacity-20 transition-all duration-300 card-hover">
                     <div class="text-4xl mb-6 text-green-300">
                        <i class="fas fa-chart-pie"></i>
                     </div>
                     <h3 class="font-bold text-xl mb-3">Position Size Calculator</h3>
                     <p class="text-indigo-200 mb-6 leading-relaxed">Determine optimal position size based on your risk management rules.</p>
                     <div class="bg-green-500 bg-opacity-20 rounded-lg p-3 mb-4">
                        <div class="flex justify-between text-sm">
                           <span>Risk: 2%</span>
                           <span>0.5 lots</span>
                        </div>
                     </div>
                     <a href="tools/index.html" class="inline-flex items-center text-white font-semibold hover:text-green-300 transition-colors">
                        Calculate Size <i class="fas fa-arrow-right ml-2"></i>
                     </a>
                  </div>

                  <div class="bg-white bg-opacity-10 backdrop-blur-sm p-8 rounded-2xl hover:bg-opacity-20 transition-all duration-300 card-hover">
                     <div class="text-4xl mb-6 text-yellow-300">
                        <i class="fas fa-clock"></i>
                     </div>
                     <h3 class="font-bold text-xl mb-3">Market Sessions</h3>
                     <p class="text-indigo-200 mb-6 leading-relaxed">Track global trading sessions and optimal trading times.</p>
                     <div class="space-y-2 mb-4">
                        <div class="flex justify-between text-sm bg-green-500 bg-opacity-20 rounded px-2 py-1">
                           <span>London</span>
                           <span class="text-green-300">OPEN</span>
                        </div>
                        <div class="flex justify-between text-sm bg-yellow-500 bg-opacity-20 rounded px-2 py-1">
                           <span>New York</span>
                           <span class="text-yellow-300">OPENING</span>
                        </div>
                     </div>
                     <a href="tools/index.html" class="inline-flex items-center text-white font-semibold hover:text-yellow-300 transition-colors">
                        View Sessions <i class="fas fa-arrow-right ml-2"></i>
                     </a>
                  </div>

                  <div class="bg-white bg-opacity-10 backdrop-blur-sm p-8 rounded-2xl hover:bg-opacity-20 transition-all duration-300 card-hover">
                     <div class="text-4xl mb-6 text-purple-300">
                        <i class="fas fa-project-diagram"></i>
                     </div>
                     <h3 class="font-bold text-xl mb-3">Currency Correlation</h3>
                     <p class="text-indigo-200 mb-6 leading-relaxed">Analyze how currency pairs move in relation to each other.</p>
                     <div class="bg-purple-500 bg-opacity-20 rounded-lg p-3 mb-4">
                        <div class="flex justify-between text-sm">
                           <span>EUR/USD vs GBP/USD</span>
                           <span class="text-green-300">+0.85</span>
                        </div>
                     </div>
                     <a href="tools/index.html" class="inline-flex items-center text-white font-semibold hover:text-purple-300 transition-colors">
                        View Correlations <i class="fas fa-arrow-right ml-2"></i>
                     </a>
                  </div>
               </div>

               <!-- Additional CTA -->
               <div class="text-center mt-12">
                  <a href="tools/index.html" class="inline-flex items-center bg-white text-indigo-900 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-all hover:scale-105 shadow-lg">
                     <i class="fas fa-tools mr-3"></i>
                     Explore All Tools
                     <i class="fas fa-arrow-right ml-3"></i>
                  </a>
               </div>
            </div>

            <!-- Background decoration -->
            <div class="absolute top-10 left-10 text-white opacity-5 text-8xl">
               <i class="fas fa-chart-line"></i>
            </div>
            <div class="absolute bottom-10 right-10 text-white opacity-5 text-6xl">
               <i class="fas fa-calculator"></i>
            </div>
         </section>
      HTML;
   }





   public function Newsletter()
   {
      return <<<HTML
         <!-- Newsletter -->
         <section class="py-16 bg-gradient-to-b from-white to-gray-50">
            <div class="container mx-auto px-4 max-w-5xl">
               <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl p-8 md:p-12 shadow-2xl text-white relative overflow-hidden">
                  <div class="absolute top-0 right-0 w-64 h-64 bg-white bg-opacity-10 rounded-full transform translate-x-32 -translate-y-32"></div>
                  <div class="absolute bottom-0 left-0 w-48 h-48 bg-white bg-opacity-10 rounded-full transform -translate-x-24 translate-y-24"></div>

                  <div class="relative z-10 text-center">
                     <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full mb-6">
                        <i class="fas fa-envelope text-2xl"></i>
                     </div>
                     <h2 class="text-3xl md:text-4xl font-bold mb-4">Stay Ahead of the Markets</h2>
                     <p class="text-xl mb-8 max-w-3xl mx-auto text-indigo-100">Join 50,000+ traders getting daily market insights, analysis, and exclusive trading signals delivered straight to their inbox.</p>

                     <!-- Newsletter Stats -->
                     <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white bg-opacity-10 rounded-xl p-4">
                           <div class="text-2xl font-bold">Daily</div>
                           <div class="text-sm text-indigo-200">Market Analysis</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-xl p-4">
                           <div class="text-2xl font-bold">98%</div>
                           <div class="text-sm text-indigo-200">Open Rate</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-xl p-4">
                           <div class="text-2xl font-bold">Free</div>
                           <div class="text-sm text-indigo-200">Always</div>
                        </div>
                     </div>

                     <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                        <div class="flex-grow relative">
                           <input type="email" placeholder="Enter your email address" class="w-full px-6 py-4 rounded-xl border-0 focus:outline-none focus:ring-4 focus:ring-white focus:ring-opacity-30 text-gray-900 font-medium shadow-lg">
                           <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                              <i class="fas fa-envelope text-gray-400"></i>
                           </div>
                        </div>
                        <button type="submit" class="bg-white text-indigo-600 px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition-all hover:scale-105 shadow-lg whitespace-nowrap">
                           <i class="fas fa-paper-plane mr-2"></i>
                           Subscribe Free
                        </button>
                     </form>

                     <p class="text-sm text-indigo-200 mt-4">✓ No spam, unsubscribe anytime ✓ Trusted by professionals</p>
                  </div>
               </div>

               <!-- Social proof -->
               <div class="mt-8 text-center">
                  <p class="text-gray-600 mb-4">Trusted by traders at</p>
                  <div class="flex justify-center items-center space-x-8 grayscale opacity-60">
                     <div class="text-2xl font-bold text-gray-400">Goldman Sachs</div>
                     <div class="text-2xl font-bold text-gray-400">JPMorgan</div>
                     <div class="text-2xl font-bold text-gray-400">Deutsche Bank</div>
                  </div>
               </div>
            </div>
         </section>
      HTML;
   }
}
