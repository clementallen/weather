<?php

$host = $_SERVER['SERVER_NAME'];

if($host == 'lgc.clementallen.com')
{
  $domainWarning = '<h4 class="alert alert-danger col-md-10 col-md-offset-1">Note:  The url you are viewing this site on is old!  Please update your bookmarks to <a href="http://weather.clementallen.com/">weather.clementallen.com</a></h4>';
}
else {
  $domainWarning = null;
}

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

date_default_timezone_set('Europe/London');

$oneDay = Date('l', strtotime('+1 days'));
$twoDay = Date('l', strtotime('+2 days'));
$threeDay = Date('l', strtotime('+3 days'));
$fourDay = Date('l', strtotime('+4 days'));

?>
