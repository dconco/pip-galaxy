<?php

class NewsPageComponents
{
   public function __render()
   {
      return <<<HTML
         {$this->NewsTicker()}
         {$this->PageHeader()}
         {$this->BreakingNewsBanner()}
         {$this->MainSection()}
      HTML;
   }



   private function NewsTicker()
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



   private function PageHeader()
   {
      return <<<HTML
         <!-- Page Header -->
         <section class="bg-gradient-to-r from-indigo-800 to-blue-700 text-white py-12">
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




   private function BreakingNewsBanner()
   {
      return <<<HTML
         <!-- Breaking News Banner -->
         <div class="breaking-news border-b border-red-200 py-3">
            <div class="container mx-auto px-4">
               <div class="flex items-center">
                  <span class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded mr-3">BREAKING</span>
                  <a href="#" class="font-medium text-gray-900 hover:text-red-700">Fed Chair Powell signals more rate hikes may be needed to curb inflation</a>
                  <span class="text-gray-500 text-sm ml-auto">2 mins ago</span>
               </div>
            </div>
         </div>
      HTML;
   }




   private function MainSection()
   {
      return <<<HTML
         <!-- Main Content -->
         <section class="py-8">
            <div class="container mx-auto px-4">
               <div class="flex flex-col lg:flex-row gap-8">
                  <!-- Main News Column -->
                  <div class="lg:w-2/3">
                     <!-- Featured News -->
                     <article class="mb-10 bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Fed Meeting" class="w-full h-64 md:h-80 object-cover">
                        <div class="p-6">
                           <div class="flex items-center mb-3">
                              <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Economy</span>
                              <span class="text-gray-500 text-sm ml-auto">1 hour ago</span>
                           </div>
                           <h2 class="font-bold text-2xl md:text-3xl mb-3">Fed Pauses Rate Hikes But Signals Two More Increases This Year</h2>
                           <p class="text-gray-600 mb-4 text-lg">The Federal Reserve held interest rates steady but surprised markets with a more hawkish outlook, projecting additional rate hikes in 2023 to combat persistent inflation.</p>
                           <div class="flex items-center justify-between">
                              <div class="flex items-center">
                                 <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                 <span class="text-sm font-medium">By Maria</span>
                              </div>
                              <a href="#" class="text-indigo-600 font-medium hover:underline">Read Full Story →</a>
                           </div>
                        </div>
                     </article>

                     <!-- News Grid -->
                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- News 1 -->
                        <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                           <img src="https://images.unsplash.com/photo-1622630998477-942890a5f3df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Bitcoin News" class="w-full h-48 object-cover">
                           <div class="p-6">
                              <div class="flex items-center mb-2">
                                 <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Crypto</span>
                                 <span class="text-gray-500 text-sm ml-auto">3 hours ago</span>
                              </div>
                              <h3 class="font-bold text-xl mb-2">Bitcoin Drops Below $29K as SEC Delays Decisions on Several ETF Applications</h3>
                              <p class="text-gray-600 mb-4">The SEC pushed back its deadlines for decisions on Bitcoin ETF proposals from BlackRock, Fidelity, and other asset managers.</p>
                              <a href="/analysis/category/crypto.html" class="text-indigo-600 font-medium hover:underline">Read More →</a>
                           </div>
                        </article>

                        <!-- News 2 -->
                        <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                           <img src="https://images.unsplash.com/photo-1604594849809-dfedbc827105?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Gold News" class="w-full h-48 object-cover">
                           <div class="p-6">
                              <div class="flex items-center mb-2">
                                 <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Commodities</span>
                                 <span class="text-gray-500 text-sm ml-auto">5 hours ago</span>
                              </div>
                              <h3 class="font-bold text-xl mb-2">Gold Rebounds From 3-Month Low as Dollar Weakens After Fed Decision</h3>
                              <p class="text-gray-600 mb-4">Gold prices recovered as the US dollar index fell following the Fed's rate decision, with XAU/USD climbing back above $1950.</p>
                              <a href="#" class="text-indigo-600 font-medium hover:underline">Read More →</a>
                           </div>
                        </article>

                        <!-- News 3 -->
                        <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                           <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Forex News" class="w-full h-48 object-cover">
                           <div class="p-6">
                              <div class="flex items-center mb-2">
                                 <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Forex</span>
                                 <span class="text-gray-500 text-sm ml-auto">7 hours ago</span>
                              </div>
                              <h3 class="font-bold text-xl mb-2">EUR/USD Volatility Expected as ECB Prepares for Potential Rate Hike Next Week</h3>
                              <p class="text-gray-600 mb-4">The euro gained ground against the dollar as markets price in a 25 basis point ECB rate hike at next week's meeting.</p>
                              <a href="#" class="text-indigo-600 font-medium hover:underline">Read More →</a>
                           </div>
                        </article>

                        <!-- News 4 -->
                        <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                           <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Stocks News" class="w-full h-48 object-cover">
                           <div class="p-6">
                              <div class="flex items-center mb-2">
                                 <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Stocks</span>
                                 <span class="text-gray-500 text-sm ml-auto">9 hours ago</span>
                              </div>
                              <h3 class="font-bold text-xl mb-2">S&P 500 Futures Drop After Fed's Hawkish Surprise</h3>
                              <p class="text-gray-600 mb-4">US stock futures declined as investors digested the Fed's projection of higher rates for longer, with tech shares leading losses.</p>
                              <a href="#" class="text-indigo-600 font-medium hover:underline">Read More →</a>
                           </div>
                        </article>
                     </div>

                     <!-- Load More Button -->
                     <div class="text-center mb-10">
                        <button class="bg-white hover:bg-gray-50 text-indigo-600 font-medium px-6 py-3 rounded-md border border-gray-300 shadow-sm">
                           Load More News
                        </button>
                     </div>

                     <!-- Economic Calendar Widget -->
                     <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                        <div class="flex items-center justify-between mb-4">
                           <h3 class="font-bold text-xl flex items-center">
                              <i class="fas fa-calendar-alt text-indigo-600 mr-2"></i>
                              Upcoming Economic Events
                           </h3>
                           <a href="#" class="text-indigo-600 hover:underline text-sm">View Full Calendar →</a>
                        </div>

                        <div class="space-y-4">
                           <!-- Event 1 -->
                           <div class="flex items-start pb-4 border-b border-gray-100">
                              <div class="text-center mr-4">
                                 <div class="bg-indigo-100 text-indigo-800 font-bold px-3 py-1 rounded-md">
                                    <div class="text-xs">JUN</div>
                                    <div class="text-lg">15</div>
                                 </div>
                              </div>
                              <div class="flex-1">
                                 <div class="flex justify-between items-start">
                                    <h4 class="font-medium">ECB Interest Rate Decision</h4>
                                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2 py-0.5 rounded ml-2">High Impact</span>
                                 </div>
                                 <p class="text-sm text-gray-500 mt-1">Expected: 4.00% • Previous: 3.75%</p>
                              </div>
                              <div class="text-right ml-4">
                                 <span class="text-sm text-gray-500">11:45 GMT</span>
                              </div>
                           </div>

                           <!-- Event 2 -->
                           <div class="flex items-start pb-4 border-b border-gray-100">
                              <div class="text-center mr-4">
                                 <div class="bg-indigo-100 text-indigo-800 font-bold px-3 py-1 rounded-md">
                                    <div class="text-xs">JUN</div>
                                    <div class="text-lg">16</div>
                                 </div>
                              </div>
                              <div class="flex-1">
                                 <div class="flex justify-between items-start">
                                    <h4 class="font-medium">US Retail Sales m/m</h4>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded ml-2">Medium Impact</span>
                                 </div>
                                 <p class="text-sm text-gray-500 mt-1">Expected: 0.3% • Previous: 0.4%</p>
                              </div>
                              <div class="text-right ml-4">
                                 <span class="text-sm text-gray-500">12:30 GMT</span>
                              </div>
                           </div>

                           <!-- Event 3 -->
                           <div class="flex items-start">
                              <div class="text-center mr-4">
                                 <div class="bg-indigo-100 text-indigo-800 font-bold px-3 py-1 rounded-md">
                                    <div class="text-xs">JUN</div>
                                    <div class="text-lg">20</div>
                                 </div>
                              </div>
                              <div class="flex-1">
                                 <div class="flex justify-between items-start">
                                    <h4 class="font-medium">UK CPI y/y</h4>
                                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2 py-0.5 rounded ml-2">High Impact</span>
                                 </div>
                                 <p class="text-sm text-gray-500 mt-1">Expected: 8.4% • Previous: 8.7%</p>
                              </div>
                              <div class="text-right ml-4">
                                 <span class="text-sm text-gray-500">06:00 GMT</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Sidebar -->
                  <div class="lg:w-1/3">
                     <!-- Latest Updates -->
                     <div class="bg-white rounded-lg shadow-md p-6 mb-6 top-4">
                        <h3 class="font-bold text-lg mb-4 flex items-center">
                           <i class="fas fa-bolt text-yellow-500 mr-2"></i>
                           Latest Updates
                        </h3>
                        <div class="space-y-4">
                           <!-- Update 1 -->
                           <div class="pb-4 border-b border-gray-100">
                              <div class="flex justify-between items-start mb-1">
                                 <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded">Forex</span>
                                 <span class="text-gray-500 text-xs">15 mins ago</span>
                              </div>
                              <a href="#" class="font-medium hover:text-indigo-600">USD/JPY spikes to 142.50 as BOJ maintains ultra-easy policy</a>
                           </div>

                           <!-- Update 2 -->
                           <div class="pb-4 border-b border-gray-100">
                              <div class="flex justify-between items-start mb-1">
                                 <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2 py-0.5 rounded">Crypto</span>
                                 <span class="text-gray-500 text-xs">32 mins ago</span>
                              </div>
                              <a href="#" class="font-medium hover:text-indigo-600">Ethereum network activity surges ahead of Shanghai upgrade</a>
                           </div>

                           <!-- Update 3 -->
                           <div class="pb-4 border-b border-gray-100">
                              <div class="flex justify-between items-start mb-1">
                                 <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded">Stocks</span>
                                 <span class="text-gray-500 text-xs">1 hour ago</span>
                              </div>
                              <a href="#" class="font-medium hover:text-indigo-600">Tesla shares jump 5% after Model 3 gets full US tax credit</a>
                           </div>

                           <!-- Update 4 -->
                           <div class="pb-4">
                              <div class="flex justify-between items-start mb-1">
                                 <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded">Commodities</span>
                                 <span class="text-gray-500 text-xs">2 hours ago</span>
                              </div>
                              <a href="#" class="font-medium hover:text-indigo-600">Oil prices rise 2% after Saudi Arabia announces production cuts</a>
                           </div>
                        </div>
                     </div>

                     <!-- Market Snapshot -->
                     <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="font-bold text-lg mb-4 flex items-center">
                           <i class="fas fa-chart-line text-indigo-600 mr-2"></i>
                           Market Snapshot
                        </h3>
                        <div class="space-y-3">
                           <!-- Forex -->
                           <div>
                              <h4 class="font-medium mb-2 text-gray-700">Forex</h4>
                              <div class="space-y-2">
                                 <div class="flex justify-between items-center">
                                    <span class="font-medium">EUR/USD</span>
                                    <span class="text-sm">1.0824 <span class="text-green-600 ml-1">+0.32%</span></span>
                                 </div>
                                 <div class="flex justify-between items-center">
                                    <span class="font-medium">GBP/USD</span>
                                    <span class="text-sm">1.2655 <span class="text-red-600 ml-1">-0.15%</span></span>
                                 </div>
                                 <div class="flex justify-between items-center">
                                    <span class="font-medium">USD/JPY</span>
                                    <span class="text-sm">142.18 <span class="text-green-600 ml-1">+0.78%</span></span>
                                 </div>
                              </div>
                           </div>

                           <!-- Crypto -->
                           <div>
                              <h4 class="font-medium mb-2 text-gray-700">Crypto</h4>
                              <div class="space-y-2">
                                 <div class="flex justify-between items-center">
                                    <span class="font-medium">BTC/USD</span>
                                    <span class="text-sm">28,745 <span class="text-red-600 ml-1">-2.4%</span></span>
                                 </div>
                                 <div class="flex justify-between items-center">
                                    <span class="font-medium">ETH/USD</span>
                                    <span class="text-sm">1,825 <span class="text-green-600 ml-1">+1.2%</span></span>
                                 </div>
                              </div>
                           </div>

                           <!-- Indices -->
                           <div>
                              <h4 class="font-medium mb-2 text-gray-700">Indices</h4>
                              <div class="space-y-2">
                                 <div class="flex justify-between items-center">
                                    <span class="font-medium">S&P 500</span>
                                    <span class="text-sm">4,425 <span class="text-red-600 ml-1">-0.8%</span></span>
                                 </div>
                                 <div class="flex justify-between items-center">
                                    <span class="font-medium">Nasdaq</span>
                                    <span class="text-sm">13,685 <span class="text-red-600 ml-1">-1.2%</span></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Newsletter -->
                     <div class="bg-indigo-50 rounded-lg shadow-md p-6">
                        <h3 class="font-bold text-lg mb-3">Get Market News Alerts</h3>
                        <p class="text-gray-600 mb-4 text-sm">Stay updated with breaking news and analysis delivered to your inbox.</p>
                        <form>
                           <input type="email" placeholder="Your email" class="w-full px-4 py-2 mb-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                           <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-md font-medium">Subscribe</button>
                        </form>
                     </div>

                  </div>
               </div>
            </div>
         </section>
      HTML;
   }
}
