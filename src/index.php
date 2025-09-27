<?php

require_once 'config/env.php';

use phpSPA\App;

(new App(require 'layout/Layout.php'))
   ->attach(require 'pages/HomePage.php')
   ->attach(require 'pages/NewsPage.php')
   ->attach(require 'pages/analysis/Index.php')

   ->script(require 'assets/scripts/GlobalScript.php')
   ->styleSheet(require 'assets/styles/MainStyle.php')
   ->defaultTargetID('app')
   ->run();

// --- NOT FOUND ---
echo "<h2 style='padding: 20px;'>Page Not Found</h2>";
