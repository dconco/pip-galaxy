<?php

use phpSPA\Component;

require_once 'components/Footer.php';
require_once 'components/NewsletterComponent.php';
require_once 'components/sections/AnalysisHeroSection.php';
require_once 'components/analysis/AnalysisIndexComponents.php';

return (new Component(fn() => <<<HTML
   <AnalysisHeroSection />
   <AnalysisIndexComponents />
   <NewsletterComponent />
   <FooterComponent />
HTML))
   ->route('/analysis')
   ->title('Market Analysis | Pip Galaxy')
   ->styleSheet(require 'assets/styles/AnalysisStyle.php');
