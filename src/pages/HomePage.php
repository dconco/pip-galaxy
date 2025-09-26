<?php

use phpSPA\Component;

return (new Component(fn() => <<<HTML
   <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
      <div class="container mx-auto px-4 py-20">
         <div class="text-center">
            <h1 class="text-6xl font-bold text-gray-900 mb-6">
               Php<span class="text-blue-600">SPA</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
               A simple, fast PhpSPA single-page application template
            </p>
            <div class="space-x-4">
               <Component.Link to="/about" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                  Get Started
               </Component.Link>
               <a href="https://github.com/dconco/phpspa" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-200 transition-colors">
                  Documentation
               </a>
            </div>
         </div>

         <div class="mt-20 grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
               <div class="text-3xl mb-4">⚡</div>
               <h3 class="text-lg font-semibold mb-2">Fast</h3>
               <p class="text-gray-600">Lightweight and optimized for performance</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm">
               <div class="text-3xl mb-4">🎯</div>
               <h3 class="text-lg font-semibold mb-2">Simple</h3>
               <p class="text-gray-600">Easy to understand and customize</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm">
               <div class="text-3xl mb-4">📱</div>
               <h3 class="text-lg font-semibold mb-2">Responsive</h3>
               <p class="text-gray-600">Works great on all devices</p>
            </div>
         </div>
      </div>
   </div>
   HTML
))
->route('/')
->title('PhpSPA Template');
