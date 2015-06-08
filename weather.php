<?php

include( 'assets/weatherdata.php');

// Disables hitcounter when developing locally
if ($_SERVER['HTTP_HOST'] != 'localhost') {
    include( 'assets/hitcounter/counter.php');
    include( 'assets/hitcounter/display.php');
    $page = 'GW - Home';
    addinfo($page);
}

?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="refresh" content="300"><!-- Refreshes page every 5 minutes to see latest info -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="description" content="Gliding, Soaring and Aviation Weather synoptics, charts, graphics, links, metars and more.  Used by the London Gliding Club" />
    <meta name="author" content="Clement Allen" />

    <title>Gliding, Soaring and Aviation Weather</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/weather.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="container">

        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
                <a class="navbar-brand navlink" style="border-right: 2px solid #e7e7e7" href="">Gliding Weather</a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li id="webcam-link" class="navlink menu-clicker"><a href="webcams/">Webcams</a></li>

                    <ul class="nav navbar-nav small-screen-menu">
                    <li id="lgcweather-link" class="navlink menu-clicker"><a href="lgc/">LGC</a></li>
                    <li id="rasp-link" class="navlink menu-clicker"><a href="rasp/">RASP</a></li>
                    <li id="charts-link" class="navlink menu-clicker"><a href="charts/">Charts</a></li>
                    <li id="synoptics-link" class="navlink menu-clicker"><a href="synoptics/">Synoptics</a></li>
                    <li id="metars-link" class="navlink menu-clicker"><a href="metars/">METARS</a></li>
                    <li id="visitorcentre-link" class="navlink menu-clicker"><a href="visitorcentre/">Visitor Centre</a></li>
                    </ul>
                </ul>

                <ul class="nav navbar-nav large-screen-menu">
                    <li class="dropdown large-screen-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Weather<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            <li id="lgcweather-link" class="navlink menu-clicker"><a href="lgc/">LGC weather</a></li>
                            <li id="rasp-link" class="navlink menu-clicker"><a href="rasp/">RASP</a></li>
                            <li id="charts-link" class="navlink menu-clicker"><a href="charts/">Charts</a></li>
                            <li id="synoptics-link" class="navlink menu-clicker"><a href="synoptics/">Synoptics</a></li>
                            <li id="metars-link" class="navlink menu-clicker"><a href="metars/">METARS</a></li>
                            <li id="visitorcentre-link" class="navlink menu-clicker"><a href="visitorcentre/">Visitor Centre</a></li>
                            </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li id="about-link" class="navlink menu-clicker"><a href="about/">About</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>


        <!-- Home page ======================================================= -->
        <div class="row" id="home-page">

            <div class="col-md-4">
                <div class="panel panel-default">
                    <h1>Soundings</h1>

                    <p class="lead">

                        <a href="http://www-frd.fsl.noaa.gov/mab/soundings/java/" target="_blank">NOAA DIY</a><br />
                        <a href="http://ready.arl.noaa.gov/READYcmet.php" target="_blank">NOAA Forecast</a><br />
                        <a href="http://weather.uwyo.edu/upperair/sounding.html" target="_blank">University of Wyoming (Global)</a><br />

                    </p>
                    <br />
                    <h1>Sat Pics</h1>

                    <p class="lead">

                        <a href="http://www.sat24.com/en/gb" target="_blank">Sat 24 UK</a><br />
                        <a href="http://www.sat24.com/eu" target="_blank">Sat 24 Europe</a><br />
                        <a href="http://wwwghcc.msfc.nasa.gov/GOES/globalir.html" target="_blank">NOAA whole world</a><br />
                        <a href="http://www.metoffice.gov.uk/public/weather/observation/map/#?map=SatelliteIR&fcTime=1424251800&zoom=5&lon=1.35&lat=53.60" target="_blank">Met Office latest IR</a><br />
                        <a href="http://www.weatheronline.co.uk/ukuksat.htm" target="_blank">Weather Online UK</a><br />

                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <h1>Actuals</h1>

                    <p class="lead">

                        <a href="http://www.lfv.se/MetInfo.asp?TextFile=metar.eg.list.txt&TextFile=metar.ed.list.txt&TextFile=metar.benelux.list.txt&TextFile=metar.alps.list.txt&TextFile=metar.lf.list.txt&TextFile=metar.le.list.txt&TextFile=metar.lp.list.txt&TextFile=metar.li.list.txt&TextFile=metar.baltic.list.txt&TextFile=metar.others.list.txt&SubTitle=United%A0Kingdom&Subtitle=Germany&Subtitle=Benelux&Subtitle=Austria,%A0Switzerland&Subtitle=France&Subtitle=Spain&Subtitle=Portugal&Subtitle=Italy&Subtitle=Baltic&Subtitle=Other%A0Countries&T=METAR%A0Europe&Frequency=30" target="_blank">METARS</a><br />
                        <a href="http://weatherobs.com/" target="_blank">Weather Obs</a><br />
                        <a href="http://www.xcweather.co.uk/" target="_blank">XC Weather</a><br />

                    </p>
                    <br />
                    <h1>Synoptics</h1>

                    <p class="lead">

                        <a href="http://www.ecmwf.int/en/forecasts/charts/medium/mean-sea-level-pressure-wind-speed-850-hpa-and-geopotential-500-hpa?area=Europe&step=96&relative_archive_date=2014100700&parameter=Wind%20850%20and%20mslp" target="_blank">ECMWF long range</a><br />
                        <a href="http://www.weathercharts.org/ukmomslp.htm" target="_blank">Met Office Synoptics 1</a><br />
                        <a href="http://www.westwind.ch/?link=ukmb,http://www2.wetter3.de/Fax/,.gif,bracknell%2B00,bracknell%2B24,bracknell%2B36,bracknell%2B48,bracknell%2B60,bracknell%2B72,bracknell%2B84,bracknell%2B96,bracknell%2B108,bracknell%2B120,bracknell%2B132" target="_blank">Met Office Synoptics 2</a><br />

                    </p>
                    <br />
                    <h1>Radar</h1>

                    <p class="lead">

                        <a href="http://www.metoffice.gov.uk/public/weather/observation/map/#?map=Rainfall&zoom=5&lon=-4.00&lat=55.01&fcTime=1424251800" target="_blank">Met Office latest rainfall</a><br />
                        <a href="http://www.raintoday.co.uk/" target="_blank">Rain Today</a><br />

                    </p>

                </div>

            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <h1>Gliding Weather</h1>

                    <p class="lead">

                        <a href="http://rasp.inn.leedsmet.ac.uk/RASPtableGM/RASPtableGM.html" target="_blank">RASP Blipmap</a><br />
                        <a href="http://www.topmeteo.eu/weather/gliding!charts" target="_blank">Top Meteo</a><br />
                        <a href="http://www.lashamweather.co.uk/" target="_blank">Lasham Weather</a><br />
                        <a href="http://www.instructor.andrewroch.co.uk/weather.htm" target="_blank">LGC Weather</a><br />

                    </p>
                    <br />
                    <h1>Other Sites</h1>

                    <p class="lead">

                        <a href="https://www.metcheck.com/UK/" target="_blank">Met Check</a><br />
                        <a href="http://www.netweather.tv/" target="_blank">Net Weather</a><br />
                        <a href="http://www.weatheronline.co.uk/cgi-bin/expertcharts?CONT=ukuk&MODELL=gfs&MODELLTYP=1&VAR=pslv&INFO=1" target="_blank">Weather Online pressures</a><br />
                        <a href="http://www.weathercommerce.net/realtime.aspx" target="_blank">Metra Weather</a><br />

                    </p>

                </div>
            </div>

        </div>

        <!-- Only show if not developing locally -->
        <?php if ($_SERVER['HTTP_HOST'] != 'localhost') { ?>
            <p class="lead" style="text-align:center">
                <?php echo 'This website has had ' . $totalhits . ' hits'; ?>
            </p>
        <?php } ?>

    </div><!-- /container -->

    <script src="assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/flash_detect.min.js" type="text/javascript"></script>
    <script src="assets/js/weather.min.js" type="text/javascript"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-56060801-2', 'auto');
        ga('require', 'linkid', 'linkid.js');
        ga('send', 'pageview');

    </script>

</body>

</html>
