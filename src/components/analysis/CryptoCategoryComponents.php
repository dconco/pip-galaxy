<?php

require_once 'components/analysis/Newsletter.php';

class CryptoCategoryComponents {
   public function __render ()
   {
      return <<<HTML
         <CryptoCategoryComponents::MarketOverview />
         <CryptoCategoryComponents::LatestAnalysis />
         <CryptoCategoryComponents::TradingInsights />
         <CryptoCategoryComponents::Newsletter />
      HTML;
   }




   public function MarketOverview ()
   {
      return <<<HTML
         <!-- Market Overview Section -->
         <section id="market-overview" class="py-12 bg-white">
            <div class="container mx-auto px-4">
               <div class="flex justify-between items-center mb-8">
                  <h2 class="text-3xl font-bold">Crypto Market Overview</h2>
                  <div class="flex items-center space-x-2 text-sm text-gray-500">
                     <i class="fas fa-sync-alt"></i>
                     <span>Last updated: 2 minutes ago</span>
                  </div>
               </div>

               <CryptoCategoryComponents::MarketStats />

               <!-- Top Cryptocurrencies -->
               <div class="bg-gray-50 rounded-xl p-8">
                  <h3 class="text-2xl font-bold mb-6">Top Cryptocurrencies</h3>

                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                     <!-- Bitcoin -->
                     <div class="bg-white rounded-lg p-6 crypto-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mr-3">
                                 <i class="fab fa-bitcoin text-white text-lg"></i>
                              </div>
                              <div>
                                 <h4 class="font-bold">Bitcoin</h4>
                                 <p class="text-gray-500 text-sm">BTC</p>
                              </div>
                           </div>
                           <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">#1</span>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">$68,245.50</p>
                           <p class="price-up text-sm font-medium">+3.24% ($2,145.30)</p>
                        </div>

                        <div class="crypto-sparkline mb-4"></div>

                        <div class="grid grid-cols-2 gap-4 text-sm">
                           <div>
                              <p class="text-gray-500">Market Cap</p>
                              <p class="font-medium">$1.34T</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Volume (24h)</p>
                              <p class="font-medium">$31.2B</p>
                           </div>
                        </div>
                     </div>

                     <!-- Ethereum -->
                     <div class="bg-white rounded-lg p-6 crypto-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                                 <i class="fab fa-ethereum text-white text-lg"></i>
                              </div>
                              <div>
                                 <h4 class="font-bold">Ethereum</h4>
                                 <p class="text-gray-500 text-sm">ETH</p>
                              </div>
                           </div>
                           <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">#2</span>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">$3,845.67</p>
                           <p class="price-down text-sm font-medium">-1.85% (-$72.45)</p>
                        </div>

                        <div class="crypto-sparkline mb-4"></div>

                        <div class="grid grid-cols-2 gap-4 text-sm">
                           <div>
                              <p class="text-gray-500">Market Cap</p>
                              <p class="font-medium">$462.1B</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Volume (24h)</p>
                              <p class="font-medium">$18.7B</p>
                           </div>
                        </div>
                     </div>

                     <!-- Solana -->
                     <div class="bg-white rounded-lg p-6 crypto-card transition-all duration-300 border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                           <div class="flex items-center">
                              <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                                 <span class="text-white font-bold text-sm">SOL</span>
                              </div>
                              <div>
                                 <h4 class="font-bold">Solana</h4>
                                 <p class="text-gray-500 text-sm">SOL</p>
                              </div>
                           </div>
                           <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">#5</span>
                        </div>

                        <div class="mb-4">
                           <p class="text-2xl font-bold">$142.89</p>
                           <p class="price-up text-sm font-medium">+7.42% (+$9.87)</p>
                        </div>

                        <div class="crypto-sparkline mb-4"></div>

                        <div class="grid grid-cols-2 gap-4 text-sm">
                           <div>
                              <p class="text-gray-500">Market Cap</p>
                              <p class="font-medium">$67.8B</p>
                           </div>
                           <div>
                              <p class="text-gray-500">Volume (24h)</p>
                              <p class="font-medium">$2.4B</p>
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
                  <h2 class="text-3xl font-bold">Latest Crypto Analysis</h2>
                  <a href="/analysis" class="text-indigo-600 font-medium hover:underline">View All Analysis →</a>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  <!-- Analysis Article 1 -->
                  <CryptoCategoryComponents::ArticleCard 
                     image="https://images.unsplash.com/photo-1622630998477-942890a5f3df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     category="Bitcoin" 
                     tag="Technical Analysis" 
                     time="2 hours ago" 
                     title="Bitcoin Breaks Above $68K: Is $75K Next Target?" 
                     excerpt="Strong bullish momentum as BTC surpasses key resistance levels. Technical indicators suggest potential for further upside movement..." 
                     authorImg="https://randomuser.me/api/portraits/women/25.jpg" 
                     authorName="Sarah Chen" 
                  />

                  <!-- Analysis Article 2 -->
                  <CryptoCategoryComponents::ArticleCard 
                     image="https://images.unsplash.com/photo-1639762681485-074b7f938ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     category="Ethereum" 
                     tag="DeFi" 
                     time="1 day ago" 
                     title="Ethereum's Transition to Proof of Stake: What Investors Need to Know" 
                     excerpt="An in-depth look at Ethereum's shift to PoS, its implications for scalability, security, and what it means for ETH holders..." 
                     authorImg="https://randomuser.me/api/portraits/men/18.jpg" 
                     authorName="Alex Rodriguez" 
                  />

                  <!-- Analysis Article 3 -->
                  <CryptoCategoryComponents::ArticleCard 
                     image="https://images.unsplash.com/photo-1621761191319-c6fb62004040?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     category="Solana" 
                     tag="Market Analysis" 
                     time="3 days ago" 
                     title="Solana's Price Surge: Analyzing the Factors Behind the Rally" 
                     excerpt="Exploring the recent price surge in Solana, key drivers, market sentiment, and what to expect in the coming weeks..." 
                     authorImg="https://randomuser.me/api/portraits/men/19.jpg" 
                     authorName="Michael Johnson" 
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
               <h2 class="text-3xl font-bold mb-8 text-center">Crypto Trading Insights</h2>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                  <CryptoCategoryComponents::CryptoCard 
                     title="Technical Analysis" 
                     children="Advanced charting and technical indicators for crypto trading decisions." 
                     icon="fas fa-chart-bar" 
                     link="/analysis" 
                     color="text-indigo-600" 
                     gradient="from-indigo-50 to-blue-50 p-6 rounded-lg border border-indigo-100"
                     linkLabel="Learn More →" />

                  
                  <CryptoCategoryComponents::CryptoCard 
                     title="DeFi Opportunities" 
                     children="Explore decentralized finance protocols and yield farming strategies." 
                     icon="fas fa-coins" 
                     link="/learn/crypto" 
                     color="text-purple-600" 
                     gradient="from-purple-50 to-pink-50 p-6 rounded-lg border border-purple-100"
                     linkLabel="Explore DeFi →" />
                     

                  <CryptoCategoryComponents::CryptoCard 
                     title="Risk Management" 
                     children="Essential strategies for managing risk in volatile crypto markets." 
                     icon="fas fa-shield-alt" 
                     link="/tools" 
                     color="text-green-600" 
                     gradient="from-green-50 to-emerald-50 p-6 rounded-lg border border-green-100"
                     linkLabel="Risk Tools →" />

                  
                  <CryptoCategoryComponents::CryptoCard 
                     title="Crypto Education" 
                     children="Comprehensive guides from basics to advanced crypto trading concepts." 
                     icon="fas fa-graduation-cap" 
                     link="/learn/crypto" 
                     color="text-yellow-600" 
                     gradient="from-yellow-50 to-orange-50 p-6 rounded-lg border border-yellow-100"
                     linkLabel="Start Learning →" />
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
            icon="fas fa-bell"
            title="Stay Updated with Crypto Markets"
            children="Get daily crypto market updates, analysis, and trading signals delivered to your inbox."
         />
      HTML;
   }

}