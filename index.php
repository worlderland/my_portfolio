<?php
$pageTitle = 'A.C. | Home';
//The following include brings in doctype, html tag, head and start body tag
include 'template-parts/general/head-start-body.php';
echo $docType;
echo $headStartBody;
//The following include brings in top progress bar
include 'template-parts/content/progress-bar.php';
echo $progressBar;
  '<div class="page">';
    //The following include brings in the navigation menu
    include 'template-parts/nav/nav.php';
    echo $nav;
    '<div id="colorlib-page">';
      //The following include brings in the header (name and hamburger icon)
      include 'template-parts/general/header.php';
      echo $header;
      //The following includes bring in the page content
      include 'content/home-page/slider.html';
      include 'content/home-page/about-section.html';
      include 'content/home-page/services-section.html';
      include 'content/home-page/portfolio-section.html';
      include 'content/home-page/counters-section.html';
      //The following include brings in the footer
      include 'template-parts/general/footer.php';
      echo $footer;
      //The following include brings in the loader
      include 'template-parts/content/loader.php';
      echo $loader;
    '</div>';

  '</div>';
//The following include brings in the scripts and closes body and html tag
include 'template-parts/general/scripts-end-body.php';
echo $scriptsEndBody;