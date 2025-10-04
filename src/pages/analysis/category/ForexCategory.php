<?php

use phpSPA\Component;

require_once 'components/Footer.php';
require_once 'components/analysis/ForexCategoryComponents.php';
require_once 'components/sections/ForexCategoryHeroSection.php';

return (new Component(fn() => <<<HTML
   <ForexCategoryHeroSection />
   <ForexCategoryComponents />
   <FooterComponent />
HTML))
   ->route('/analysis/category/forex')
   ->title('Forex Market Analysis & Trading Insights | Pip Galaxy')
   ->styleSheet(require 'assets/styles/ForexCategoryStyle.php');