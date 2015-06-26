<?php

// Website version number
$siteVersion = '2.3.4';

function isLocalhost() {
    if($_SERVER['HTTP_HOST'] == 'localhost') {
        return true;
    } else {
        return false;
    }
}

// Extremely messy way to highlight active page!  Will be streamlined shortly
$url = $_SERVER['REQUEST_URI'];
$active = ' active';

if (strpos($url,'webcams')) {
    $webcamsActive = $active;
    $title = 'Webcams';

} elseif (strpos($url, 'links')){
    $linksActive = $active;
    $title = 'Links';

} elseif (strpos($url,'lgc')) {
    $lgcActive = $active;
    $title = 'LGC';

} elseif (strpos($url,'rasp')) {
    $raspActive = $active;
    $title = 'Rasp';

} elseif (strpos($url,'charts')) {
    $chartsActive = $active;
    $title = 'Charts';

} elseif (strpos($url,'synoptics')) {
    $synopticsActive = $active;
    $title = 'Synoptics';

} elseif (strpos($url,'metars')) {
    $metarsActive = $active;
    $title = 'Metars';

} elseif (strpos($url,'visitorcentre')) {
    $visitorCentreActive = $active;
    $title = 'Visitor Centre';

} elseif (strpos($url,'about')) {
    $aboutActive = $active;
    $title = 'About';
}


// Synoptics header calculators
date_default_timezone_set('UTC');

$oneDay = Date('l', strtotime('+1 days'));
$twoDay = Date('l', strtotime('+2 days'));
$threeDay = Date('l', strtotime('+3 days'));
$fourDay = Date('l', strtotime('+4 days'));

?>
