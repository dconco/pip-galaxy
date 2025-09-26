<?php

class FooterComponent
{
   public function __render()
   {
      $currentYear = date('Y');

      return <<<HTML
         <!-- Footer -->
         <footer class="bg-gray-900 text-white pt-12 pb-6">
            <div class="container mx-auto px-4">
                  <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                     <div>
                        <Component.Link to="/" class="flex items-center space-x-4 mb-6">
                           <img src="/images/icon.png" alt="Pip Galaxy Logo" class="h-24 w-24">
                           <span class="logo-font text-3xl font-bold">Pip Galaxy</span>
                        </Component.Link>
                        <p class="text-gray-400">Providing traders with market insights, analysis, and tools since 2025.</p>
                     </div>

                     <div>
                        <h3 class="font-bold text-lg mb-4">Navigation</h3>
                        <ul class="space-y-2">
                              <li><Component.Link to="/" children="Home" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/analysis" children="Analysis" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/news" children="News" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/learn" children="Learn" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/tools" children="Tools" class="text-gray-400 hover:text-white" /></li>
                        </ul>
                     </div>

                     <div>
                        <h3 class="font-bold text-lg mb-4">Resources</h3>
                        <ul class="space-y-2">
                              <li><Component.Link to="/learn/forex" children="Forex School" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/learn/crypto" children="Crypto Guides" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/analysis/category/crypto" children="Crypto Analysis" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/analysis/category/forex" children="Forex Analysis" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/tools" children="Economic Calendar" class="text-gray-400 hover:text-white" /></li>
                              <li><Component.Link to="/learn/glossary" children="Glossary" class="text-gray-400 hover:text-white" /></li>
                        </ul>
                     </div>

                     <div>
                        <h3 class="font-bold text-lg mb-4">Connect</h3>
                        <div class="flex space-x-4 mb-4">
                              <a href="#" target="_blank" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                              <a href="#" target="_blank" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook"></i></a>
                              <a href="#" target="_blank" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                              <a href="#" target="_blank" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-youtube"></i></a>
                              <a href="#" target="_blank" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-telegram"></i></a>
                        </div>
                        <p class="text-gray-400">support@pipgalaxy.com</p>
                     </div>
                  </div>

                  <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center">
                     <p class="text-gray-500 text-sm">© {$currentYear} Pip Galaxy. All rights reserved.</p>
                     <div class="flex space-x-6 mt-4 md:mt-0">
                        <Component.Link children="Terms" class="text-gray-500 hover:text-white text-sm" />
                        <Component.Link children="Privacy" class="text-gray-500 hover:text-white text-sm" />
                        <Component.Link children="Cookies" class="text-gray-500 hover:text-white text-sm" />
                        <Component.Link children="Disclaimer" class="text-gray-500 hover:text-white text-sm" />
                     </div>
                  </div>
            </div>
         </footer>
      HTML;
   }
}
