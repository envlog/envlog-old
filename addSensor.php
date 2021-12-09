<?php include('env.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>
  <?php include('inc/head.php'); ?>
  <!-- SCRIPT A STILI QUI (in ordine di importanza) -->
  <link rel="stylesheet" href="css/inc/settings.css" /> 
</head>

<body class="sidebar bg-light" id="body-pd">

<!-- NAVBAR -->
<?php include('inc/navbar.php'); ?>

<!--------- START PAGE ----------->



    <!--Main layout-->
    <main class="mb-5 container">
        <p class="h3 mb-3">Scegli il tipo di sensore da installare</p>   
        <div class="row row-cols-1 row-cols-12 g-3" id="sensors-card">

                <div class="col-md-6 col-12" >

                    <div class="card my-3" data-sensor-uid="1234" data-sensor-type="Temperature" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <img src="<?=DOMAIN?>img/Temperature.png" class="img-fluid" />
                            <h5 class="card-title">Temperatura</h5>
                            <button type="button" class="btn btn-outline-primary btn-link border-0"> <i class="fas fa-2x fa-angle-right"></i> </button>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-12" >
                
                    <div class="card my-3" data-sensor-uid="1234" data-sensor-type="Pressure" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <img src="<?=DOMAIN?>img/Pressure.png" class="img-fluid" />
                            <h5 class="card-title">Pressione</h5>
                            <button type="button" class="btn btn-outline-primary btn-link border-0"> <i class="fas fa-2x fa-angle-right"></i> </button>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-12" >
                
                    <div class="card my-3" data-sensor-uid="1234" data-sensor-type="Brightness" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <img src="<?=DOMAIN?>img/Brightness.png" class="img-fluid" />
                            <h5 class="card-title">Luminosità</h5>
                            <button type="button" class="btn btn-outline-primary btn-link border-0"> <i class="fas fa-2x fa-angle-right"></i> </button>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-12" >  

                    <div class="card my-3" data-sensor-uid="1234" data-sensor-type="Infrared" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <img src="<?=DOMAIN?>img/Infrared.png" class="img-fluid" />
                            <h5 class="card-title">Infrarossi</h5>
                            <button type="button" class="btn btn-outline-primary btn-link border-0"> <i class="fas fa-2x fa-angle-right"></i> </button>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-12" >  

                    <div class="card my-3" data-sensor-uid="1234" data-sensor-type="Anemometer" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <img src="<?=DOMAIN?>img/Anemometer.png" class="img-fluid" />
                            <h5 class="card-title">Anemometro</h5>
                            <button type="button" class="btn btn-outline-primary btn-link border-0"> <i class="fas fa-2x fa-angle-right"></i> </button>
                        </div>
                    </div>

                </div>

        </div> 
    </main>
    <!--Main layout-->

    <div class="modal bottom " id="addSensorModal" tabindex="-1" aria-labelledby="SensorModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
      <div class="modal-dialog modal-fullscreen modal-dialog-centered h-100 modal-side ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="SensorModalLabel">Aggiungi sensore</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <img src="img/Temperatura.png" alt="" class="text-center mx-auto py-5 sensorimage">

            <form class="col d-flex flex-column  form-outline mb-4" id="addsensor" name="addsensor">

                <div class="form-outline mb-4">
                    <input type="text" id="sensorname" name="sensorname"  class="form-control" />
                    <label class="form-label" for="sensorname">Inserisci nome sensore</label>
                    <div class="form-helper">Campo falcoltativo</div>
                </div>
                <br>
                <div class="form-outline">
                    <input type="number" id="sensorid" name="sensorid"  class="form-control" min="1000" max="9999" required/>
                    <label class="form-label" for="typeNumber">Indentificativo del sensore</label>
                    <div class="form-helper">Campo obbligatorio</div>
                </div>
                <br>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="sensorswitch" id="flexSwitchCheckChecked" checked/>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Attiva sensore</label>
                </div>                
                <br>
                <div class="form-outline">
                    <input type="hidden" id="sensortype" name="sensortype"  value=""/>
                </div>
                <br>
                <div class="d-flex flex-row justify-content-end">
                    <button type="button" class="btn btn-outline-secondary mx-2" data-mdb-dismiss="modal">Annulla</button>
                    <button type="button" onclick="addSensor(); " class="btn btn-primary">Conferma</button>
                </div>
            </form>


          </div>
        </div>
      </div>
    </div>
    


  
<!-------------- END PAGE ------------->

<?php include('inc/footer.php'); ?>

<!-- INSERISCI QUI I CUSTOM SCRIPT -->
    
<script src="js/inc/addsensor.js"></script>

</body>

</html>