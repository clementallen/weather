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
} elseif ($url == '/lgc/') {
  $lgcActive = ' active';
} elseif ($url == '/rasp/') {
  $raspActive = ' active';
} elseif ($url == '/charts/') {
  $chartsActive = ' active';
} elseif ($url == '/synoptics/') {
  $synopticsActive = ' active';
} elseif ($url == '/metars/') {
  $metarsActive = ' active';
} elseif ($url == '/visitorcentre/') {
  $visitorCentreActive = ' active';
} elseif ($url == '/about/') {
  $aboutActive = ' active';
}


// Synoptics header calculators
date_default_timezone_set('Europe/London');

$oneDay = Date('l', strtotime('+1 days'));
$twoDay = Date('l', strtotime('+2 days'));
$threeDay = Date('l', strtotime('+3 days'));
$fourDay = Date('l', strtotime('+4 days'));

?>
