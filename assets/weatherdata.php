<?php

// Extremely messy way to highlight active page!  Will be streamlined shortly
$url = $_SERVER['REQUEST_URI'];

$webcamsActive = null;
$lgcActive = null;
$raspActive = null;
$chartsActive = null;
$synopticsActive = null;
$metarsActive = null;
$visitorCentreActive = null;
$aboutActive = null;

if ($url == '/webcams/') {
  $webcamsActive = ' active';
  $title = 'Webcams';
} elseif ($url == '/lgc/') {
  $lgcActive = ' active';
  $title = 'LGC';
} elseif ($url == '/rasp/') {
  $raspActive = ' active';
  $title = 'Rasp';
} elseif ($url == '/charts/') {
  $chartsActive = ' active';
  $title = 'Charts';
} elseif ($url == '/synoptics/') {
  $synopticsActive = ' active';
  $title = 'Synoptics';
} elseif ($url == '/metars/') {
  $metarsActive = ' active';
  $title = 'Metars';
} elseif ($url == '/visitorcentre/') {
  $visitorCentreActive = ' active';
  $title = 'Visitor Centre';
} elseif ($url == '/about/') {
  $aboutActive = ' active';
  $title = 'About';
}


// Synoptics header calculators
date_default_timezone_set('Europe/London');

$oneDay = Date('l', strtotime('+1 days'));
$twoDay = Date('l', strtotime('+2 days'));
$threeDay = Date('l', strtotime('+3 days'));
$fourDay = Date('l', strtotime('+4 days'));

?>
