<?php

class HomeHeader
{
   public function __render($active = 'home')
   {
      return <<<HTML
         <!-- Floating Header/Navbar -->
         <header class="fixed top-0 left-0 right-0 bg-white bg-opacity-10 backdrop-blur-md text-white shadow-lg z-50">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
               <Component.Link to="/" class="flex items-center space-x-4">
                  <img src="/images/icon.png" alt="Pip Galaxy Logo" class="h-24 w-24 drop-shadow-lg">
                  <span class="logo-font text-3xl font-bold drop-shadow-sm">Pip Galaxy</span>
               </Component.Link>

               <div class="hidden md:flex space-x-8">
                  <Component.Link to="/" children="Home" class="active text-white bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-lg font-medium" />
                  <Component.Link to="/analysis" children="Analysis" class="hover:text-indigo-200 hover:bg-white hover:bg-opacity-10 px-4 py-2 rounded-lg font-medium transition-all duration-300" />
                  <Component.Link to="/news" children="News" class="hover:text-indigo-200 hover:bg-white hover:bg-opacity-10 px-4 py-2 rounded-lg font-medium transition-all duration-300" />
                  <Component.Link to="/learn" children="Learn" class="hover:text-indigo-200 hover:bg-white hover:bg-opacity-10 px-4 py-2 rounded-lg font-medium transition-all duration-300" />
                  <Component.Link to="/tools" children="Tools" class="hover:text-indigo-200 hover:bg-white hover:bg-opacity-10 px-4 py-2 rounded-lg font-medium transition-all duration-300" />
               </div>

               <div class="flex items-center space-x-4 pr-2">
                  <button class="hidden md:block bg-white bg-opacity-20 backdrop-blur-sm hover:bg-opacity-30 px-6 py-3 rounded-lg font-medium transition-all duration-300">Sign In</button>
                  <button class="md:hidden text-3xl" id="menuBtn">
                     <i class="fas fa-bars"></i>
                  </button>
               </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu hidden md:hidden hero-gradient" id="mobileMenu">
               <div class="container mx-auto px-4 py-6 flex flex-col space-y-4">
                  <Component.Link to="/" children="Home" class="active text-white bg-white bg-opacity-20 backdrop-blur-sm px-4 py-3 rounded-lg font-medium" />
                  <Component.Link to="/analysis" children="Analysis" class="hover:text-indigo-200 hover:bg-white hover:bg-opacity-10 px-4 py-3 rounded-lg font-medium transition-all duration-300" />
                  <Component.Link to="/news" children="News" class="hover:text-indigo-200 hover:bg-white hover:bg-opacity-10 px-4 py-3 rounded-lg font-medium transition-all duration-300" />
                  <Component.Link to="/learn" children="Learn" class="hover:text-indigo-200 hover:bg-white hover:bg-opacity-10 px-4 py-3 rounded-lg font-medium transition-all duration-300" />
                  <Component.Link to="/tools" children="Tools" class="hover:text-indigo-200 hover:bg-white hover:bg-opacity-10 px-4 py-3 rounded-lg font-medium transition-all duration-300" />
                  <button class="bg-white bg-opacity-20 backdrop-blur-sm hover:bg-opacity-30 px-4 py-3 rounded-lg font-medium transition-all duration-300 mt-2 text-left">Sign In</button>
               </div>
            </div>
         </header>
      HTML;
   }
}
