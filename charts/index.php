<?php
$pageName = 'Charts';
include('../_layout/header.php');
?>

        <!-- Charts ======================================================= -->
        <div class="row" id="charts-page">

            <div class="col-md-6 col-md-offset-3">
                <p class="lead webcam">Week Forecast</p>
                <a target="_blank" href="https://www.meteoblue.com/meteogram-web?lon=-0.116667&lat=51.5&asl=10&tz=Europe_London&lang=en&look=CELSIUS,MILE_PER_HOUR">
                <img src="https://www.meteoblue.com/meteogram-web?lon=-0.116667&lat=51.5&asl=10&tz=Europe_London&lang=en&look=CELSIUS,MILE_PER_HOUR" class="img-responsive img-rounded" alt="7 day forecast"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Austria IFR</p>
                <a target="_blank" href="http://www.zamg.ac.at/dyn/pictures/sat.gif">
                <img src="http://www.zamg.ac.at/dyn/pictures/sat.gif" class="img-responsive img-rounded" alt="Austria IFR"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Live Rainfall</p>
                <iframe src="http://maps.meteoradar.co.uk/GratisRadar/835/902/actueel?zoom=8" scrolling=no width="100%" height=300 frameborder=no></iframe>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Cloud Cover</p>
                <a target="_blank" href="http://www.sat24.com/image.ashx?country=gb&type=zoom&format=640x480001001&rnd=610703">
                <img src="http://www.sat24.com/image.ashx?country=gb&type=zoom&format=640x480001001&rnd=610703" class="img-responsive img-rounded" alt="Cloud Cover"/></a>
            </div>

            <div class="col-md-12 js-only">
                <iframe id="forecast_embed" type="text/html" frameborder="0" height="250" width="100%" src="http://forecast.io/embed/#lat=51.871498&lon=-0.547276&color=#00aaff&name=Dunstable&units=uk"></iframe>
            </div>

            <div class="col-md-12 js-only">
                <p class="lead">Windy TY</p>
                <iframe width="100%" height="500" src="https://embed.windy.com/embed2.html?lat=51.750&lon=-0.333&zoom=5&level=surface&overlay=wind&menu=&message=&marker=&forecast=12&calendar=now&location=ip&type=map&actualGrid=&metricWind=kt&metricTemp=%C2%B0C" frameborder="0"></iframe>
            </div>

        </div>

<?php

include('../_layout/footer.php');

?>
