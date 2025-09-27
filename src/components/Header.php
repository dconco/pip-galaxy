<?php

class Header
{
   public function __render($active = 'home')
   {
      $active = fn($page) => $page === $active
         ? 'active text-white bg-white bg-opacity-20 backdrop-blur-sm'
         : 'hover:text-indigo-200 hover:bg-white hover:bg-opacity-10';

      return <<<HTML
         <!-- Floating Header/Navbar -->
         <header class="fixed top-0 left-0 right-0 bg-white bg-opacity-10 backdrop-blur-md text-white shadow-lg z-50" id="header">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
               <Component.Link to="/" class="flex items-center space-x-4 outline-none focus:outline-none no-underline select-none hover:bg-transparent">
                  <img src="/images/icon.png" alt="Pip Galaxy Logo" class="h-24 w-24 drop-shadow-lg">
                  <span class="logo-font text-3xl font-bold drop-shadow-sm">Pip Galaxy</span>
               </Component.Link>

               <div class="hidden md:flex space-x-8">
                  <Component.Link to="/" class="{$active('home')} px-4 py-2 rounded-lg font-medium transition-all duration-300">Home</Component.Link>
                  <Component.Link to="/analysis" class="{$active('analysis')} px-4 py-2 rounded-lg font-medium transition-all duration-300">Analysis</Component.Link>
                  <Component.Link to="/news" class="{$active('news')} px-4 py-2 rounded-lg font-medium transition-all duration-300">News</Component.Link>
                  <Component.Link to="/learn" class="{$active('learn')} px-4 py-2 rounded-lg font-medium transition-all duration-300">Learn</Component.Link>
                  <Component.Link to="/tools" class="{$active('tools')} px-4 py-2 rounded-lg font-medium transition-all duration-300">Tools</Component.Link>
               </div>

               <div class="flex items-center space-x-4 pr-2">
                  <button id="signInBtn" class="hidden md:block bg-white bg-opacity-20 backdrop-blur-sm hover:bg-opacity-30 px-6 py-3 rounded-lg font-medium transition-all duration-300">Sign In</button>
                  <button class="md:hidden text-3xl" id="menuBtn">
                     <i class="fas fa-bars"></i>
                  </button>
               </div>
            </div>

            <!-- Mobile Menu -->
            <div class="header-mobile-menu mobile-menu hidden md:hidden hero-gradient" id="headerMobileMenu">
               <div class="container mx-auto px-4 py-6 flex flex-col space-y-4">
                  <Component.Link to="/" class="{$active('home')} px-4 py-3 rounded-lg font-medium">Home</Component.Link>
                  <Component.Link to="/analysis" class="{$active('analysis')} px-4 py-3 rounded-lg font-medium">Analysis</Component.Link>
                  <Component.Link to="/news" class="{$active('news')} px-4 py-3 rounded-lg font-medium">News</Component.Link>
                  <Component.Link to="/learn" class="{$active('learn')} px-4 py-3 rounded-lg font-medium">Learn</Component.Link>
                  <Component.Link to="/tools" class="{$active('tools')} px-4 py-3 rounded-lg font-medium">Tools</Component.Link>
                  <button class="bg-white bg-opacity-20 backdrop-blur-sm hover:bg-opacity-30 px-4 py-3 rounded-lg font-medium transition-all duration-300 mt-2 text-left">Sign In</button>
               </div>
            </div>
         </header>
      HTML;
   }
}
