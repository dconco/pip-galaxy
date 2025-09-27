<?php

use phpSPA\Component;

require_once 'components/Header.php';
require_once 'components/Footer.php';
require_once 'components/NewsPageComponents.php';
require_once 'components/NewsletterComponent.php';

return (new Component(fn () => <<<HTML
   <NewsPageComponents />
   <NewsletterComponent />
   <FooterComponent />
HTML))
   ->route('/news')
   ->title('Market News | PIP Galaxy');
