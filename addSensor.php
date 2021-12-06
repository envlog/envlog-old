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
    <main class="mb-5">
        <h1 class="text-center">Scegli il tipo di sensore da installare</h1>   
        <div class="row row-cols-1 row-cols-12 p-3 g-3" id="sensors-card" style="transform: scale(0.9);">
              <div class="col-md-6 col-12" >
                  <div class="card border border-primary" data-sensor-uid="1234" data-sensor-type="Acqua" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                        <div class="card-body">
                            <div class="card-text">
                                <div class="row align-items-center">
                                    <div class="col-md-5 col-sm-7">
                                        <img src="https://img.icons8.com/color/96/000000/water.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-green" alt="...">
                                    </div>
                                    <div class="col-md-7 col-sm-5">
                                        <h5 class="h5">Acqua</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>

              <div class="col-md-6 col-12">
                <div class="card border border-primary" data-sensor-uid="1234" data-sensor-type="[TIPO SENSORE]" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                      <div class="card-body">
                          <div class="card-text">
                              <div class="row align-items-center">
                                  <div class="col-md-5 col-sm-7">
                                    <img src="https://img.icons8.com/color/96/000000/pressure.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-coral" alt="...">
                                </div>
                                  <div class="col-md-7 col-sm-5">
                                      <h5 class="h5">Pressione</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
            
            <div class="col-md-6 col-12 mt-md-5">
                <div class="card border border-primary" data-sensor-uid="1234" data-sensor-type="Temperatura" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                      <div class="card-body">
                          <div class="card-text">
                              <div class="row align-items-center">
                                  <div class="col-md-5 col-sm-7">
                                    <img src="https://img.icons8.com/color/96/000000/cold.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-aqua" alt="...">
                                </div>
                                  <div class="col-md-7 col-sm-5">
                                      <h5 class="h5">Temperatura</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
            </div>

            <div class="col-md-6 col-12 mt-md-5">
                <div class="card border border-primary" data-sensor-uid="1234" data-sensor-type="[TIPO SENSORE]" data-mdb-toggle="modal" data-mdb-target="#addSensorModal">
                      <div class="card-body">
                          <div class="card-text">
                              <div class="row align-items-center">
                                  <div class="col-md-5 col-sm-7">
                                    <img src="https://img.icons8.com/color/96/000000/humidity.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-gold" alt="...">
                                </div>
                                  <div class="col-md-7 col-sm-5">
                                      <h5 class="h5">Umidità</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
        </div> 
    </main>
    <!--Main layout-->

    <div class="modal bottom " id="addSensorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
      <div class="modal-dialog modal-frame modal-bottom ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Aggiungi sensore</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form class="col d-flex flex-column container">

                <label for="sensorname">Inserisci nome sensore (facoltativo)</label>
                <input type="text" name="sensorname" placeholder="Nome sensore" class="mb-5">

                <div class="form-check form-switch mb-5">
                    <input class="form-check-input" type="checkbox" role="switch" name="sensorswitch" id="flexSwitchCheckChecked"/>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Attiva sensore</label>
                </div>                

                <input type="hidden" name="sensortype" value="">
                <input type="hidden" name="sensormcu_id" value="">  

                <div class="d-flex flex-row justify-content-end">
                    <button type="button" class="btn btn-outline-secondary mx-2" data-mdb-dismiss="modal">Annulla</button>
                    <button type="button" class="btn btn-primary">Conferma</button>
                </div>
            </form>
            <script>
                //QUesto scrpt intercetta lapertura della modal e si prende il tipo, quindi stampa il tipo nel titolo
                const sensorModal = document.getElementById('addSensorModal')
                sensorModal.addEventListener('show.mdb.modal', (event) => {
                  // Button that triggered the modal
                  const button = event.relatedTarget
                  // Extract info from data-mdb-* attributes
                  const sensortype = button.getAttribute('data-sensor-type')
                  // If necessary, you could initiate an AJAX request here
                  // and then do the updating in a callback.
                  //
                  // Update the modal's content.
                  const modalTitle = sensorModal.querySelector('.modal-title')
                  modalTitle.textContent = `Aggiungi nuovo sensore di ${sensortype}`;
                })
            </script>

          </div>
        </div>
      </div>
    </div>
    
  
<!-------------- END PAGE ------------->

<?php include('inc/footer.php'); ?>

<!-- INSERISCI QUI I CUSTOM SCRIPT -->
        


</body>

</html>