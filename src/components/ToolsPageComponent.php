<?php

class ToolsPageComponent
{
   public function __render() {
      return <<<HTML
         <section class="py-12">
            <div class="container mx-auto px-4">
               <ToolsPageComponent::PipValueCalculator />

               <ToolsPageComponent::PositionSizeCalculator />

               <ToolsPageComponent::ForexMarketHours />

               <ToolsPageComponent::CurrencyCorrelation />
            </div>
         </section>


         <ToolsPageComponent::AdditionalTools />
      HTML;
   }






   public function PipValueCalculator() {
      return <<<HTML
         <!-- Pip Value Calculator -->
         <div id="pip-calculator" class="bg-white rounded-xl shadow-md overflow-hidden mb-12">
            <div class="md:flex">
               <div class="md:w-1/3 bg-indigo-50 p-8 flex flex-col justify-center">
                     <div class="text-center">
                        <div class="text-4xl text-indigo-600 mb-3">
                           <i class="fas fa-calculator"></i>
                        </div>
                        <h2 class="text-2xl font-bold mb-2">Pip Value Calculator</h2>
                        <p class="text-gray-600">Calculate the monetary value of a pip for any currency pair</p>
                     </div>
               </div>
               <div class="md:w-2/3 p-8">
                     <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                           <label class="block text-gray-700 font-medium mb-2">Currency Pair</label>
                           <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                              <option>EUR/USD</option>
                              <option>GBP/USD</option>
                              <option>USD/JPY</option>
                              <option>AUD/USD</option>
                              <option>USD/CAD</option>
                              <option>NZD/USD</option>
                              <option>EUR/GBP</option>
                              <option>Other...</option>
                           </select>
                        </div>
                        <div>
                           <label class="block text-gray-700 font-medium mb-2">Account Currency</label>
                           <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                              <option>USD</option>
                              <option>EUR</option>
                              <option>GBP</option>
                              <option>JPY</option>
                              <option>AUD</option>
                              <option>CAD</option>
                              <option>Other...</option>
                           </select>
                        </div>
                        <div>
                           <label class="block text-gray-700 font-medium mb-2">Trade Size (Lots)</label>
                           <input type="number" step="0.01" value="1.00" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div class="flex items-end">
                           <button type="button" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-md font-medium w-full">Calculate</button>
                        </div>
                     </form>

                     <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h3 class="font-bold text-lg mb-4">Results</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                           <div class="bg-white p-4 rounded-md shadow-sm text-center">
                              <p class="text-gray-500 text-sm">Pip Value</p>
                              <p class="text-2xl font-bold text-indigo-600">$10.00</p>
                           </div>
                           <div class="bg-white p-4 rounded-md shadow-sm text-center">
                              <p class="text-gray-500 text-sm">Pip Movement</p>
                              <p class="text-2xl font-bold text-indigo-600">0.0001</p>
                           </div>
                           <div class="bg-white p-4 rounded-md shadow-sm text-center">
                              <p class="text-gray-500 text-sm">Cost per 1 Lot</p>
                              <p class="text-2xl font-bold text-indigo-600">$100,000</p>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      HTML;
   }




   public function PositionSizeCalculator() {
      return <<<HTML
         <!-- Position Size Calculator -->
         <div id="position-size" class="bg-white rounded-xl shadow-md overflow-hidden mb-12">
            <div class="md:flex">
               <div class="md:w-1/3 bg-indigo-50 p-8 flex flex-col justify-center">
                     <div class="text-center">
                        <div class="text-4xl text-indigo-600 mb-3">
                           <i class="fas fa-chart-pie"></i>
                        </div>
                        <h2 class="text-2xl font-bold mb-2">Position Size Calculator</h2>
                        <p class="text-gray-600">Determine the optimal position size based on your risk parameters</p>
                     </div>
               </div>
               <div class="md:w-2/3 p-8">
                     <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                           <label class="block text-gray-700 font-medium mb-2">Account Balance</label>
                           <div class="relative">
                              <span class="absolute left-3 top-3">$</span>
                              <input type="number" value="10000" class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                           </div>
                        </div>
                        <div>
                           <label class="block text-gray-700 font-medium mb-2">Risk Percentage</label>
                           <div class="relative">
                                 <input type="range" min="0.5" max="5" step="0.5" value="2" class="w-full mb-2">
                                 <div class="flex justify-between text-xs text-gray-500">
                                    <span>0.5%</span>
                                    <span>5%</span>
                                 </div>
                                 <div class="mt-1 text-center">
                                    <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-2 py-0.5 rounded">2%</span>
                                 </div>
                           </div>
                        </div>
                        <div>
                           <label class="block text-gray-700 font-medium mb-2">Stop Loss (Pips)</label>
                           <input type="number" value="30" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                           <label class="block text-gray-700 font-medium mb-2">Currency Pair</label>
                           <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                              <option>EUR/USD</option>
                              <option>GBP/USD</option>
                              <option>USD/JPY</option>
                              <option>Other...</option>
                           </select>
                        </div>
                        <div class="flex items-end">
                           <button type="button" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-md font-medium w-full">Calculate</button>
                        </div>
                     </form>

                     <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h3 class="font-bold text-lg mb-4">Position Size</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                           <div class="bg-white p-4 rounded-md shadow-sm text-center">
                              <p class="text-gray-500 text-sm">Risk Amount</p>
                              <p class="text-2xl font-bold text-indigo-600">$200.00</p>
                           </div>
                           <div class="bg-white p-4 rounded-md shadow-sm text-center">
                              <p class="text-gray-500 text-sm">Position Size</p>
                              <p class="text-2xl font-bold text-indigo-600">0.67 Lots</p>
                           </div>
                           <div class="bg-white p-4 rounded-md shadow-sm text-center">
                              <p class="text-gray-500 text-sm">Units</p>
                              <p class="text-2xl font-bold text-indigo-600">67,000</p>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      HTML;
   }




   public function ForexMarketHours() {
      return <<<HTML
         <!-- Forex Market Hours -->
         <div id="forex-hours" class="bg-white rounded-xl shadow-md overflow-hidden mb-12">
            <div class="md:flex">
               <div class="md:w-1/3 bg-indigo-50 p-8 flex flex-col justify-center">
                  <div class="text-center">
                     <div class="text-4xl text-indigo-600 mb-3">
                        <i class="fas fa-clock"></i>
                     </div>
                     <h2 class="text-2xl font-bold mb-2">Forex Market Hours</h2>
                     <p class="text-gray-600">See when major trading sessions open and overlap</p>
                  </div>
               </div>
               <div class="md:w-2/3 p-8">
                     <div class="mb-6">
                        <div class="flex justify-between mb-2">
                           <span class="text-sm font-medium text-gray-700">Current Time: <span class="font-bold" id="current-time">Loading...</span></span>
                           <div class="flex space-x-2">
                              <select class="text-sm border border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                                 <option>GMT</option>
                                 <option>EST</option>
                                 <option>PST</option>
                                 <option>Local Time</option>
                              </select>
                           </div>
                        </div>

                        <!-- Timeline Visualization -->
                        <div class="relative h-32 mt-6">
                           <!-- Time markers -->
                           <div class="absolute bottom-0 left-0 right-0 h-8 flex justify-between">
                              <span class="text-xs">00:00</span>
                              <span class="text-xs">04:00</span>
                              <span class="text-xs">08:00</span>
                              <span class="text-xs">12:00</span>
                              <span class="text-xs">16:00</span>
                              <span class="text-xs">20:00</span>
                              <span class="text-xs">24:00</span>
                           </div>

                           <!-- Sessions -->
                           <div class="absolute left-0 right-0 h-16">
                              <!-- Sydney -->
                              <div class="absolute bottom-0 left-[4.16%] w-[8.33%] h-4 bg-blue-200 rounded-t-sm"></div>
                              <div class="absolute bottom-4 left-[4.16%] text-xs">Sydney</div>

                              <!-- Tokyo -->
                              <div class="absolute bottom-0 left-[16.66%] w-[8.33%] h-6 bg-green-200 rounded-t-sm"></div>
                              <div class="absolute bottom-6 left-[16.66%] text-xs">Tokyo</div>

                              <!-- London -->
                              <div class="absolute bottom-0 left-[33.33%] w-[16.66%] h-8 bg-purple-200 rounded-t-sm"></div>
                              <div class="absolute bottom-8 left-[33.33%] text-xs">London</div>

                              <!-- New York -->
                              <div class="absolute bottom-0 left-[58.33%] w-[16.66%] h-6 bg-red-200 rounded-t-sm"></div>
                              <div class="absolute bottom-6 left-[58.33%] text-xs">New York</div>

                              <!-- Overlap indicators -->
                              <div class="absolute bottom-0 left-[33.33%] w-[8.33%] h-10 bg-yellow-300 rounded-t-sm opacity-80"></div>
                              <div class="absolute bottom-10 left-[33.33%] text-xs">Ldn/Tok</div>

                              <div class="absolute bottom-0 left-[58.33%] w-[8.33%] h-10 bg-indigo-300 rounded-t-sm opacity-80"></div>
                              <div class="absolute bottom-10 left-[58.33%] text-xs">Ldn/NY</div>

                              <!-- Current time indicator -->
                              <div class="absolute bottom-0 h-12 w-0.5 bg-red-600" style="left: 25%;">
                                 <div class="absolute -top-3 -ml-1 text-xs text-red-600">Now</div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                           <h3 class="font-bold mb-3">Major Trading Sessions</h3>
                           <div class="space-y-3">
                              <div class="flex items-center">
                                 <div class="w-4 h-4 bg-blue-200 rounded-sm mr-2"></div>
                                 <span>Sydney: 10PM - 7AM GMT</span>
                              </div>
                              <div class="flex items-center">
                                 <div class="w-4 h-4 bg-green-200 rounded-sm mr-2"></div>
                                 <span>Tokyo: 12AM - 9AM GMT</span>
                              </div>
                              <div class="flex items-center">
                                 <div class="w-4 h-4 bg-purple-200 rounded-sm mr-2"></div>
                                 <span>London: 8AM - 5PM GMT</span>
                              </div>
                              <div class="flex items-center">
                                 <div class="w-4 h-4 bg-red-200 rounded-sm mr-2"></div>
                                 <span>New York: 1PM - 10PM GMT</span>
                              </div>
                           </div>
                        </div>
                        <div>
                           <h3 class="font-bold mb-3">Session Overlaps</h3>
                           <div class="space-y-3">
                              <div class="flex items-center">
                                 <div class="w-4 h-4 bg-yellow-300 rounded-sm mr-2"></div>
                                 <span>London/Tokyo: 8AM - 9AM GMT</span>
                              </div>
                              <div class="flex items-center">
                                 <div class="w-4 h-4 bg-indigo-300 rounded-sm mr-2"></div>
                                 <span>London/New York: 1PM - 5PM GMT</span>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      HTML;
   }






   public function CurrencyCorrelation() {
      return <<<HTML
         <!-- Currency Correlation -->
         <div id="correlation" class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="md:flex">
               <div class="md:w-1/3 bg-indigo-50 p-8 flex flex-col justify-center">
                  <div class="text-center">
                     <div class="text-4xl text-indigo-600 mb-3">
                        <i class="fas fa-project-diagram"></i>
                     </div>
                     <h2 class="text-2xl font-bold mb-2">Currency Correlation</h2>
                     <p class="text-gray-600">See how currency pairs move in relation to each other</p>
                  </div>
               </div>
               <div class="md:w-2/3 p-8">
                  <div class="mb-6">
                     <div class="flex justify-between items-center mb-4">
                        <h3 class="font-bold">1 Week Correlation Matrix</h3>
                        <div class="flex space-x-2">
                           <select class="text-sm border border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                              <option>1 Week</option>
                              <option>1 Month</option>
                              <option>3 Months</option>
                              <option>1 Year</option>
                           </select>
                        </div>
                     </div>

                     <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                           <thead>
                              <tr>
                                 <th class="px-2 py-2 text-left"></th>
                                 <th class="px-2 py-2">EUR/USD</th>
                                 <th class="px-2 py-2">GBP/USD</th>
                                 <th class="px-2 py-2">USD/JPY</th>
                                 <th class="px-2 py-2">AUD/USD</th>
                                 <th class="px-2 py-2">USD/CAD</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="border-b border-gray-100">
                                 <td class="px-2 py-2 font-medium">EUR/USD</td>
                                 <td class="px-2 py-2 text-center bg-gray-100">1.00</td>
                                 <td class="px-2 py-2 text-center">0.85</td>
                                 <td class="px-2 py-2 text-center">-0.92</td>
                                 <td class="px-2 py-2 text-center">0.78</td>
                                 <td class="px-2 py-2 text-center">-0.65</td>
                              </tr>
                              <tr class="border-b border-gray-100">
                                 <td class="px-2 py-2 font-medium">GBP/USD</td>
                                 <td class="px-2 py-2 text-center">0.85</td>
                                 <td class="px-2 py-2 text-center bg-gray-100">1.00</td>
                                 <td class="px-2 py-2 text-center">-0.76</td>
                                 <td class="px-2 py-2 text-center">0.68</td>
                                 <td class="px-2 py-2 text-center">-0.52</td>
                              </tr>
                              <tr class="border-b border-gray-100">
                                 <td class="px-2 py-2 font-medium">USD/JPY</td>
                                 <td class="px-2 py-2 text-center">-0.92</td>
                                 <td class="px-2 py-2 text-center">-0.76</td>
                                 <td class="px-2 py-2 text-center bg-gray-100">1.00</td>
                                 <td class="px-2 py-2 text-center">-0.82</td>
                                 <td class="px-2 py-2 text-center">0.71</td>
                              </tr>
                              <tr class="border-b border-gray-100">
                                 <td class="px-2 py-2 font-medium">AUD/USD</td>
                                 <td class="px-2 py-2 text-center">0.78</td>
                                 <td class="px-2 py-2 text-center">0.68</td>
                                 <td class="px-2 py-2 text-center">-0.82</td>
                                 <td class="px-2 py-2 text-center bg-gray-100">1.00</td>
                                 <td class="px-2 py-2 text-center">-0.58</td>
                              </tr>
                              <tr>
                                 <td class="px-2 py-2 font-medium">USD/CAD</td>
                                 <td class="px-2 py-2 text-center">-0.65</td>
                                 <td class="px-2 py-2 text-center">-0.52</td>
                                 <td class="px-2 py-2 text-center">0.71</td>
                                 <td class="px-2 py-2 text-center">-0.58</td>
                                 <td class="px-2 py-2 text-center bg-gray-100">1.00</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>

                     <div class="mt-4 text-xs text-gray-500">
                        <p>Correlation values range from -1 to +1. A value of +1 indicates perfect positive correlation, -1 indicates perfect negative correlation, and 0 indicates no correlation.</p>
                     </div>
                  </div>

                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                     <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-bold mb-2 text-blue-800">Strong Positive Correlation (>0.8)</h3>
                        <ul class="text-sm space-y-1">
                           <li class="flex items-center">
                              <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                              <span>EUR/USD - GBP/USD</span>
                           </li>
                           <li class="flex items-center">
                              <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                              <span>EUR/USD - AUD/USD</span>
                           </li>
                           <li class="flex items-center">
                              <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                              <span>USD/JPY - USD/CHF</span>
                           </li>
                        </ul>
                     </div>
                     <div class="bg-red-50 p-4 rounded-lg">
                        <h3 class="font-bold mb-2 text-red-800">Strong Negative Correlation (<-0.8)< /h3>
                           <ul class="text-sm space-y-1">
                              <li class="flex items-center">
                                 <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                 <span>EUR/USD - USD/JPY</span>
                              </li>
                              <li class="flex items-center">
                                 <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                 <span>GBP/USD - USD/JPY</span>
                              </li>
                              <li class="flex items-center">
                                 <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                 <span>AUD/USD - USD/JPY</span>
                              </li>
                           </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      HTML;
   }





   public function AdditionalTools() {
      return <<<HTML
         <!-- Additional Tools Section -->
         <section class="py-12 bg-gray-50">
            <div class="container mx-auto px-4">
               <h2 class="text-3xl font-bold mb-8 text-center">More Trading Tools</h2>

               <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                  <div class="bg-white rounded-lg shadow-md p-6 tool-card transition-all duration-300">
                     <div class="text-3xl text-indigo-600 mb-4">
                        <i class="fas fa-percentage"></i>
                     </div>
                     <h3 class="font-bold text-xl mb-2">Profit Calculator</h3>
                     <p class="text-gray-600 mb-4">Calculate potential profits based on entry/exit prices and position size.</p>
                     <Component.Link class="text-indigo-600 font-medium hover:underline">Coming Soon →</Component.Link>
                  </div>

                  <div class="bg-white rounded-lg shadow-md p-6 tool-card transition-all duration-300">
                     <div class="text-3xl text-indigo-600 mb-4">
                        <i class="fas fa-exchange-alt"></i>
                     </div>
                     <h3 class="font-bold text-xl mb-2">Currency Converter</h3>
                     <p class="text-gray-600 mb-4">Convert between currencies using current or historical exchange rates.</p>
                     <Component.Link class="text-indigo-600 font-medium hover:underline">Coming Soon →</Component.Link>
                  </div>

                  <div class="bg-white rounded-lg shadow-md p-6 tool-card transition-all duration-300">
                     <div class="text-3xl text-indigo-600 mb-4">
                        <i class="fas fa-chart-bar"></i>
                     </div>
                     <h3 class="font-bold text-xl mb-2">Pivot Point Calculator</h3>
                     <p class="text-gray-600 mb-4">Calculate daily pivot points and support/resistance levels.</p>
                     <Component.Link class="text-indigo-600 font-medium hover:underline">Coming Soon →</Component.Link>
                  </div>
               </div>
            </div>
         </section>
      HTML;
   }
}