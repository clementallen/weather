<?php

include( 'assets/weatherdata.php');

// Disables hitcounter when developing locally
if ( !isLocalhost() ) {
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
                <a class="navbar-brand navlink" href="">Gliding Weather</a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li id="webcam-link" class="navlink menu-clicker"><a href="webcams/">Webcams</a></li>
                    <li id="links-link" class="navlink menu-clicker"><a href="links/">Links</a></li>

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



        <!-- content -->
        <div class="alert alert-info re-design">
            <p>We've re-designed the home page!</p>
        </div>



        <!-- Only show if not developing locally -->
        <?php if ( !isLocalhost() ) { ?>
            <p class="lead" style="text-align:center">
                <?php echo 'This website has had ' . $totalhits . ' hits'; ?>
            </p>
        <?php } ?>

    </div><!-- /container -->

    <p class="version-no"><?php echo 'v' . $siteVersion; ?></p>

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
