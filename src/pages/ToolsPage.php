<?php

use phpSPA\Component;

require_once 'components/Footer.php';
require_once 'components/ToolsPageComponent.php';
require_once 'components/sections/ToolsHeroSection.php';

return (new Component(fn () => <<<HTML
   <ToolsHeroSection />
   <ToolsPageComponent />
   <FooterComponent />
HTML))
   ->route('/tools')
   ->title('Trading Tools | PIP Galaxy')
   ->styleSheet(require 'assets/styles/ToolsStyle.php');