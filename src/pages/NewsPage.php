<?php

use phpSPA\Component;

require_once 'components/Header.php';
require_once 'components/Footer.php';
require_once 'components/NewsPageComponents.php';

return (new Component(fn() => <<<HTML
   <HeaderComponent />
   <NewsPageComponents />
   <FooterComponent />
HTML))
   ->title('Market News | PIP Galaxy')
   ->route('/news');
