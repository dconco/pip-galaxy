<?php

use phpSPA\Component;

require_once 'components/Footer.php';
require_once 'components/HomeHeroSection.php';
require_once 'components/HomePageComponents.php';

return (new Component(fn() => <<<HTML
   <HomeHeroSection />
   <HomePageComponents />
   <FooterComponent />
HTML))
   ->route('/')
   ->title('Pip Galaxy | Market Insights & Trading Strategies')
   ->script(require 'scripts/HomeScript.php');
