<?php

require_once 'config/env.php';

use phpSPA\App;

(new App(require 'layout/Layout.php'))
   ->attach(require 'pages/HomePage.php')

   ->script(require 'scripts/GlobalScript.php')
   ->defaultTargetID('app')
   ->run();

// --- NOT FOUND ---
echo "<h2 style='padding: 20px;'>Page Not Found</h2>";
