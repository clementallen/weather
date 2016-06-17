<?php
$pageName = 'Synoptics';
include('../_layout/header.php');
?>

        <!-- Synoptics ======================================================= -->
        <div class="row" id="synoptics-page">

            <div class="col-md-4">
                <p class="lead webcam">Fronts and Rain for Today</p>
                <a target="_blank" href="http://www.weatherweb.net/tvweather/pres1.gif">
                <img src="http://www.weatherweb.net/tvweather/pres1.gif" class="img-responsive img-rounded" alt="Fronts and Rain Today"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Fronts and Rain for <?php echo $oneDayAhead; ?></p>
                <a target="_blank" href="http://www.weatherweb.net/tvweather/pres2.gif">
                <img src="http://www.weatherweb.net/tvweather/pres2.gif" class="img-responsive img-rounded" alt="Fronts and Rain +24"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Fronts and Rain for <?php echo $twoDaysAhead; ?></p>
                <a target="_blank" href="http://www.weatherweb.net/tvweather/pres3.gif">
                <img src="http://www.weatherweb.net/tvweather/pres3.gif" class="img-responsive img-rounded" alt="Fronts and Rain +48"/></a>
            </div>

            <div class="col-md-4 col-md-offset-2">
                <p class="lead webcam">Fronts and Rain for <?php echo $threeDaysAhead; ?></p>
                <a target="_blank" href="http://www.weatherweb.net/tvweather/pres4.gif">
                <img src="http://www.weatherweb.net/tvweather/pres4.gif" class="img-responsive img-rounded" alt="Fronts and Rain +72"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Fronts and Rain for <?php echo $fourDaysAhead; ?></p>
                <a target="_blank" href="http://www.weatherweb.net/tvweather/pres5.gif">
                <img src="http://www.weatherweb.net/tvweather/pres5.gif" class="img-responsive img-rounded" alt="Fronts and Rain +96"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Synoptics Today</p>
                <a target="_blank" href="http://www2.wetter3.de/Fax/00_UKMet_Boden+00.gif">
                <img src="http://www2.wetter3.de/Fax/00_UKMet_Boden+00.gif" class="img-responsive img-rounded" alt="Synoptics Today"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Synoptics for <?php echo $oneDayAhead; ?></p>
                <a target="_blank" href="http://www2.wetter3.de/Fax/00_UKMet_Boden+24.gif">
                <img src="http://www2.wetter3.de/Fax/00_UKMet_Boden+24.gif" class="img-responsive img-rounded" alt="Synoptics +24"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Synoptics for <?php echo $oneDayAhead; ?> +12</p>
                <a target="_blank" href="http://www2.wetter3.de/Fax/00_UKMet_Boden+36.gif">
                <img src="http://www2.wetter3.de/Fax/00_UKMet_Boden+36.gif" class="img-responsive img-rounded" alt="Synoptics +36"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Synoptics for <?php echo $twoDaysAhead; ?></p>
                <a target="_blank" href="http://www2.wetter3.de/Fax/00_UKMet_Boden+48.gif">
                <img src="http://www2.wetter3.de/Fax/00_UKMet_Boden+48.gif" class="img-responsive img-rounded" alt="Synoptics +48"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Synoptics for <?php echo $twoDaysAhead; ?> +12</p>
                <a target="_blank" href="http://www2.wetter3.de/Fax/00_UKMet_Boden+60.gif">
                <img src="http://www2.wetter3.de/Fax/00_UKMet_Boden+60.gif" class="img-responsive img-rounded" alt="Synoptics +60"/></a>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Synoptics for <?php echo $threeDaysAhead; ?></p>
                <a target="_blank" href="http://www2.wetter3.de/Fax/00_UKMet_Boden+72.gif">
                <img src="http://www2.wetter3.de/Fax/00_UKMet_Boden+72.gif" class="img-responsive img-rounded" alt="Synoptics +72"/></a>
            </div>

        </div>

<?php
include('../_layout/footer.php');
?>
