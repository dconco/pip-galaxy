<?php

use phpSPA\App;

(new App(require 'layout/Layout.php'))
   ->attach(require 'pages/HomePage.php')
   ->attach(require 'pages/NewsPage.php')
   ->attach(require 'pages/ToolsPage.php')
   ->attach(require 'pages/learn/LearnPage.php')

   /** Analysis Pages */
   ->attach(require 'pages/analysis/AnalysisPage.php')
   ->attach(require 'pages/analysis/ViewAnalysisPage.php')
   ->attach(require 'pages/analysis/category/CryptoCategory.php')
   ->attach(require 'pages/analysis/category/ForexCategory.php')

   /** Global Assets */
   ->script(require 'assets/scripts/GlobalScript.php')
   ->styleSheet(require 'assets/styles/MainStyle.php')

   ->defaultTargetID('app')
   ->run();

// --- NOT FOUND ---
echo "<h2 style='padding: 20px;'>Page Not Found</h2>";
