<?php include('env.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>


  <?php include('inc/head.php'); ?>

  <!-- SCRIPT A STILI QUI (in ordine di importanza) -->
  <link rel="stylesheet" href="<?=DOMAIN ?>css/inc/dashboard.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
  crossorigin="anonymous"></script>
</head>

<body class="sidebar bg-light" id="body-pd">

            <!-- NAVBAR -->
            <?php include('inc/navbar.php'); ?>

        <!--Main layout-->
        <main>
          
          <div class="col-12">
              <h2 class="mx-3">I miei sensori per tipo</h2>
          </div>
          <div class="row row-cols-2 row-cols-lg-4 p-3 g-3" id="sensors-card" style="transform: scale(0.9);">

              <!-- FOR IN PHP CHE CREA LE CARD -->
              <div class="col">
                  <div class="card" data-uid="1234">
                      <div class="card-body">
                          <div class="card-text">
                              <img src="https://img.icons8.com/color/96/000000/water.png" data-image="" class="rounded-circle w-60 p-3 custom-bg-green img-fluid" alt="...">
                              <div class="text-end">
                                <h3 class="h2" data-value="">100<span>L</span></h3>
                                <small class="h6" data-type="">Acqua</small>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col">
                  <div class="card" data-uid="1234">
                      <div class="card-body">
                          <div class="card-text">
                              <img src="https://img.icons8.com/color/96/000000/pressure.png" data-image="" class="rounded-circle w-60 p-3 custom-bg-coral" alt="...">
                              <div class="text-end">
                                <h3 class="h2" data-value="">50<span>mbar</span></h3>
                                <small class="h6" data-type="">Pressione</small>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col">
                  <div class="card" data-mdb-toggle="modal" data-mdb-target="#detailModal" data-uid="1234">
                      <div class="card-body">
                          <div class="card-text">
                              <img src="https://img.icons8.com/color/96/000000/cold.png" data-image="" class="rounded-circle w-60 p-3 custom-bg-aqua" alt="...">
                              <div class="text-end">
                                <h3 class="h2" data-value="">22.5<span>C°</span></h3>
                                <small class="h6" data-type="">Temperatura</small>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col">
                  <div class="card" data-uid="1234">
                      <div class="card-body">
                          <div class="card-text">
                              <img src="https://img.icons8.com/color/96/000000/humidity.png" data-image="" class="rounded-circle w-60 p-3 custom-bg-gold" alt="...">
                              <div class="text-end">
                                <h3 class="h2" data-value="">65<span>%</span></h3>
                                <small class="h6" data-type="">Umidità</small>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

          
          <div class="col container-fluid mb-5" id="weather">
              <div class="alert alert-warning d-none" role="alert">
                Errore con la posizione GPS!
              </div>
              <div class="row justify-content-center content">
                
                <h2 class="mx-3">Altri dati utili</h2>
                <div class="col-12">

                    <!--FORECAST CARD -->
                    <div id="wrapper-bg" class="card text-white bg-image shadow-4-strong forecast" style="background-image: url('<?=DOMAIN ?>/img/clouds.gif')">

                        <div class="card-header p-4 border-0">
                          <div class="text-center mb-3"> 
                            <p class="h2 mb-1" id="wrapper-name"> {{citta}}</p>
                            <p class="mb-1" id="wrapper-description">{{desc}}</p>
                            <p class="display-1 mb-1" id="wrapper-temp">{{temp}}</p>
                            <span class="">Pressione: <span id="wrapper-pressure">{{press}}</span></span>
                            <span class="mx-2">|</span>
                            <span class="">Umidità: <span id="wrapper-humidity">{{umidita}}</span></span>
                            <br>
                            <span class=""><span id="wrapper-windspeed">{{windspeed}}</span> <i class="fas fa-wind"></i></span>
                          </div>
                        </div>

                        <div class="card-body p-4 mb-2">
                          <div class="row text-center">

                            <div class="col-4">
                              <strong class="d-block mb-2">Oggi</strong>
                              <img id="wrapper-icon-today" src="" class="" alt="" />
                              <strong class="d-block"  id="wrapper-forecast-temp-today"></strong>
                            </div>

                            <div class="col-4">
                              <strong class="d-block mb-2">Domani</strong>
                              <img id="wrapper-icon-tomorrow" src="" class="" alt="" />
                              <strong class="d-block" id="wrapper-forecast-temp-tomorrow"></strong>
                            </div>

                            <div class="col-4">
                              <strong class="d-block mb-2">Dopodomani</strong>
                              <img id="wrapper-icon-dAT" src="" class="" alt="" />
                              <strong class="d-block" id="wrapper-forecast-temp-dAT"></strong>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- END FORECAST CARD-->


                </div>
                
              </div>
          </div>
            
        </main>
        <!--Main layout-->

        <!-- Modal -->
        <div class="modal bottom fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
          <div class="modal-dialog-scrollable modal-frame modal-bottom modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Temperatura</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div> 
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <section class="mb-4">
                      <div class="card">
                        <div class="card-header py-3">
                          <h5 class="mb-0 text-center"><strong>Temperatura media giornaliera</strong></h5>
                        </div>
                        <div class="card-body">
                          <canvas class="my-4 w-100" id="myChart" height="80px"></canvas>
                        </div>
                      </div>
                    </section>
                  </div>
                  <hr>
                  <div class="col-12">
                    <section class="mb-4">
                      <div class="card">
                        <div class="card-header py-3">
                          <h5 class="mb-0 text-center"><strong>Temperatura media settimanale</strong></h5>
                        </div>
                        <div class="card-body">
                          <canvas class="my-4 w-100" id="myChart1" height="80px"></canvas>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                  Chiudi
                </button>
              </div>
            </div>
          </div>
        </div>

        <?php include('inc/footer.php'); ?>
        
        <!-- INSERISCI QUI I CUSTOM SCRIPT -->
        <script type="text/javascript" src="<?=DOMAIN ?>js/inc/dashboard.js"></script>


</body>

</html>