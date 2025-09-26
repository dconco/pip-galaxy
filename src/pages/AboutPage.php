<?php

use phpSPA\Component;

return (new Component(fn() => <<<HTML
   <div class="min-h-screen bg-white">
      <div class="container mx-auto px-4 py-20">
         <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">About PhpSPA</h1>
            
            <div class="prose prose-lg max-w-none">
               <p class="text-xl text-gray-600 mb-6">
                  A simple, lightweight template for building single-page applications with PhpSPA.
               </p>
               
               <h2 class="text-2xl font-semibold text-gray-900 mb-4">Features</h2>
               <ul class="space-y-2 mb-8">
                  <li class="flex items-center">
                     <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                     Fast and lightweight
                  </li>
                  <li class="flex items-center">
                     <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                     Easy to customize
                  </li>
                  <li class="flex items-center">
                     <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                     Component-based architecture
                  </li>
                  <li class="flex items-center">
                     <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                     Responsive design
                  </li>
               </ul>

               <h2 class="text-2xl font-semibold text-gray-900 mb-4">Getting Started</h2>
               <div class="bg-gray-100 p-4 rounded-lg mb-6">
                  <code class="text-sm">
                     composer create-project dconco/phpspa-template my-app<br>
                     cd my-app<br>
                     php -S localhost:8000 -t src
                  </code>
               </div>

               <p class="text-gray-600">
                  Visit <a href="https://github.com/dconco/phpspa" class="text-blue-600 hover:underline">
                  the documentation</a> to learn more.
               </p>
            </div>
         </div>
      </div>
   </div>
   HTML
))
->route('/about')
->title('About - PhpSPA Template');
