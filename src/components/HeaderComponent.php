<?php

class HeaderComponent
{
   public function __render($active = 'home')
   {
      $active = fn($page) => $page === $active
         ? 'text-indigo-600 bg-indigo-50 px-4 rounded-lg font-medium'
         : 'hover:text-indigo-600 hover:bg-indigo-50 px-4 rounded-lg font-medium transition-all duration-300';

      return <<<HTML
         <!-- Modern Header integrated with content -->
         <header class="bg-white bg-opacity-90 backdrop-blur-md text-gray-800 shadow-lg sticky top-0 z-50">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
               <Component.Link to="/" class="flex items-center space-x-4">
                  <img src="/images/icon.png" alt="Pip Galaxy Logo" class="h-24 w-24 drop-shadow-lg">
                  <span class="logo-font text-3xl font-bold drop-shadow-sm">Pip Galaxy</span>
               </Component.Link>

               <div class="hidden md:flex space-x-8">
                  <Component.Link to="/" children="Home" class="{$active('home')} py-2" />
                  <Component.Link to="/analysis" children="Analysis" class="{$active('analysis')} py-2" />
                  <Component.Link to="/news" children="News" class="{$active('news')} py-2" />
                  <Component.Link to="/learn" children="Learn" class="{$active('learn')} py-2" />
                  <Component.Link to="/tools" children="Tools" class="{$active('tools')} py-2" />
               </div>

               <div class="flex items-center space-x-4">
                  <button class="hidden md:block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300">Sign In</button>
                  <button class="md:hidden text-3xl" id="menuBtn">
                     <i class="fas fa-bars"></i>
                  </button>
               </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu hidden md:hidden bg-white bg-opacity-95 backdrop-blur-md border-t" id="mobileMenu">
               <div class="container mx-auto px-4 py-6 flex flex-col space-y-4">
                  <Component.Link to="/" children="Home" class="{$active('home')} py-3" />
                  <Component.Link to="/analysis" children="Analysis" class="{$active('analysis')} py-3" />
                  <Component.Link to="/news" children="News" class="{$active('news')} py-3" />
                  <Component.Link to="/learn" children="Learn" class="{$active('learn')} py-3" />
                  <Component.Link to="/tools" children="Tools" class="{$active('tools')} py-3" />
                  <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mt-2">Sign In</button>
               </div>
            </div>
         </header>
      HTML;
   }
}
