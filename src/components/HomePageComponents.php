<?php

require_once 'NewsletterComponent.php';

class HomePageComponents
{
   public function __render()
   {
      return <<<HTML
         <HomePageComponents::MarketOverview />
         <HomePageComponents::StatisticSection />
         <HomePageComponents::LatestArticles />
         <HomePageComponents::FeaturedTools />
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
                     <Component.Link to="/analysis/category/forex" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors">
                        View Forex Analysis <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
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
                     <Component.Link to="/analysis/category/crypto" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors">
                        Explore Crypto <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
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
                     <Component.Link to="/analysis" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors">
                        View All Markets <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
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
                     <Component.Link to="/tools" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors">
                        Full Calendar <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
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
                                 <div class="text-blue-50 text-sm">Professional Trader, Singapore</div>
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
                  <a href="/analysis" class="hidden md:inline-flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">
                     View All Articles <i class="fas fa-arrow-right ml-2"></i>
                  </a>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  <!-- Article 1 -->
                  <HomePageComponents::ArticleCard
                     image="https://images.unsplash.com/photo-1559526324-593bc073d938?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                     title="Gold (XAU/USD) Testing Support Turned Resistance Zone"
                     summary="After breaking below its long-term triangle support, gold seems to be going for a retest of the area of interest."
                     authorImage="https://randomuser.me/api/portraits/men/32.jpg"
                     authorName="Niko Peterson"
                     authorRole="Senior Analyst"
                     views="2.1k"
                     category="Technical Analysis"
                     categoryColor="indigo-600"
                     timeAgo="6 hours ago"
                     link="/analysis/view/1"
                  />

                  <!-- Article 2 -->
                  <HomePageComponents::ArticleCard
                     image="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                     title="Bitcoin Eyes \$50,000 as Market Sentiment Improves"
                     summary="After a strong rebound from the \$42,000 level, Bitcoin is showing signs of further upside potential."
                     authorImage="https://randomuser.me/api/portraits/women/28.jpg"
                     authorName="Emily Clark"
                     authorRole="Crypto Analyst"
                     views="1.5k"
                     category="Cryptocurrency"
                     categoryColor="purple-600"
                     timeAgo="2 hours ago"
                     link="/analysis/view/2"
                  />

                  <!-- Article 3 -->
                  <HomePageComponents::ArticleCard
                     image="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                     title="EUR/USD Set to Break Key Resistance Ahead of ECB Meeting"
                     summary="The Euro has been consolidating near key resistance levels as traders await the ECB's interest rate decision."
                     authorImage="https://randomuser.me/api/portraits/men/45.jpg"
                     authorName="Michael Smith"
                     authorRole="Forex Analyst"
                     views="2.8k"
                     category="Forex"
                     categoryColor="blue-600"
                     timeAgo="1 day ago"
                     link="/analysis/view/3"
                  />
               </div>

               <!-- Mobile View All Button -->
               <div class="mt-8 text-center md:hidden">
                  <a href="/analysis" class="inline-flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">
                     View All Articles <i class="fas fa-arrow-right ml-2"></i>
                  </a>
               </div>
            </div>
         </section>
      HTML;
   }





   public function ArticleCard($image, $title, $summary, $authorName, $authorRole, $authorImage, $views, $timeAgo, $category, $categoryColor, $link) {
      return <<<HTML
         <Component.Link to="{$link}" class="cursor-pointer">
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 card-hover">
               <div class="relative">
                  <img src="{$image}" alt="Gold Chart Analysis" class="w-full h-56 object-cover">
                  <div class="absolute top-4 left-4">
                     <span class="bg-{$categoryColor} text-white text-xs font-semibold px-3 py-1 rounded-full">{$category}</span>
                  </div>
                  <div class="absolute top-4 right-4 bg-white bg-opacity-90 rounded-full px-3 py-1">
                     <span class="text-gray-600 text-xs font-medium">{$timeAgo}</span>
                  </div>
               </div>
               <div class="p-6">
                  <h3 class="font-bold text-xl mb-3 leading-tight hover:text-indigo-600 transition-colors">{$title}</h3>
                  <p class="text-gray-600 mb-4 leading-relaxed">{$summary}</p>
                  <div class="flex items-center justify-between">
                     <div class="flex items-center">
                        <img src="{$authorImage}" alt="Author" class="w-10 h-10 rounded-full mr-3">
                        <div>
                           <div class="text-sm font-semibold">{$authorName}</div>
                           <div class="text-xs text-gray-500">{$authorRole}</div>
                        </div>
                     </div>
                     <div class="flex items-center text-gray-400">
                        <i class="fas fa-eye mr-1"></i>
                        <span class="text-xs">{$views} views</span>
                     </div>
                  </div>
               </div>
            </article>
         </Component.Link>
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
                     <Component.Link to="/tools/#pip-calculator" class="inline-flex items-center text-white font-semibold hover:text-blue-300 transition-colors">
                        Try Calculator <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
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
                     <Component.Link to="/tools/#position-size" class="inline-flex items-center text-white font-semibold hover:text-green-300 transition-colors">
                        Calculate Size <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
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
                     <Component.Link to="/tools/#forex-hours" class="inline-flex items-center text-white font-semibold hover:text-yellow-300 transition-colors">
                        View Sessions <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
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
                     <Component.Link to="/tools/#correlation" class="inline-flex items-center text-white font-semibold hover:text-purple-300 transition-colors">
                        View Correlations <i class="fas fa-arrow-right ml-2"></i>
                     </Component.Link>
                  </div>
               </div>

               <!-- Additional CTA -->
               <div class="text-center mt-12">
                  <a href="/tools" class="inline-flex items-center bg-white text-indigo-900 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-all hover:scale-105 shadow-lg">
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
}
