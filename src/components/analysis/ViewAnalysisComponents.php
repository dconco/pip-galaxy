<?php

class ViewAnalysisComponents
{
   public function __render() {
      return <<<HTML
         <ViewAnalysisComponents::BreadcrumbCategory />

         <ViewAnalysisComponents::ArticleHeader />

         <ViewAnalysisComponents::ArticleContent>
            <ViewAnalysisComponents::ArticleTags />
            <ViewAnalysisComponents::SocialSharing />
            <ViewAnalysisComponents::AuthorBio />
         </ViewAnalysisComponents::ArticleContent>

         <!-- Related Articles -->
         <section class="py-12 bg-gray-50">
            <div class="container mx-auto px-4">
                  <h2 class="text-2xl font-bold mb-8">More Analysis You Might Like</h2>

                  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                     <!-- Article 1 -->
                     <ViewAnalysisComponents::ArticleCard
                        image="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        category="Forex"
                        title="EUR/USD Eyes Key Support Ahead of ECB Meeting"
                        summary="The euro is testing a critical support level as traders await the ECB's policy decision later this week."
                        link="/analysis/view/forex"
                        timeAgo="5 hours ago"
                     />

                     <!-- Article 2 -->
                     <ViewAnalysisComponents::ArticleCard
                        image="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80"
                        category="Crypto"
                        title="Bitcoin Breaks Above $30K: What's Next?"
                        summary="After a strong rally, Bitcoin has broken above the $30,000 level. Analysts weigh in on potential targets and risks."
                        link="/analysis/view/crypto"
                        timeAgo="1 day ago"
                     />

                     <!-- Article 3 -->
                     <ViewAnalysisComponents::ArticleCard
                        image="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        category="Commodities"
                        title="Oil Prices Surge Amid Supply Concerns"
                        summary="Crude oil prices have surged due to tightening supply and geopolitical tensions. Traders should watch key levels."
                        link="/analysis/view/commodities"
                        timeAgo="2 days ago"
                     />
                  </div>
            </div>
         </section>

         <ViewAnalysisComponents::NewsletterComponent />
      HTML;
   }




   public function BreadcrumbCategory() {
      return <<<HTML
         <!-- Breadcrumb & Categories -->
         <section class="bg-white border-b border-gray-200 py-4">
            <div class="container mx-auto px-4">
                  <div class="flex flex-wrap items-center justify-between">
                     <nav class="flex items-center space-x-2 text-sm text-gray-600">
                        <a href="/" class="hover:text-indigo-600">Home</a>
                        <span>/</span>
                        <a href="/analysis" class="hover:text-indigo-600">Analysis</a>
                        <span>/</span>
                        <span class="text-gray-800 font-medium">Gold Analysis</span>
                     </nav>

                     <div class="flex flex-wrap gap-2 mt-2 md:mt-0">
                        <a href="/analysis" class="bg-indigo-100 text-indigo-800 hover:bg-indigo-200 px-3 py-1 rounded-full text-sm font-medium">All Analysis</a>
                        <a href="/analysis/category/crypto" class="bg-gray-100 text-gray-700 hover:bg-gray-200 px-3 py-1 rounded-full text-sm font-medium">Crypto</a>
                        <a href="/analysis/category/forex" class="bg-gray-100 text-gray-700 hover:bg-gray-200 px-3 py-1 rounded-full text-sm font-medium">Forex</a>
                        <a href="/analysis/category/commodities" class="bg-orange-100 text-orange-800 hover:bg-orange-200 px-3 py-1 rounded-full text-sm font-medium">Commodities</a>
                     </div>
                  </div>
            </div>
         </section>
      HTML;
   }




   public function ArticleHeader() {
      return <<<HTML
         <!-- Article Header -->
         <section class="bg-white pt-12 pb-8 border-b border-gray-200">
            <div class="container mx-auto px-4 max-w-4xl">
                  <div class="flex items-center mb-4">
                     <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Technical Analysis</span>
                     <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">Commodities</span>
                     <span class="text-gray-500 text-sm ml-auto">Updated 6 hours ago</span>
                  </div>
                  <h1 class="text-3xl md:text-4xl font-bold mb-4">Gold (XAU/USD) Testing Support Turned Resistance Zone</h1>

                  <div class="flex items-center justify-between">
                     <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Niko" class="w-10 h-10 rounded-full mr-3">
                        <div>
                              <p class="font-medium">Niko</p>
                              <p class="text-sm text-gray-500">Senior Market Analyst</p>
                        </div>
                     </div>
                     <div class="flex space-x-3 text-gray-500">
                        <span class="flex items-center">
                              <i class="fas fa-eye mr-1"></i> 2.4k
                        </span>
                        <span class="flex items-center">
                              <i class="far fa-clock mr-1"></i> 5 min read
                        </span>
                     </div>
                  </div>
            </div>
         </section>
      HTML;
   }




   public function ArticleContent($children) {
      return <<<HTML
         <!-- Article Content -->
         <section class="py-8 bg-white">
            <div class="container mx-auto px-4 max-w-4xl">
               <!-- Featured Image -->
               <div class="mb-8 rounded-lg overflow-hidden">
                  <img src="https://images.unsplash.com/photo-1604594849809-dfedbc827105?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Gold Price Chart" class="w-full h-auto rounded-lg shadow-sm">
                  <p class="text-sm text-gray-500 mt-2">XAU/USD daily chart showing key levels (Source: TradingView)</p>
               </div>

               <!-- Article Body -->
               <div class="article-content text-gray-800">
                  <p class="font-medium text-lg mb-6">After breaking below its long-term triangle support, gold seems to be going for a retest of the area of interest. Will it hold as resistance this time?</p>

                  <h2>Key Technical Levels to Watch</h2>
                  <p>The XAU/USD pair has been in a downtrend since peaking at $2067 in early May. The recent breakdown below the symmetrical triangle pattern has opened the door for further downside, but we're now seeing a retest of the former support zone between $1940-$1955.</p>

                  <div class="my-6 p-4 bg-blue-50 border-l-4 border-blue-500 rounded">
                     <p class="font-medium text-blue-800">Key Takeaway: A rejection from the $1940-$1955 zone would confirm it as new resistance and could lead to a test of the $1900 psychological level.</p>
                  </div>

                  <h2>Fundamental Backdrop</h2>
                  <p>Gold's movement is being influenced by several competing factors:</p>
                  <ul>
                     <li>Dovish Fed expectations putting downward pressure on the USD</li>
                     <li>Declining Treasury yields supporting non-interest bearing assets</li>
                     <li>ETF outflows indicating weak investor demand</li>
                     <li>Physical demand from central banks providing a floor</li>
                  </ul>

                  <div class="my-8">
                     <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Gold Market Factors" class="w-full h-auto rounded-lg shadow-sm">
                  </div>

                  <h2>Trading Strategy</h2>
                  <p>For traders considering positions in gold, here are the key scenarios:</p>

                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-6">
                     <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                        <h3 class="font-bold text-green-800 mb-2">Bullish Case</h3>
                        <ul class="list-disc list-inside text-sm">
                           <li>Daily close above $1955 invalidates breakdown</li>
                           <li>Next resistance at $1975 then $2000</li>
                           <li>Stop-loss below $1930</li>
                        </ul>
                     </div>
                     <div class="bg-red-50 p-4 rounded-lg border border-red-200">
                        <h3 class="font-bold text-red-800 mb-2">Bearish Case</h3>
                        <ul class="list-disc list-inside text-sm">
                           <li>Rejection from $1940-$1955 zone</li>
                           <li>Targets $1900 then $1850 support</li>
                           <li>Stop-loss above $1960</li>
                        </ul>
                     </div>
                  </div>

                  <h2>Conclusion</h2>
                  <p>The coming sessions will be critical for gold's medium-term direction. Traders should watch for price action around the $1940-$1955 zone for confirmation of whether this former support will now act as resistance. The FOMC meeting minutes on Wednesday could be the catalyst for the next major move.</p>
               </div>

               {$children}
            </div>
         </section>
      HTML;
   }




   public function ArticleTags() {
      return <<<HTML
         <!-- Tags -->
         <div class="mt-8 pt-6 border-t border-gray-200">
            <div class="flex flex-wrap gap-2">
               <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">#XAUUSD</a>
               <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">#Gold</a>
               <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">#Commodities</a>
               <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">#TechnicalAnalysis</a>
               <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">#SupportResistance</a>
            </div>
         </div>
      HTML;
   }




   public function SocialSharing() {
      return <<<HTML
         <!-- Social Sharing -->
         <div class="mt-6 flex space-x-4">
            <p class="text-gray-700 font-medium">Share:</p>
            <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-twitter text-xl"></i></a>
            <a href="#" class="text-gray-500 hover:text-blue-800"><i class="fab fa-facebook text-xl"></i></a>
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fab fa-pinterest text-xl"></i></a>
            <a href="#" class="text-gray-500 hover:text-blue-400"><i class="fab fa-linkedin text-xl"></i></a>
            <a href="#" class="text-gray-500 hover:text-gray-800"><i class="fas fa-link text-xl"></i></a>
         </div>
      HTML;
   }



   public function AuthorBio() {
      return <<<HTML
         <!-- Author Bio -->
         <div class="mt-10 p-6 bg-gray-50 rounded-lg">
            <div class="flex items-center mb-4">
               <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Niko" class="w-16 h-16 rounded-full mr-4">
               <div>
                  <h3 class="font-bold text-lg">Niko</h3>
                  <p class="text-gray-600">Senior Market Analyst</p>
               </div>
            </div>
            <p class="text-gray-700">Niko is a certified technical analyst with 12 years of experience trading commodities and forex markets. He specializes in price action trading and intermarket analysis.</p>
            <div class="mt-3">
               <a href="#" class="text-indigo-600 hover:underline font-medium">View all articles by Niko →</a>
            </div>
         </div>
      HTML;
   }





   public function ArticleCard($image, $category, $title, $summary, $link, $timeAgo) {
      return <<<HTML
         <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <img src="{$image}" alt="{$title}" class="w-full h-48 object-cover">
            <div class="p-6">
                  <div class="flex items-center mb-2">
                     <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">{$category}</span>
                     <span class="text-gray-500 text-sm ml-auto">{$timeAgo}</span>
                  </div>
                  <h3 class="font-bold text-xl mb-2">{$title}</h3>
                  <p class="text-gray-600 mb-4">{$summary}</p>
                  <a href="{$link}" class="text-indigo-600 font-medium hover:underline">Read More →</a>
            </div>
         </article>
      HTML;
   }




   public function NewsletterComponent() {
      return <<<HTML
         <!-- Newsletter -->
         <section class="py-12 bg-gray-50 border-t border-gray-200">
            <div class="container mx-auto px-4 max-w-4xl text-center">
                  <div class="bg-white rounded-xl p-8 md:p-12 shadow-sm">
                     <h2 class="text-3xl font-bold mb-4">Get More Analysis Like This</h2>
                     <p class="text-gray-600 mb-6 text-lg">Subscribe to receive our weekly market analysis and trading ideas.</p>
                     <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                        <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-md font-bold">Subscribe</button>
                     </form>
                  </div>
            </div>
         </section>
      HTML;
   }
}
