<?php
$pageTitle = 'A.C. | Blog Post';
include 'template-parts/general/head-start-body.php';
echo $docType;
echo $headStartBody;

include 'template-parts/content/progress-bar.php';
echo $progressBar;
  '<div class="page">';
    include 'template-parts/nav/nav.php';
    echo $nav;
    '<div id="colorlib-page">';
      include 'template-parts/general/header.php';
      echo $header;

      include 'content/blog-page/blog-single.html';
      
      include 'template-parts/general/footer.php';
      echo $footer;
      include 'template-parts/content/loader.php';
      echo $loader;
    '</div>';

  '</div>';

  include 'template-parts/general/scripts-end-body.php';
  echo $scriptsEndBody;