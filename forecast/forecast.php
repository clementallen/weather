<?php

$pageCounter = 'GW - Forecast';
$pageName = 'Forecast';

include('../_layout/header.php');
include('../assets/forecastio.php');
include('config.php');

$api_key = $config['api_key'];
$latitude = '51.7491866';
$longitude = '-0.3239531';

function bearingToCompass($degrees) {
    $compass =
    array("N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW");

    $compcount = round($degrees / 22.5);
    $compdir = $compass[$compcount];

    return $compdir;
}

$forecast = new ForecastIO($api_key);

$condition = $forecast->getCurrentConditions($latitude, $longitude);

$currentTemperature = round($condition->getTemperature(), 1) . '&deg;C';
$currentApparentTemperature = round($condition->getApparentTemperature(), 1) . '&deg;C';

$currentWindSpeed = round($condition->getWindSpeed()) . '&nbsp;km/h';
$currentWindBearing = $condition->getWindBearing() . '&deg;';
$currentCompassWindDirection = bearingToCompass($currentWindBearing);

?>


<div class="col-md-4">
    <div class="panel panel-default panel-forecast">
        <p class="lead">Temperatures</p>
        <p>Current: <?php echo $currentTemperature; ?></p>
        <p>Apparent: <?php echo $currentApparentTemperature; ?></p>
    </div>
</div>

<div class="col-md-4">
    <div class="panel panel-default panel-forecast">
        <p class="lead">Wind</p>
        <p>Speed: <?php echo $currentWindSpeed; ?></p>
        <p>Bearing: <?php echo $currentWindBearing; ?></p>
        <p>Compass Direction: <?php echo $currentCompassWindDirection; ?></p>
    </div>
</div>

<?php

include('../_layout/footer.php');

?>