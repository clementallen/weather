<?php

include( 'assets/weatherdata.php');

?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="description" content="Gliding, Soaring and Aviation Weather webcams, synoptics, charts, graphics, links, metars and more.  Used by the London Gliding Club" />
    <meta name="author" content="Clement Allen" />

    <title>Gliding Weather</title>

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

                <ul class="nav navbar-nav large-screen-menu">
                    <li id="webcam-link" class="navlink"><a href="webcams/">Webcams</a></li>
                    <li id="links-link" class="navlink"><a href="links/">Links</a></li>
                    <li id="lgcweather-link" class="navlink"><a href="lgc/">LGC weather</a></li>
                    <li id="rasp-link" class="navlink"><a href="rasp/">RASP</a></li>
                    <li id="charts-link" class="navlink"><a href="charts/">Charts</a></li>
                    <li id="synoptics-link" class="navlink"><a href="synoptics/">Synoptics</a></li>
                    <li id="metars-link" class="navlink"><a href="metars/">METARS</a></li>
                    <li id="visitorcentre-link" class="navlink"><a href="visitorcentre/">Visitor Centre</a></li>
                </ul>

                <ul class="nav navbar-nav small-screen-menu">
                    <li id="webcam-link" class="navlink"><a href="webcams/">Webcams</a></li>
                    <li id="links-link" class="navlink"><a href="links/">Links</a></li>
                    <li id="lgcweather-link" class="navlink"><a href="lgc/">LGC weather</a></li>
                    <li id="rasp-link" class="navlink"><a href="rasp/">RASP</a></li>
                    <li id="charts-link" class="navlink"><a href="charts/">Charts</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li id="synoptics-link" class="navlink"><a href="synoptics/">Synoptics</a></li>
                                <li id="metars-link" class="navlink"><a href="metars/">METARS</a></li>
                                <li id="visitorcentre-link" class="navlink"><a href="visitorcentre/">Visitor Centre</a></li>
                            </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li id="about-link" class="navlink"><a href="about/">About</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>



        <!-- content -->

        <div class="col-md-4 col-sm-12">
            <a href="webcams/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>Webcams</h2>
                    <p>Webcams from gliding clubs country-wide</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6">
            <a href="links/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>Links</h2>
                    <p>Useful links to external weather sites</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6">
            <a href="lgc/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>LGC Weather</h2>
                    <p>London Gliding Club's daily weather forecast</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6">
            <a href="rasp/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>RASP</h2>
                    <p>RASP daily forecast diagrams</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6">
            <a href="charts/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>Charts</h2>
                    <p>Rain, wind and cloud charts</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6">
            <a href="synoptics/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>Synoptics</h2>
                    <p>Met Office Synoptic charts including rainfall</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6">
            <a href="metars/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>METARS</h2>
                    <p>METARS and TAFS from around the country</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6">
            <a href="visitorcentre/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>Visitor Centre</h2>
                    <p>Live weather from Dunstable Hill Visitor Centre</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6">
            <a href="about/" class="welcome-link">
                <div class="panel panel-default">
                    <h2>About</h2>
                    <p>Stalk me!</p>
                </div>
            </a>
        </div>

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
