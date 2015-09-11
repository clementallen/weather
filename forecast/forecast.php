<?php

$pageCounter = 'GW - Forecast';
$pageName = 'Forecast';

include('../_layout/header.php');
include('../assets/forecastio.php');
include('ForecastClass.php');
include('config.php');

$api_key = $config['api_key'];
$latitude = '51.7491866';
$longitude = '-0.3239531';

$forecastIO = new ForecastIO($api_key);
$Forecast = new Forecast();

$condition = $forecastIO->getCurrentConditions($latitude, $longitude);

$currentTemperature = round($condition->getTemperature(), 1) . '&deg;C';
$currentApparentTemperature = round($condition->getApparentTemperature(), 1) . '&deg;C';

$currentWindSpeed = round($condition->getWindSpeed()) . '&nbsp;km/h';
$currentWindBearing = $condition->getWindBearing() . '&deg;';
$currentCompassWindDirection = $Forecast->bearingToCompass($currentWindBearing);

?>


            <div class="col-xs-12">
                <div class="panel panel-default panel-forecast">

                    <h1><a href="http://forecast.io">forecast.io</a> weather forecast</h1>

                    <div class="col-md-4">
                        <p class="lead">Temperature: <span><?php echo $currentTemperature;?></span></p>
                    </div>

                    <div class="col-md-4">
                        <p class="lead">Wind Speed: <span><?php echo $currentWindSpeed; ?></span></p>
                        <p class="lead">Wind Bearing: <span><?php echo $currentWindBearing; ?></span></p>
                        <p class="lead">Wind Compass Direction: <span><?php echo $currentCompassWindDirection; ?></span></p>
                    </div>

                    <div class="col-md-4">
                        <p class="lead">Wind Compass Direction: <span><?php echo $currentCompassWindDirection; ?></span></p>
                    </div>

                </div>
            </div>


<?php

include('../_layout/footer.php');

?>