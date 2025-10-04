<?php

return fn () => <<<CSS
   .tool-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
   }

   input[type="range"] {
      appearance: none;
      -webkit-appearance: none;
      height: 6px;
      background: #e5e7eb;
      border-radius: 3px;
   }

   input[type="range"]::-webkit-slider-thumb {
      appearance: none;
      -webkit-appearance: none;
      width: 18px;
      height: 18px;
      background: #4f46e5;
      border-radius: 50%;
      cursor: pointer;
   }
CSS;