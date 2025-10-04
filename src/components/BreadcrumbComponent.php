<?php

function BreadcrumbComponent ($active)
{
   $activeText = "";
   $active = strtolower($active);

   if ($active === 'crypto')
      $activeText = <<<HTML
         <span>/</span>
         <span class="text-gray-800 font-medium">Crypto</span>
         HTML;

   elseif ($active === 'forex')
      $activeText = <<<HTML
         <span>/</span>
         <span class="text-gray-800 font-medium">Forex</span>
         HTML;

   elseif ($active === 'commodities')
      $activeText = <<<HTML
         <span>/</span>
         <span class="text-gray-800 font-medium">Commodities</span>
         HTML;


   $active = fn ($page) => $page === $active
      ? 'bg-indigo-100 text-indigo-800 hover:bg-indigo-200'
      : 'bg-gray-100 text-gray-700 hover:bg-gray-200';


   return <<<HTML
      <!-- Breadcrumb & Categories -->
      <section class="bg-white border-b border-gray-200 py-4">
         <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between">
               <nav class="flex items-center space-x-2 text-sm text-gray-600">
                  <Component.Link to="/" class="hover:text-indigo-600">Home</Component.Link>
                  <span>/</span>
                  <Component.Link to="/analysis" class="hover:text-indigo-600">Analysis</Component.Link>
                  {$activeText}
               </nav>

               <div class="flex flex-wrap gap-2 mt-2 md:mt-0">
                  <Component.Link to="/analysis" class="{$active('analysis')} px-3 py-1 rounded-full text-sm font-medium">All Analysis</Component.Link>
                  <Component.Link to="/analysis/category/crypto" class="{$active('crypto')} px-3 py-1 rounded-full text-sm font-medium">Crypto</Component.Link>
                  <Component.Link to="/analysis/category/forex" class="{$active('forex')} px-3 py-1 rounded-full text-sm font-medium">Forex</Component.Link>
                  <Component.Link to="/analysis/category/commodities" class="{$active('commodities')} px-3 py-1 rounded-full text-sm font-medium">Commodities</Component.Link>
               </div>
            </div>
         </div>
      </section>
   HTML;
}