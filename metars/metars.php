<?php

$page = 'GW - About';

include('../_layout/header.php');
include('MetarsClass.php');

// Instantiate Metars class
$Metars = new Metars();

// If ICAO submitted
if(isset($_POST['metarsubmit'])) {

    // Retrieve the ICAO from the form
    $icao = strtoupper($_POST['icao']);
    $errIcao = $Metars->icaoValidate($icao);

    // If there are no errors in the ICAO
    if (empty($errIcao)) {
        // Get the airport info
        $airportName = $Metars->dataRetrieve($icao, 'airport_name');
        $completeLocation = $Metars->dataRetrieve($icao, 'complete_location');
        $city = $Metars->dataRetrieve($icao, 'city');
        $country = $Metars->dataRetrieve($icao, 'country');
        $iataCode = $Metars->dataRetrieve($icao, 'iata_code');

        $icaoFinal = $icao;

    } // End of if empty $errIcao

} // End of if form submitted

?>

        <!-- METARS AND TAFS ======================================================= -->
        <div class="row" id="metars-page">

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">

                      <form method="post" class="form-horizontal">
                          <fieldset>

                              <!-- Form Name -->
                              <legend>Airport selection<a href="../icao/" target="_blank" class="pull-right">ICAO list</a></legend>

                              <!-- Text input-->
                              <div class="form-group">
                                  <div class="col-md-6">
                                    <p>Airport ICAO</p>
                                      <input id="icao" name="icao" placeholder="Enter ICAO" class="form-control input-md" type="text">
                                      <?php echo $errIcao; ?>
                                  </div>
                              </div>

                              <!-- Button -->
                              <div class="form-group">
                                  <div class="col-md-4">
                                      <button id="metarsubmit" name="metarsubmit" class="btn btn-primary">Submit</button>
                                  </div>
                              </div>

                          </fieldset>
                      </form>
                </div>
            </div>

<?php

if (!empty($icaoFinal) && !empty($airportName)) {

?>

            <div class="col-md-12">
                <div class="panel panel-default">
                    <p class="lead">Airport info</p><br />
                    <p><strong>Name: </strong> <?php echo $airportName; ?></p>
                    <p><strong>IATA: </strong> <?php echo $iataCode; ?></p>
                    <p><strong>City: </strong> <?php echo $city; ?></p>
                    <p><strong>Country: </strong> <?php echo $country; ?></p>
                    <p><strong>Complete location: </strong> <?php echo $completeLocation; ?></p>
                </div>
            </div>


            <div class="col-md-6">
                <div class="panel panel-default">
                    <p class="lead"><?php echo $airportName . ' METARS decoded'; ?></p><br />
                    <?php
                        echo nl2br( file_get_contents('ftp://tgftp.nws.noaa.gov/data/observations/metar/decoded/' . $icaoFinal . '.TXT') );
                    ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <p class="lead"><?php echo $airportName . ' TAFS'; ?></p><br />
                    <?php
                        echo nl2br( file_get_contents('ftp://tgftp.nws.noaa.gov/data/forecasts/taf/stations/' . $icaoFinal . '.TXT') );
                    ?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-default iframe-padding">
                    <p class="lead"><?php echo $airportName . ' TAFS decoded'; ?></p>
                    <iframe frameBorder="0" width="100%" height="400px" src="http://aviationweather.gov/adds/tafs?station_ids=<?php echo $icaoFinal; ?>&std_trans=translated&submit_taf=Get+TAFs">';
                </div>
            </div>

<?php

} elseif (empty($errIcao) && !empty($icao)) { // If the icao and airport name aren't found (i.e. if the info is not in the database)

?>
        <div class="col-md-6 col-md-offset-3">
            <p class="alert alert-danger"><?php echo 'Sorry, the ICAO ' . $icao . ' is not in our database'; ?></p>
        </div>
<?php

} // end of elseif

?>

        </div>


<?php

include('../_layout/footer.php');

?>
