<?php

require_once 'config/env.php';

use phpSPA\App;

(new App(require 'layout/Layout.php'))
   ->attach(require 'pages/HomePage.php')
   ->attach(require 'pages/AboutPage.php')
   ->defaultTargetID('app')
   ->run();

