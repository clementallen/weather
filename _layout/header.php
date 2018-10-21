<?php
include( '../assets/weatherdata.php');
?>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../favicon.ico" />
    <meta name="description" content="Gliding, Soaring and Aviation Weather webcams, synoptics, charts, graphics, links, metars and more.  Used by the London Gliding Club" />
    <meta name="author" content="Clement Allen" />

    <title>Gliding Weather | <?php echo $pageName; ?></title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/weather.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="container">

        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
                <a class="navbar-brand navlink" href="../">Gliding Weather</a>
                <p class="page-name"><?php echo $pageName ?></p>
            </div>

            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav large-screen-menu">
                    <li id="webcam-link" class="navlink<"><a href="../webcams">Webcams</a></li>
                    <li id="links-link" class="navlink"><a href="../links">Links</a></li>
                    <li id="lgcweather-link" class="navlink"><a href="../lgc">LGC weather</a></li>
                    <li id="rasp-link" class="navlink"><a href="../rasp">RASP</a></li>
                    <li id="charts-link" class="navlink"><a href="../charts">Charts</a></li>
                    <li id="synoptics-link" class="navlink"><a href="../synoptics">Synoptics</a></li>
                    <li id="metars-link" class="navlink"><a href="../metars">METARS</a></li>
                    <li id="visitorcentre-link" class="navlink"><a href="../visitorcentre">Visitor Centre</a></li>
                </ul>

                <ul class="nav navbar-nav small-screen-menu">
                    <li id="webcam-link" class="navlink"><a href="../webcams">Webcams</a></li>
                    <li id="links-link" class="navlink"><a href="../links">Links</a></li>
                    <li id="lgcweather-link" class="navlink"><a href="../lgc">LGC weather</a></li>
                    <li id="rasp-link" class="navlink"><a href="../rasp">RASP</a></li>
                    <li id="charts-link" class="navlink"><a href="../charts">Charts</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li id="synoptics-link" class="navlink"><a href="../synoptics">Synoptics</a></li>
                                <li id="metars-link" class="navlink"><a href="../metars">METARS</a></li>
                                <li id="visitorcentre-link" class="navlink"><a href="../visitorcentre">Visitor Centre</a></li>
                            </ul>
                    </li>
                </ul>
            </div>
        </div>

<!-- Page Content ======================================================= -->
