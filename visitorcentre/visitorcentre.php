<?php

$page = 'GW - Visitor Centre';

include('../_layout/header.php');

?>

        <!-- Visitor Centre ======================================================= -->
        <div class="row" id="visitorcentre-page">
        
            <div class="col-md-12">
                <div class="panel panel-default">
                    <p class="lead small-screen-show">Sorry, your screen is too small to view this weather station :(</p>
                    <br />
                    <p class="lead flash-disabled-only">Flash must be enabled to view this page</p>
                    <iframe class="small-screen-hide" src="http://www.dunstablehpc.co.uk/images/weather/WxFlash/index.htm" style="border:0px #FFFFFF none;" name="Dunstable Visitor Center Weather Station" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="100%" width="100%"></iframe>
                </div>
            </div>
            
        </div>

<?php

include('../_layout/footer.php');

?>
