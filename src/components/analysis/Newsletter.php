<?php

function Newsletter ($icon, $title, $children) {
   return <<<HTML
      <!-- Newsletter -->
      <section class="py-12 bg-gray-50">
         <div class="container mx-auto px-4 max-w-4xl text-center">
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-8 md:p-12 text-white">
               <div class="flex justify-center mb-4">
                  <i class="{$icon} text-4xl"></i>
               </div>
               <h2 class="text-3xl font-bold mb-4">{$title}</h2>
               <p class="text-indigo-100 mb-6 text-lg">{$children}</p>
               <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                  <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-md border-0 text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                  <button type="submit" class="bg-white hover:bg-gray-100 text-indigo-600 px-6 py-3 rounded-md font-bold">Subscribe</button>
               </form>
            </div>
         </div>
      </section>
   HTML;
}