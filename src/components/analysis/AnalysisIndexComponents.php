<?php

class AnalysisIndexComponents
{
   public function __render()
   {
      return <<<HTML
         <!-- Main Content -->
         <section class="py-12">
            <div class="container mx-auto px-4">
               <div class="flex flex-col lg:flex-row gap-8">
                  <AnalysisIndexComponents::SidebarFilter />

                  <!-- Article List -->
                  <div class="lg:w-3/4">
                     <!-- Featured Article -->
                     <AnalysisIndexComponents::FeaturedArticle image="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                           category="Forex"
                           title="USD Outlook: Fed Rate Decision Could Break EUR/USD Out of Range"
                           description="The EUR/USD has been trading in a tight range ahead of this week's FOMC meeting. We analyze key levels that could break depending on whether the Fed signals more hikes or a pause."
                           author="Jessica"
                           timeAgo="2 hours ago"
                           link="/analysis/view/forex" />

                     <!-- Filter Tabs -->
                     <div class="flex border-b border-gray-200 mb-6">
                        <button class="px-4 py-2 font-medium text-indigo-600 border-b-2 border-indigo-600">Latest</button>
                        <button class="px-4 py-2 font-medium text-gray-500 hover:text-indigo-600">Popular</button>
                        <button class="px-4 py-2 font-medium text-gray-500 hover:text-indigo-600">Forex</button>
                        <button class="px-4 py-2 font-medium text-gray-500 hover:text-indigo-600">Crypto</button>
                     </div>

                     <!-- Article Grid -->
                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Article 1 -->
                        <AnalysisIndexComponents::ArticleCard image="https://images.unsplash.com/photo-1604594849809-dfedbc827105?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                              category="Commodities"
                              title="Gold Price Analysis: XAU/USD Eyes Key Support at $1,850"
                              excerpt="Gold prices test critical support levels amid a stronger dollar and rising bond yields - we analyze potential scenarios ahead."
                              author="James"
                              views="3.2k"
                              timeAgo="5 hours ago"
                              link="/analysis/view/commodities" />

                        <!-- Article 2 -->
                        <AnalysisIndexComponents::ArticleCard image="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                              category="Crypto"
                              title="Bitcoin Technical Analysis: BTC/USD Eyes $30,000 Support"
                              excerpt="Bitcoin consolidates near $31,000 as traders await key economic data - we break down the technicals and potential catalysts."
                              author="Michael"
                              views="2.5k"
                              timeAgo="8 hours ago"
                              link="/analysis/view/crypto" />

                        <!-- Article 3 -->
                        <AnalysisIndexComponents::ArticleCard image="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                              category="Forex"
                              title="EUR/USD Technical Analysis: Euro Struggles Below 1.1000"
                              excerpt="The EUR/USD pair faces resistance near 1.1000 as the dollar strengthens ahead of the FOMC meeting - we analyze key levels to watch."
                              author="Sarah"
                              views="4.1k"
                              timeAgo="1 day ago"
                              link="/analysis/view/forex" />

                        <!-- Article 4 -->
                        <AnalysisIndexComponents::ArticleCard image="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                              category="Trading Psychology"
                              title="Mastering Trading Psychology: Tips for Staying Disciplined"
                              excerpt="Successful trading requires more than just strategy - we explore key psychological principles to help you stay disciplined and focused."
                              author="Emily"
                              views="1.8k"
                              timeAgo="2 days ago"
                              link="/analysis/view/trading-psychology" />
                     </div>

                     <AnalysisIndexComponents::Pagination />
                  </div>
               </div>
            </div>
         </section>
      HTML;
   }



   public function SidebarFilter()
   {
      return <<<HTML
         <!-- Sidebar Filters -->
         <aside class="lg:w-1/4">
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 sticky top-4">
               <h3 class="font-bold text-lg mb-4 flex items-center">
                  <i class="fas fa-filter text-indigo-600 mr-2"></i>
                  Filter Analysis
               </h3>

               <!-- Categories -->
               <div class="mb-6">
                  <h4 class="font-medium mb-3 text-gray-700">Categories</h4>
                  <ul class="space-y-2">
                     <li>
                     <Component.Link class="flex items-center justify-between text-gray-600 hover:text-indigo-600">
                        <span>All Analysis</span>
                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-0.5 rounded">128</span>
                     </Component.Link>
                     </li>
                     <li>
                        <Component.Link class="flex items-center justify-between text-gray-600 hover:text-indigo-600">
                           <span>Forex</span>
                           <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-0.5 rounded">64</span>
                        </Component.Link>
                     </li>
                     <li>
                        <Component.Link class="flex items-center justify-between text-gray-600 hover:text-indigo-600">
                           <span>Crypto</span>
                           <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-0.5 rounded">32</span>
                        </Component.Link>
                     </li>
                     <li>
                        <Component.Link class="flex items-center justify-between text-gray-600 hover:text-indigo-600">
                           <span>Commodities</span>
                           <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-0.5 rounded">18</span>
                        </Component.Link>
                     </li>
                     <li>
                        <Component.Link class="flex items-center justify-between text-gray-600 hover:text-indigo-600">
                           <span>Trading Psychology</span>
                           <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-0.5 rounded">14</span>
                        </Component.Link>
                     </li>
                  </ul>
               </div>

               <!-- Popular Tags -->
               <div class="mb-6">
                  <h4 class="font-medium mb-3 text-gray-700">Popular Tags</h4>
                  <div class="flex flex-wrap gap-2">
                     <Component.Link class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm px-3 py-1 rounded-full">#XAUUSD</Component.Link>
                     <Component.Link class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm px-3 py-1 rounded-full">#BTC</Component.Link>
                     <Component.Link class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm px-3 py-1 rounded-full">#EURUSD</Component.Link>
                     <Component.Link class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm px-3 py-1 rounded-full">#Support</Component.Link>
                     <Component.Link class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm px-3 py-1 rounded-full">#Resistance</Component.Link>
                     <Component.Link class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm px-3 py-1 rounded-full">#Fed</Component.Link>
                  </div>
               </div>

               <!-- Featured Tools -->
               <div>
                  <h4 class="font-medium mb-3 text-gray-700">Featured Tools</h4>
                  <div class="space-y-3">
                     <Component.Link class="flex items-center text-indigo-600 hover:text-indigo-800">
                        <i class="fas fa-calculator mr-2"></i>
                        <span>Pip Calculator</span>
                     </Component.Link>
                     <Component.Link class="flex items-center text-indigo-600 hover:text-indigo-800">
                        <i class="fas fa-chart-pie mr-2"></i>
                        <span>Position Sizer</span>
                     </Component.Link>
                     <Component.Link class="flex items-center text-indigo-600 hover:text-indigo-800">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Market Hours</span>
                     </Component.Link>
                  </div>
               </div>
            </div>
         </aside>
      HTML;
   }



   public function Pagination()
   {
      return <<<HTML
         <!-- Pagination -->
         <div class="flex justify-center mt-10">
            <nav class="inline-flex rounded-md shadow-sm">
               <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                  <i class="fas fa-chevron-left"></i>
               </a>
               <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-indigo-600 font-medium">1</a>
               <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
               <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 rounded-r-md">
                  <i class="fas fa-chevron-right"></i>
               </a>
            </nav>
         </div>
      HTML;
   }
   



   public function FeaturedArticle($image, $category, $title, $description, $author, $timeAgo, $link)
   {
      return <<<HTML
         <div class="bg-white rounded-lg overflow-hidden shadow-md mb-8">
            <div class="md:flex">
               <div class="md:w-1/2">
                  <img src="{$image}" alt="Featured Analysis" class="w-full h-full object-cover">
               </div>
               <div class="p-6 md:w-1/2">
                  <div class="flex items-center mb-2">
                     <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Featured</span>
                     <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">{$category}</span>
                     <span class="text-gray-500 text-sm ml-auto">{$timeAgo}</span>
                  </div>
                  <h2 class="font-bold text-2xl mb-3">{$title}</h2>
                  <p class="text-gray-600 mb-4">{$description}</p>
                  <div class="flex items-center">
                     <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Author" class="w-8 h-8 rounded-full mr-2">
                     <span class="text-sm font-medium">By {$author}</span>
                  </div>
                  <Component.Link to="{$link}" class="inline-block mt-4 text-indigo-600 font-medium hover:underline">Read Full Analysis →</Component.Link>
               </div>
            </div>
         </div>
      HTML;
   }




   public function ArticleCard($image, $category, $title, $excerpt, $author, $views, $timeAgo, $link)
   {
      return <<<HTML
         <Component.Link to="{$link}">
            <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow cursor-pointer">
               <img src="{$image}" alt="Gold Analysis" class="w-full h-48 object-cover">
               <div class="p-6">
                  <div class="flex items-center mb-2">
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">{$category}</span>
                        <span class="text-gray-500 text-sm ml-auto">{$timeAgo}</span>
                  </div>
                  <h3 class="font-bold text-xl mb-2">{$title}</h3>
                  <p class="text-gray-600 mb-4">{$excerpt}</p>
                  <div class="flex items-center justify-between">
                        <div class="flex items-center">
                           <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="w-6 h-6 rounded-full mr-2">
                           <span class="text-sm font-medium">{$author}</span>
                        </div>
                        <span class="text-xs text-gray-500"><i class="fas fa-eye mr-1"></i> {$views}</span>
                  </div>
               </div>
            </article>
         </Component.Link>
      HTML;
   }

}