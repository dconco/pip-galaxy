<?php

class FooterComponent
{
   public function __render()
   {
      return <<<HTML
         <!-- Footer -->
         <footer class="bg-gray-900 text-white pt-12 pb-6">
            <div class="container mx-auto px-4">
                  <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                     <div>
                        <div class="flex items-center space-x-4 mb-6">
                              <img src="images/icon.png" alt="Pip Galaxy Logo" class="h-24 w-24">
                              <span class="logo-font text-3xl font-bold">Pip Galaxy</span>
                        </div>
                        <p class="text-gray-400">Providing traders with market insights, analysis, and tools since 2025.</p>
                     </div>

                     <div>
                        <h3 class="font-bold text-lg mb-4">Navigation</h3>
                        <ul class="space-y-2">
                              <li><a href="/index.html" class="text-gray-400 hover:text-white">Home</a></li>
                              <li><a href="/analysis/index.html" class="text-gray-400 hover:text-white">Analysis</a></li>
                              <li><a href="/news/index.html" class="text-gray-400 hover:text-white">News</a></li>
                              <li><a href="learn/index.html" class="text-gray-400 hover:text-white">Learn</a></li>
                              <li><a href="/tools/index.html" class="text-gray-400 hover:text-white">Tools</a></li>
                        </ul>
                     </div>

                     <div>
                        <h3 class="font-bold text-lg mb-4">Resources</h3>
                        <ul class="space-y-2">
                              <li><a href="learn/forex.html" class="text-gray-400 hover:text-white">Forex School</a></li>
                              <li><a href="learn/crypto.html" class="text-gray-400 hover:text-white">Crypto Guides</a></li>
                              <li><a href="/analysis/category/crypto.html" class="text-gray-400 hover:text-white">Crypto Analysis</a></li>
                              <li><a href="/analysis/category/forex.html" class="text-gray-400 hover:text-white">Forex Analysis</a></li>
                              <li><a href="/tools/index.html" class="text-gray-400 hover:text-white">Economic Calendar</a></li>
                              <li><a href="learn/glossary.html" class="text-gray-400 hover:text-white">Glossary</a></li>
                        </ul>
                     </div>

                     <div>
                        <h3 class="font-bold text-lg mb-4">Connect</h3>
                        <div class="flex space-x-4 mb-4">
                              <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                              <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook"></i></a>
                              <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                              <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-youtube"></i></a>
                              <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-telegram"></i></a>
                        </div>
                        <p class="text-gray-400">support@pipgalaxy.com</p>
                     </div>
                  </div>

                  <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center">
                     <p class="text-gray-500 text-sm">© 2025 Pip Galaxy. All rights reserved.</p>
                     <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-500 hover:text-white text-sm">Terms</a>
                        <a href="#" class="text-gray-500 hover:text-white text-sm">Privacy</a>
                        <a href="#" class="text-gray-500 hover:text-white text-sm">Cookies</a>
                        <a href="#" class="text-gray-500 hover:text-white text-sm">Disclaimer</a>
                     </div>
                  </div>
            </div>
         </footer>
      HTML;
   }
}
