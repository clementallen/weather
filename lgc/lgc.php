<?php

$pageCounter = 'GW - LGC';
$pageName = 'LGC&nbsp;Weather';

include('../_layout/header.php');

?>

        <!-- LGC Weather forecast ======================================================= -->
        <div class="row" id="lgcweather-page">

            <div class="col-md-12">
                <div class="panel panel-default lgc-weather">

                    <iframe src="http://www.instructor.andrewroch.co.uk/weather.htm" style="border:0px #FFFFFF none;" name="lgcweather" scrolling="yes" frameborder="0" marginheight="0px" marginwidth="0px" height="100%" width="100%"></iframe>

                </div>
            </div>

        </div>

<?php

include('../_layout/footer.php');

?>
