<?php

use phpSPA\Component;

require_once 'components/Footer.php';
require_once 'components/analysis/CryptoCategoryComponents.php';
require_once 'components/sections/CryptoCategoryHeroSection.php';

return (new Component(fn() => <<<HTML
   <CryptoCategoryHeroSection />
   <CryptoCategoryComponents />
   <FooterComponent />
HTML))
   ->route('/analysis/category/crypto')
   ->title('Crypto Market Analysis & Insights | Pip Galaxy')
   ->styleSheet(require 'assets/styles/CryptoCategoryStyle.php');