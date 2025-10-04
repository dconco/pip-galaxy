<?php

require_once 'components/analysis/Newsletter.php';

class ForexCategoryComponents {
   public function __render ()
   {
      return <<<HTML
         <ForexCategoryComponents::ForexMarketStatus />
         <ForexCategoryComponents::MarketOverview />
         <ForexCategoryComponents::LatestAnalysis />
         <ForexCategoryComponents::TradingInsights />
         <ForexCategoryComponents::Newsletter />
      HTML;
   }




   public function ForexMarketStatus ()
   {
      return <<<HTML
         <!-- Forex Market Status -->
         <section class="py-6 bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
               <div class="flex flex-wrap items-center justify-between text-sm">
                  <div class="flex items-center space-x-6">
                     <h3 class="font-bold text-gray-800">Trading Sessions:</h3>
                     <div class="flex items-center">
                        <span class="session-indicator session-closed"></span>
                        <span class="text-gray-600">Sydney: Closed</span>
                     </div>
                     <div class="flex items-center">
                        <span class="session-indicator session-closed"></span>
                        <span class="text-gray-600">Tokyo: Closed</span>
                     </div>
                     <div class="flex items-center">
                        <span class="session-indicator session-active"></span>
                        <span class="text-green-600 font-medium">London: Active</span>
                     </div>
                     <div class="flex items-center">
                        <span class="session-indicator session-active"></span>
                        <span class="text-green-600 font-medium">New York: Active</span>
                     </div>
                  </div>
                  <div class="text-gray-500 mt-2 md:mt-0">
                     Last updated: <span class="font-medium">14:32 GMT</span>
                  </div>
               </div>
            </div>
         </section>
      HTML;
   }





   public function MarketOverview ()
   {
      return <<<HTML
         <section id="market-overview" class="py-12 bg-white">
            <div class="container mx-auto px-4">
               <h2 class="text-3xl font-bold mb-8">Forex Market Overview</h2>

               <!-- Currency Strength Meter -->
               <div class="bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-8 mb-8 border border-indigo-100">
                  <h3 class="text-2xl font-bold mb-6 text-indigo-900">Currency Strength Meter</h3>
                  <p class="text-gray-600 mb-6">Real-time relative strength of major currencies over the last 24 hours</p>

                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                     <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                           <div class="flex items-center">
                              <div class="w-6 h-4 bg-blue-600 rounded-sm mr-2" title="USD Flag"></div>
                              <span class="font-bold">USD</span>
                           </div>
                           <span class="text-green-600 font-bold">+0.8%</span>
                        </div>
                        <div class="strength-meter bg-gray-200">
                           <div class="h-full bg-gradient-to-r from-green-400 to-green-600" style="width: 85%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Strongest</p>
                     </div>

                     <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                           <div class="flex items-center">
                              <div class="w-6 h-4 bg-blue-800 rounded-sm mr-2" title="EUR Flag"></div>
                              <span class="font-bold">EUR</span>
                           </div>
                           <span class="text-green-600 font-bold">+0.3%</span>
                        </div>
                        <div class="strength-meter bg-gray-200">
                           <div class="h-full bg-gradient-to-r from-blue-400 to-blue-600" style="width: 68%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Strong</p>
                     </div>

                     <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                           <div class="flex items-center">
                              <div class="w-6 h-4 bg-red-600 rounded-sm mr-2" title="GBP Flag"></div>
                              <span class="font-bold">GBP</span>
                           </div>
                           <span class="text-red-600 font-bold">-0.2%</span>
                        </div>
                        <div class="strength-meter bg-gray-200">
                           <div class="h-full bg-gradient-to-r from-yellow-400 to-yellow-600" style="width: 45%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Neutral</p>
                     </div>

                     <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                           <div class="flex items-center">
                              <div class="w-6 h-4 bg-red-800 rounded-sm mr-2" title="JPY Flag"></div>
                              <span class="font-bold">JPY</span>
                           </div>
                           <span class="text-red-600 font-bold">-0.7%</span>
                        </div>
                        <div class="strength-meter bg-gray-200">
                           <div class="h-full bg-gradient-to-r from-red-400 to-red-600" style="width: 25%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Weakest</p>
                     </div>
                  </div>

                  <div class="mt-6 text-center">
                     <a href="/tools" class="hero-gradient hero-gradient-hover text-white px-6 py-3 rounded-md font-medium">View Full Strength Meter →</a>
                  </div>
               </div>

               <!-- Major Currency Pairs -->
               <div class="bg-gray-50 rounded-xl p-8">
                  <h3 class="text-2xl font-bold mb-6">Major Currency Pairs</h3>

                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                     <!-- EUR/USD -->
                     <div class="bg-white rounded-lg p-6 forex-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="flex -space-x-1 mr-3">
                                 <div class="w-8 h-6 bg-blue-800 rounded-sm"></div>
                                 <div class="w-8 h-6 bg-blue-600 rounded-sm"></div>
                              </div>
                              <div>
                                 <h4 class="font-bold text-lg">EUR/USD</h4>
                                 <p class="text-gray-500 text-sm">Euro / US Dollar</p>
                              </div>
                           </div>
                           <div class="text-right">
                              <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded font-medium">Major</span>
                           </div>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">1.0945</p>
                           <p class="price-up text-sm font-medium">+0.0012 (+0.11%)</p>
                        </div>

                        <div class="grid grid-cols-3 gap-3 text-sm border-t pt-3">
                           <div>
                              <p class="text-gray-500">Spread</p>
                              <p class="font-medium">0.8 pips</p>
                           </div>
                           <div>
                              <p class="text-gray-500">High</p>
                              <p class="font-medium">1.0967</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Low</p>
                              <p class="font-medium">1.0923</p>
                           </div>
                        </div>
                     </div>

                     <!-- GBP/USD -->
                     <div class="bg-white rounded-lg p-6 forex-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="flex -space-x-1 mr-3">
                                 <div class="w-8 h-6 bg-red-600 rounded-sm"></div>
                                 <div class="w-8 h-6 bg-blue-600 rounded-sm"></div>
                              </div>
                              <div>
                                 <h4 class="font-bold text-lg">GBP/USD</h4>
                                 <p class="text-gray-500 text-sm">British Pound / US Dollar</p>
                              </div>
                           </div>
                           <div class="text-right">
                              <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded font-medium">Major</span>
                           </div>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">1.2678</p>
                           <p class="price-down text-sm font-medium">-0.0034 (-0.27%)</p>
                        </div>

                        <div class="grid grid-cols-3 gap-3 text-sm border-t pt-3">
                           <div>
                              <p class="text-gray-500">Spread</p>
                              <p class="font-medium">1.2 pips</p>
                           </div>
                           <div>
                              <p class="text-gray-500">High</p>
                              <p class="font-medium">1.2712</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Low</p>
                              <p class="font-medium">1.2654</p>
                           </div>
                        </div>
                     </div>

                     <!-- USD/JPY -->
                     <div class="bg-white rounded-lg p-6 forex-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="flex -space-x-1 mr-3">
                                 <div class="w-8 h-6 bg-blue-600 rounded-sm"></div>
                                 <div class="w-8 h-6 bg-red-800 rounded-sm"></div>
                              </div>
                              <div>
                                 <h4 class="font-bold text-lg">USD/JPY</h4>
                                 <p class="text-gray-500 text-sm">US Dollar / Japanese Yen</p>
                              </div>
                           </div>
                           <div class="text-right">
                              <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded font-medium">Major</span>
                           </div>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">149.85</p>
                           <p class="price-up text-sm font-medium">+0.67 (+0.45%)</p>
                        </div>

                        <div class="grid grid-cols-3 gap-3 text-sm border-t pt-3">
                           <div>
                              <p class="text-gray-500">Spread</p>
                              <p class="font-medium">0.9 pips</p>
                           </div>
                           <div>
                              <p class="text-gray-500">High</p>
                              <p class="font-medium">150.12</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Low</p>
                              <p class="font-medium">149.23</p>
                           </div>
                        </div>
                     </div>

                     <!-- AUD/USD -->
                     <div class="bg-white rounded-lg p-6 forex-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="flex -space-x-1 mr-3">
                                 <div class="w-8 h-6 bg-blue-900 rounded-sm"></div>
                                 <div class="w-8 h-6 bg-blue-600 rounded-sm"></div>
                              </div>
                              <div>
                                 <h4 class="font-bold text-lg">AUD/USD</h4>
                                 <p class="text-gray-500 text-sm">Australian Dollar / US Dollar</p>
                              </div>
                           </div>
                           <div class="text-right">
                              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded font-medium">Commodity</span>
                           </div>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">0.6634</p>
                           <p class="price-up text-sm font-medium">+0.0018 (+0.27%)</p>
                        </div>

                        <div class="grid grid-cols-3 gap-3 text-sm border-t pt-3">
                           <div>
                              <p class="text-gray-500">Spread</p>
                              <p class="font-medium">1.1 pips</p>
                           </div>
                           <div>
                              <p class="text-gray-500">High</p>
                              <p class="font-medium">0.6648</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Low</p>
                              <p class="font-medium">0.6615</p>
                           </div>
                        </div>
                     </div>

                     <!-- USD/CAD -->
                     <div class="bg-white rounded-lg p-6 forex-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="flex -space-x-1 mr-3">
                                 <div class="w-8 h-6 bg-blue-600 rounded-sm"></div>
                                 <div class="w-8 h-6 bg-red-600 rounded-sm"></div>
                              </div>
                              <div>
                                 <h4 class="font-bold text-lg">USD/CAD</h4>
                                 <p class="text-gray-500 text-sm">US Dollar / Canadian Dollar</p>
                              </div>
                           </div>
                           <div class="text-right">
                              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded font-medium">Commodity</span>
                           </div>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">1.3567</p>
                           <p class="price-down text-sm font-medium">-0.0023 (-0.17%)</p>
                        </div>

                        <div class="grid grid-cols-3 gap-3 text-sm border-t pt-3">
                           <div>
                              <p class="text-gray-500">Spread</p>
                              <p class="font-medium">1.3 pips</p>
                           </div>
                           <div>
                              <p class="text-gray-500">High</p>
                              <p class="font-medium">1.3589</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Low</p>
                              <p class="font-medium">1.3542</p>
                           </div>
                        </div>
                     </div>

                     <!-- EUR/GBP -->
                     <div class="bg-white rounded-lg p-6 forex-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="flex -space-x-1 mr-3">
                                 <div class="w-8 h-6 bg-blue-800 rounded-sm"></div>
                                 <div class="w-8 h-6 bg-red-600 rounded-sm"></div>
                              </div>
                              <div>
                                 <h4 class="font-bold text-lg">EUR/GBP</h4>
                                 <p class="text-gray-500 text-sm">Euro / British Pound</p>
                              </div>
                           </div>
                           <div class="text-right">
                              <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded font-medium">Cross</span>
                           </div>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">0.8633</p>
                           <p class="price-up text-sm font-medium">+0.0032 (+0.37%)</p>
                        </div>

                        <div class="grid grid-cols-3 gap-3 text-sm border-t pt-3">
                           <div>
                              <p class="text-gray-500">Spread</p>
                              <p class="font-medium">1.4 pips</p>
                           </div>
                           <div>
                              <p class="text-gray-500">High</p>
                              <p class="font-medium">0.8647</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Low</p>
                              <p class="font-medium">0.8601</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      HTML;
   }



   public function MarketStats ()
   {
      return <<<HTML
         <!-- Market Stats -->
         <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-6 rounded-lg">
               <div class="flex items-center justify-between">
                  <div>
                     <p class="text-blue-100 text-sm">Total Market Cap</p>
                     <p class="text-2xl font-bold">$2.45T</p>
                     <p class="text-green-300 text-sm">+2.4% (24h)</p>
                  </div>
                  <i class="fas fa-chart-line text-3xl text-blue-200"></i>
               </div>
            </div>

            <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-6 rounded-lg">
               <div class="flex items-center justify-between">
                  <div>
                     <p class="text-purple-100 text-sm">24h Trading Volume</p>
                     <p class="text-2xl font-bold">$89.2B</p>
                     <p class="text-green-300 text-sm">+5.7% (24h)</p>
                  </div>
                  <i class="fas fa-exchange-alt text-3xl text-purple-200"></i>
               </div>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-6 rounded-lg">
               <div class="flex items-center justify-between">
                  <div>
                     <p class="text-green-100 text-sm">Bitcoin Dominance</p>
                     <p class="text-2xl font-bold">52.3%</p>
                     <p class="text-red-300 text-sm">-0.8% (24h)</p>
                  </div>
                  <i class="fab fa-bitcoin text-3xl text-green-200"></i>
               </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white p-6 rounded-lg">
               <div class="flex items-center justify-between">
                  <div>
                     <p class="text-yellow-100 text-sm">Fear & Greed Index</p>
                     <p class="text-2xl font-bold">64</p>
                     <p class="text-yellow-200 text-sm">Greed</p>
                  </div>
                  <i class="fas fa-thermometer-half text-3xl text-yellow-200"></i>
               </div>
            </div>
         </div>
      HTML;
   }



   public function LatestAnalysis ()
   {
      return <<<HTML
         <!-- Latest Analysis -->
         <section id="analysis" class="py-12 bg-gray-50">
            <div class="container mx-auto px-4">
               <div class="flex justify-between items-center mb-8">
                  <h2 class="text-3xl font-bold">Latest Forex Analysis</h2>
                  <a href="/analysis" class="text-indigo-600 font-medium hover:underline">View All Analysis →</a>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  <!-- Analysis Article 1 -->
                  <CryptoCategoryComponents::ArticleCard 
                     image="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     category="EUR/USD" 
                     tag="Technical Analysis" 
                     time="1 hour ago" 
                     title="EUR/USD Tests Key Support at 1.0920 Amid ECB Uncertainty" 
                     excerpt="The euro faces pressure as markets await ECB policy signals. Critical support level holds for now..." 
                     authorImg="https://randomuser.me/api/portraits/men/12.jpg" 
                     authorName="James Wilson" 
                  />

                  <!-- Analysis Article 2 -->
                  <CryptoCategoryComponents::ArticleCard 
                     image="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     category="GBP/USD" 
                     tag="Fundamentals" 
                     time="3 hours ago" 
                     title="Sterling Weakness Continues: BoE Policy Impact Analysis" 
                     excerpt="Bank of England's dovish tilt weighs on the pound. Key levels to watch ahead of inflation data..." 
                     authorImg="https://randomuser.me/api/portraits/women/34.jpg" 
                     authorName="Emma Thompson" 
                  />

                  <!-- Analysis Article 3 -->
                  <CryptoCategoryComponents::ArticleCard 
                     image="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     category="USD/JPY" 
                     tag="Intervention Risk" 
                     time="5 hours ago" 
                     title="USD/JPY at 150: Will Japan Intervene Again?" 
                     excerpt="The yen approaches intervention levels as USD strength persists. Historical precedents suggest action..." 
                     authorImg="https://randomuser.me/api/portraits/men/67.jpg" 
                     authorName="David Kim" 
                  />
               </div>
            </div>
         </section>
      HTML;
   }




   public function ArticleCard ($image, $category, $tag, $time, $title, $excerpt, $authorImg, $authorName)
   {
      return <<<HTML
         <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <img src="{$image}" alt="{$title}" class="w-full h-48 object-cover">
            <div class="p-6">
               <div class="flex items-center mb-2">
                  <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">{$category}</span>
                  <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">{$tag}</span>
                  <span class="text-gray-500 text-sm ml-auto">{$time}</span>
               </div>
               <h3 class="font-bold text-xl mb-2">{$title}</h3>
               <p class="text-gray-600 mb-4">{$excerpt}</p>
               <div class="flex items-center">
                  <img src="{$authorImg}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                  <span class="text-sm font-medium">By {$authorName}</span>
               </div>
            </div>
         </article>
      HTML;
   }



   public function TradingInsights ()
   {
      return <<<HTML
         <!-- Trading Insights -->
         <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
               <h2 class="text-3xl font-bold mb-8 text-center">Forex Trading Insights</h2>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                  <CryptoCategoryComponents::CryptoCard 
                     title="Price Action Trading" 
                     children="Master the art of reading pure price movements without indicators." 
                     icon="fas fa-chart-line" 
                     link="/learn/forex" 
                     color="text-blue-600" 
                     gradient="from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-100"
                     linkLabel="Learn Price Action →" />


                  <CryptoCategoryComponents::CryptoCard 
                     title="Fundamental Analysis" 
                     children="Understand how economic events drive currency movements." 
                     icon="fas fa-globe" 
                     link="/learn/forex" 
                     color="text-green-600" 
                     gradient="from-purple-50 to-pink-50 p-6 rounded-lg border border-purple-100"
                     linkLabel="Economic Calendar →" />


                  <CryptoCategoryComponents::CryptoCard 
                     title="Risk Management" 
                     children="Protect your capital with proper position sizing and stop losses." 
                     icon="fas fa-shield-alt" 
                     link="/tools/#pip-calculator" 
                     color="text-purple-600" 
                     gradient="from-green-50 to-emerald-50 p-6 rounded-lg border border-green-100"
                     linkLabel="Risk Calculator →" />


                  <CryptoCategoryComponents::CryptoCard 
                     title="Session Trading" 
                     children="Optimize your trading around major forex market sessions." 
                     icon="fas fa-clock" 
                     link="/tools/#forex-hours" 
                     color="text-orange-600" 
                     gradient="from-yellow-50 to-orange-50 p-6 rounded-lg border border-yellow-100"
                     linkLabel="Market Hours →" />
               </div>
            </div>
         </section>
      HTML;
   }




   public function CryptoCard ($title, $icon, $children, $link, $color, $linkLabel, $gradient)
   {
      return <<<HTML
         <div class="bg-gradient-to-br {$gradient}">
            <div class="text-3xl mb-4 {$color}">
               <i class="{$icon}"></i>
            </div>
            <h3 class="font-bold text-xl mb-2">{$title}</h3>
            <p class="text-gray-600 mb-4">{$children}</p>
            <Component.Link to="{$link}" children="{$linkLabel}" class="text-indigo-600 font-medium hover:underline" />
         </div>
      HTML;
   }





   public function Newsletter ()
   {
      return <<<HTML
         <Newsletter 
            icon="fas fa-envelope"
            title="Daily Forex Market Brief"
            children="Get daily forex market analysis, key levels, and trading opportunities delivered to your inbox every morning."
         />
      HTML;
   }

}