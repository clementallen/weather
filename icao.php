<?php

$JSONdatas = file_get_contents('assets/scity_airport_codes.json');
$ARRAYdatas = json_decode($JSONdatas);


$icao = $_GET['icao'];

$airports = array_filter($ARRAYdatas, function($item) use(&$icao) {
    return isset($item->icao_code) && $item->icao_code == $icao; 
});

$airport = array_pop($airports);
$airportName = $airport ? $airport->airport_name : '';

echo $airportName;

?>
