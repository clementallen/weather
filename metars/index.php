<?php
$pageName = 'METARS';

include('../_layout/header.php');
include('MetarsClass.php');

if(isset($_POST['metarsubmit'])) {

    $icao = strtoupper($_POST['icao']);
    $errIcao = Metars::icaoValidate($icao);

    if (empty($errIcao)) {
        $airportName = Metars::dataRetrieve($icao, 'airport_name');
        $completeLocation = Metars::dataRetrieve($icao, 'complete_location');
        $city = Metars::dataRetrieve($icao, 'city');
        $country = Metars::dataRetrieve($icao, 'country');
        $iataCode = Metars::dataRetrieve($icao, 'iata_code');
        $icaoFinal = $icao;
    }

}
?>

        <!-- METARS AND TAFS ======================================================= -->
        <div class="row" id="metars-page">

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">

                      <form method="post" class="form-horizontal">
                          <fieldset>

                              <legend>Airport selection</legend>

                              <div class="form-group">
                                  <div class="col-md-6">
                                    <p>Airport ICAO</p>
                                      <input id="icao" name="icao" placeholder="Enter ICAO" class="form-control input-md" type="text">
                                      <?php echo $errIcao; ?>
                                  </div>
                              </div>

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

            <?php
                if (Metars::urlExist('ftp://tgftp.nws.noaa.gov/data/observations/metar/decoded/' . $icaoFinal . '.TXT')) {
            ?>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <p class="lead"><?php echo $airportName . ' METARS decoded'; ?></p><br />
                    <?php
                        echo nl2br( file_get_contents('ftp://tgftp.nws.noaa.gov/data/observations/metar/decoded/' . $icaoFinal . '.TXT') );
                    ?>
                </div>
            </div>

            <?php
                }

                if (Metars::urlExist('ftp://tgftp.nws.noaa.gov/data/forecasts/taf/stations/' . $icaoFinal . '.TXT')) {
            ?>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <p class="lead"><?php echo $airportName . ' TAFS'; ?></p><br />
                    <?php
                        echo nl2br( file_get_contents('ftp://tgftp.nws.noaa.gov/data/forecasts/taf/stations/' . $icaoFinal . '.TXT') );
                    ?>
                </div>
            </div>

            <?php
                }
            ?>

<?php
} elseif (empty($errIcao) && !empty($icao)) { // If the icao and airport name aren't found (i.e. if the info is not in the database)
?>
        <div class="col-md-6 col-md-offset-3">
            <p class="alert alert-danger"><?php echo 'Sorry, the ICAO ' . $icao . ' is not in our database'; ?></p>
        </div>
<?php
}
?>

    </div>

<?php
include('../_layout/footer.php');
?>
