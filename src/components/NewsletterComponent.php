<?php

function NewsletterComponent()
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
