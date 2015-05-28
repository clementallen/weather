<?php

include_once ( '../assets/weatherdata.php');

// Disables hitcounter when developing locally
if ($_SERVER['HTTP_HOST'] != 'localhost') {
    include_once ( '../assets/hitcounter/counter.php');
    include_once ( '../assets/hitcounter/display.php');
    $page = 'GW - Home';
    addinfo($page);
}

?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="refresh" content="300"> <!-- Refreshes page every 5 minutes to see latest info -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../favicon.ico" />
    <meta name="description" content="Gliding, Soaring and Aviation Weather synoptics, charts, graphics, links and more.  Used by the London Gliding Club" />
    <meta name="author" content="Clement Allen" />

    <title>Gliding, Soaring and Aviation Weather</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/weather.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="container">

        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
                <a class="navbar-brand navlink" style="border-right: 2px solid #e7e7e7" href="../">Gliding Weather</a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li id="webcam-link" class="navlink menu-clicker<?php echo $webcamsActive; ?>"><a href="../webcams">Webcams</a></li>

                    <ul class="nav navbar-nav small-screen-menu">
                    <li id="lgcweather-link" class="navlink menu-clicker<?php echo $lgcActive; ?>"><a href="../lgc">LGC</a></li>
                    <li id="rasp-link" class="navlink menu-clicker<?php echo $raspActive; ?>"><a href="../rasp">RASP</a></li>
                    <li id="charts-link" class="navlink menu-clicker<?php echo $chartsActive; ?>"><a href="../charts">Charts</a></li>
                    <li id="synoptics-link" class="navlink menu-clicker<?php echo $synopticsActive; ?>"><a href="../synoptics">Synoptics</a></li>
                    <li id="metars-link" class="navlink menu-clicker<?php echo $metarsActive; ?>"><a href="../metars">METARS</a></li>
                    <li id="visitorcentre-link" class="navlink menu-clicker<?php echo $visitorCentreActive; ?>"><a href="../visitorcentre">Visitor Centre</a></li>
                    </ul>
                </ul>

                <ul class="nav navbar-nav large-screen-menu">
                    <li class="dropdown large-screen-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Weather<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            <li id="lgcweather-link" class="navlink menu-clicker<?php echo $lgcActive; ?>"><a href="../lgc">LGC</a></li>
                            <li id="rasp-link" class="navlink menu-clicker<?php echo $raspActive; ?>"><a href="../rasp">RASP</a></li>
                            <li id="charts-link" class="navlink menu-clicker<?php echo $chartsActive; ?>"><a href="../charts">Charts</a></li>
                            <li id="synoptics-link" class="navlink menu-clicker<?php echo $synopticsActive; ?>"><a href="../synoptics">Synoptics</a></li>
                            <li id="metars-link" class="navlink menu-clicker<?php echo $metarsActive; ?>"><a href="../metars">METARS</a></li>
                            <li id="visitorcentre-link" class="navlink menu-clicker<?php echo $visitorCentreActive; ?>"><a href="../visitorcentre">Visitor Centre</a></li>
                            </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li id="about-link" class="navlink menu-clicker<?php echo $aboutActive; ?>"><a href="../about">About</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>

<!-- Page Content ======================================================= -->


