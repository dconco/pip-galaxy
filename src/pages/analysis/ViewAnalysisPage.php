<?php

use phpSPA\Component;

require_once 'components/Footer.php';
require_once 'components/HeaderComponent.php';
require_once 'components/NewsletterComponent.php';
require_once 'components/analysis/ViewAnalysisComponents.php';

return (new Component(fn() => <<<HTML
   <HeaderComponent active="analysis" />
   <ViewAnalysisComponents />
   <FooterComponent />
HTML))
   ->route('/analysis/view/{id}')
   ->title('View Analysis | Pip Galaxy')
   ->styleSheet(require 'assets/styles/ViewAnalysisStyle.php');