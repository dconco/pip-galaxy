<?php

return fn() => <<<CSS
   .article-content p {
      margin-bottom: 1.5rem;
      line-height: 1.7;
   }

   .article-content h2 {
      font-size: 1.5rem;
      font-weight: 700;
      margin: 2rem 0 1rem;
      color: #312e81;
   }

   .article-content ul {
      list-style-type: disc;
      margin-left: 1.5rem;
      margin-bottom: 1.5rem;
   }
CSS;