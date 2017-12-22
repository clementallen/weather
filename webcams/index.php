<?php
$pageName = 'Webcams';
include('../_layout/header.php');

$minutePastTen = substr(date('i'), 1);

if ($minutePastTen == 0) {
    $husbosWebcamTime = 8;
} else if ($minutePastTen == 1) {
    $husbosWebcamTime = 9;
} else {
    $husbosWebcamTime = $minutePastTen - 2;
}
?>

        <!-- Webcams ======================================================= -->
        <div class="row" id="webcam-page">

            <div class="col-md-4">
                <p class="lead webcam">London apron</p>
                <img src="http://www.londonglidingclub.co.uk/images/webcam_apron.jpg" class="img-responsive img-rounded" alt="London apron Webcam"/>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">London SW run</p>
                <img src="http://www.londonglidingclub.co.uk/images/webcam_swrun.jpg" class="img-responsive img-rounded" alt="London SW run Webcam"/>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Dunstable hill</p>
                <img height="480" width="640" src="http://dunstablehpc.co.uk/images/weather/dunnycam.jpg" class="img-responsive img-rounded" alt="Dunstable hill Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Parham North</p>
                <img height="720" width="1280" src="http://jptuk.com/webc/north.jpg" class="img-responsive img-rounded" alt="Parham North Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Parham West</p>
                <img height="720" width="1280" src="http://jptuk.com/webc/west.jpg" class="img-responsive img-rounded" alt="Parham West Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Cambridge SSW</p>
                <img src="http://members.camgliding.uk/volatile/camsouth.jpg" class="img-responsive img-rounded" alt="Cambridge SSW Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Cambridge WSW</p>
                <img src="http://members.camgliding.uk/volatile/camwest.jpg" class="img-responsive img-rounded" alt="Cambridge WSW Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Nympsfield South West</p>
                <img src="http://bggc.co.uk/bggc-images/webcam/LiveImage1.jpg" class="img-responsive img-rounded" alt="Nympsfield South West Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Nympsfield South East</p>
                <img src="http://bggc.co.uk/bggc-images/webcam/LiveImage2.jpg" class="img-responsive img-rounded" alt="Nympsfield South East Webcam"/>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Yorkshire South</p>
                <img height="480" width="640" src="http://www.ygc.co.uk/webcam/CameraSouth_1.jpg" class="img-responsive img-rounded" alt="Yorkshire South Webcam"/>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Long Mynd North</p>
                <img height="480" width="640" src="http://www.myndcam.com/LMSC.jpg" class="img-responsive img-rounded" alt="Long Mynd North Webcam"/>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Long Mynd West</p>
                <img height="480" width="640" src="http://www.myndcam.com/west.jpg" class="img-responsive img-rounded" alt="Long Mynd West Webcam"/>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Talgarth West</p>
                <img src="http://217.41.66.17:81/SnapshotJPEG?Resolution=640x480" class="img-responsive img-rounded" alt="Talgarth West Webcam"/>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Talgarth North</p>
                <img src="http://217.41.66.17:82/SnapshotJPEG?Resolution=640x480" class="img-responsive img-rounded" alt="Talgarth North Webcam"/>
            </div>

            <div class="col-md-4">
                <p class="lead webcam">Talgarth East</p>
                <img src="http://www.blackmountainsgliding.co.uk/weather/webcamneweast-sm.jpg" class="img-responsive img-rounded" alt="Talgarth East Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">HusBos West</p>
                <img src="http://webcam.theglidingcentre.co.uk/picam/1/picam01_<?php echo $husbosWebcamTime ?>.jpg" class="img-responsive img-rounded" alt="HusBos West Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">HusBos South</p>
                <img src="http://webcam.theglidingcentre.co.uk/picam/2/picam02_<?php echo $husbosWebcamTime ?>.jpg" class="img-responsive img-rounded" alt="HusBos South Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Wormingford South</p>
                <img src="http://sloppydog.co.uk/esgc/Cam1.jpg" class="img-responsive img-rounded" alt="Wormingford South Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Wormingford West</p>
                <img src="http://sloppydog.co.uk/esgc/Cam2.jpg" class="img-responsive img-rounded" alt="Wormingford West Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Portmoak North</p>
                <img src="http://www.scottishglidingcentre.com/weather/webcam/arch01.jpg" class="img-responsive img-rounded" alt="Cotswold North Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">Rattlesden West</p>
                <img src="http://ratair.stratus.org.uk/wc/cam1.jpg" class="img-responsive img-rounded" alt="Rattlesden West Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">South Wales West</p>
                <img src="http://www.uskgc.co.uk/new/wp-content/uploads/Westcam1.jpg" class="img-responsive img-rounded" alt="South Wales West Webcam"/>
            </div>

            <div class="col-md-6">
                <p class="lead webcam">South Wales East</p>
                <img src="http://www.uskgc.co.uk/new/wp-content/uploads/Eastcam1.jpg" class="img-responsive img-rounded" alt="South Wales East Webcam"/>
            </div>

        </div>

<?php
include('../_layout/footer.php');
?>
