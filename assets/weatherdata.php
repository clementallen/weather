<?php

// Website version number
$siteVersion = '2.3.2';


// Extremely messy way to highlight active page!  Will be streamlined shortly
$url = $_SERVER['REQUEST_URI'];

if (strpos($url,'webcams') !== false) {
  $webcamsActive = ' active';
  $title = 'Webcams';

} elseif (strpos($url,'lgc') !== false) {
  $lgcActive = ' active';
  $title = 'LGC';

} elseif (strpos($url,'rasp') !== false) {
  $raspActive = ' active';
  $title = 'Rasp';

} elseif (strpos($url,'charts') !== false) {
  $chartsActive = ' active';
  $title = 'Charts';

} elseif (strpos($url,'synoptics') !== false) {
  $synopticsActive = ' active';
  $title = 'Synoptics';

} elseif (strpos($url,'metars') !== false) {
  $metarsActive = ' active';
  $title = 'Metars';

} elseif (strpos($url,'visitorcentre') !== false) {
  $visitorCentreActive = ' active';
  $title = 'Visitor Centre';

} elseif (strpos($url,'about') !== false) {
  $aboutActive = ' active';
  $title = 'About';
}


// Synoptics header calculators
date_default_timezone_set('UTC');

$oneDay = Date('l', strtotime('+1 days'));
$twoDay = Date('l', strtotime('+2 days'));
$threeDay = Date('l', strtotime('+3 days'));
$fourDay = Date('l', strtotime('+4 days'));

?>
