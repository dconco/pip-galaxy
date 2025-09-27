<?php

use phpSPA\Component;

require_once 'components/Footer.php';
require_once 'components/sections/LearnHeroSection.php';
require_once 'components/learn/LearnIndexComponents.php';

return (new Component(fn() => <<<HTML
   <LearnHeroSection />
   <LearnIndexComponents />
   <FooterComponent />
HTML))
   ->route('/learn')
   ->title('Learn Trading | Pip Galaxy')
   ->styleSheet(require 'assets/styles/LearnStyle.php');
