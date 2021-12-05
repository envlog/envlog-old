<?php include('inc/head.php'); ?>

<body class="sidebar bg-light" id="body-pd">

    <!--- START NAVBAR -->
    <header class="header bg-success navbar-dark text-white" id="header">
        <div class="header_toggle"> <i class="fa fa-bars" id="header-toggle"></i> </div>
        <span class="text-secondary text-white">envlog</span>
        <div class="heade_action">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
          </svg>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
          <nav class="nav">
              <div> 
                  <a href="#" class="nav_logo">
                    <svg class="nav_icon" version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 45" width="25" height="25">
                      <title>leaf-svg</title>
                      <style>
                        tspan { white-space:pre }
                        .shp0 { fill: #ffffff;stroke: #00ff00;stroke-width: 0 } 
                        .shp1 { fill: #ffffff } 
                      </style>
                      <g id="Layer 1">
                        <g id="&lt;Group&gt;">
                          <g id="&lt;Group&gt;">
                            <g id="&lt;Group&gt;">
                              <path id="&lt;Path&gt;" class="shp0" d="M21.16 41.76C9.42 41.15 6.74 26.19 3.67 16.53C2.53 12.92 1.32 10.1 0.06 8.07C8.87 8.96 16.61 11.19 23.28 14.76C21.88 16.26 20.67 17.88 19.73 19.66C19.13 20.8 18.7 21.98 18.33 23.18C14.84 19.76 11.29 16.69 8.42 14.37C6 12.41 3.95 10.84 2.25 9.66C3.9 10.91 5.89 12.56 8.22 14.6C11.09 17.12 14.63 20.46 18.06 24.14C16.78 29.47 17.8 35.37 21.16 41.76Z" />
                            </g>
                            <g id="&lt;Group&gt;">
                              <path id="&lt;Path&gt;" class="shp1" d="M64.27 0.16C62.6 2.84 61 6.57 59.49 11.35C54.58 26.78 50.49 52.55 25.05 42.61C25.32 42.04 25.61 41.45 25.94 40.86C26.31 40.13 26.71 39.39 27.16 38.65C27.59 37.9 28.05 37.13 28.56 36.37C29.04 35.59 29.56 34.82 30.11 34.04C32.27 30.91 34.8 27.71 37.5 24.64C42.88 18.5 48.85 12.85 53.48 8.8C56.56 6.1 59.19 3.91 61.36 2.25C59.12 3.82 56.4 5.9 53.21 8.49C48.41 12.35 42.2 17.77 36.52 23.74C33.67 26.73 30.98 29.87 28.64 32.98C28.05 33.75 27.48 34.52 26.96 35.3C26.41 36.06 25.9 36.83 25.42 37.59C24.93 38.33 24.48 39.08 24.06 39.82C23.67 40.47 23.32 41.12 23 41.75C22.92 41.72 22.85 41.69 22.77 41.66C9.92 18.05 23.75 4.22 64.27 0.16Z" />
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <img width="80px" src="<?=DOMAIN ?>img/envlog-logo-white.svg" class="text-center" />
                  </a>

                  <div class="nav_list"> 
                    <a href="#" class="nav_link active">
                      <i class="fas fa-home nav_icon"></i> 
                      <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                      <i class="fas fa-chart-area nav_icon"></i> 
                      <span class="nav_name">Grafici</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                      <i class="fas fa-bullseye nav_icon"></i> 
                      <span class="nav_name">Storici</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                      <i class="fas fa-bullseye nav_icon"></i> 
                      <span class="nav_name">Altro</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                      <i class="fas fa-microchip nav_icon"></i> 
                      <span class="nav_name">Sensori</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                      <i class="fas fa-cog nav_icon"></i> 
                      <span class="nav_name">Impostazioni</span> 
                    </a> 
                  </div>
              </div> 
              <a href="/profile.html" id="avatar" class="nav_link"> 
                <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="nav_icon rounded-circle" style="width: 22px;" alt="" />
                <span class="nav_name">Ciao, <span></span></span> 
              </a>
          </nav>
    </div>
    <!-- END NAVBAR -->

        <!--Main layout-->
        <main>
          
          <div class="col-12">
              <h2 class="mx-3">I miei sensori per tipo</h2>
          </div>
          <div class="row row-cols-2 row-cols-lg-4 p-3 g-3" id="sensors-card" style="transform: scale(0.9);">
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


        <!-- INSERISCI QUI I CUSTOM SCRIPT -->

        <?php include('inc/footer.php'); ?>
        <script type="text/javascript" src="<?=DOMAIN ?>js/inc/dashboard.js"></script>


</body>

</html>