<?php include('env.php'); ?>

<!DOCTYPE html>
<html lang="it">

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


        
        <!--------- START PAGE ----------->

        <!--Main layout-->
        <main class="container">
          
          <div class="col-12">
              <h2 class="mx-3">Sensori in vista</h2>
          </div>
          <div class="row row-cols-2 row-cols-lg-4 p-3 g-3" id="sensors-card">

          <?php
            $url = APIDOMAIN."sensors";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
              "Accept: application/json",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl);
            curl_close($curl);
            //var_dump($resp);

            //echo "<pre>";
            //print_r(json_decode($resp));
            $resp = json_decode($resp, true);
            //echo "</pre>";


            for ($i = 0; $i < 4; $i++) {
            
          ?>

                      <!-- FOR IN PHP CHE CREA LE CARD -->
                      <div class="col" id="sensors">
                          <div class="card  overflow-hidden" data-mcu="<?=$resp[$i]["MCU_ID"].'_'.$resp[$i]["Type"] ?>" data-uid="<?=$resp[$i]["MCU_ID"] ?>" data-type="<?=$resp[$i]["Type"]; ?>">
                              
                              <div class="card-header border-0 d-flex flex-row justify-content-between align-items-center">
                                    <div class="blob">
                                        <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                          <path fill="#30a853" d="M51.5,-50.8C64.8,-38.2,72.2,-19.1,69.1,-3.1C65.9,12.9,52.3,25.7,39,37.4C25.7,49.1,12.9,59.5,0.1,59.4C-12.6,59.3,-25.2,48.6,-37.3,36.9C-49.4,25.2,-60.9,12.6,-62.4,-1.5C-63.8,-15.5,-55.2,-31.1,-43.1,-43.6C-31.1,-56.1,-15.5,-65.6,1.8,-67.4C19.1,-69.2,38.2,-63.3,51.5,-50.8Z" transform="translate(100 100)" />
                                        </svg>
                                    </div>
                                    <img src="<?=DOMAIN.'img/'.$resp[$i]["Type"].'.png'; ?>" class="position-relative" alt="<?=$resp[$i]["Type"];  ?>">
                                    <div class="datalive"><span class="h2 value">--- </span><span class="unit">-</span></div>
                              </div>

                              <div class="card-body">
                                  <div class="card-text">
                                      
                                      <div class="">
                                        <small class="h6" data-type="">Sensore di <?=$resp[$i]["Type"]; ?></small>
                                        <span>
                                          <?=$resp[$i]["Name"]; ?>
                                        </span>
                                      </div>

                                  </div>
                              </div>

                              <div class="card-footer text-start border-0">
                                    <?php if ($resp[$i]["Enabled"]): ?>
                                        <div class="btn btn-outline-success btn-sm btn-rounded" disabled style="cursor: default;"> Attivato </div>
                                    <? else: ?>
                                      <div class="btn btn-outline-danger btn-sm btn-rounded" disabled style="cursor: default;"> Disattivato </div>
                                    <?php endif; ?>
                              </div>

                          </div>
                      </div>



              <?php } ?>


                      <div class="col" id="sensors">
                          <div class="card overflow-hidden" data-mcu="2457427247_temp" data-uid="2457427247" data-type="temp">
                              
                              <div class="card-header border-0 d-flex flex-row justify-content-between align-items-center">
                                    <div class="blob">
                                        <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                          <path fill="#30a853" d="M51.5,-50.8C64.8,-38.2,72.2,-19.1,69.1,-3.1C65.9,12.9,52.3,25.7,39,37.4C25.7,49.1,12.9,59.5,0.1,59.4C-12.6,59.3,-25.2,48.6,-37.3,36.9C-49.4,25.2,-60.9,12.6,-62.4,-1.5C-63.8,-15.5,-55.2,-31.1,-43.1,-43.6C-31.1,-56.1,-15.5,-65.6,1.8,-67.4C19.1,-69.2,38.2,-63.3,51.5,-50.8Z" transform="translate(100 100)" />
                                        </svg>
                                    </div>
                                    <img src="<?=DOMAIN ?>/img/Temperature.png" class="position-relative" alt="temp">
                                    <div class="datalive"><span class="h2 value">--- </span><span class="unit">-</span></div>
                              </div>

                              <div class="card-body">
                                  <div class="card-text">
                                      
                                      <div class="">
                                        <small class="h6" data-type="">Sensore di temp</small>
                                        <p>
                                          Nome: hthrftht"
                                        </p>
                                      </div>

                                  </div>
                              </div>

                              <div class="card-footer text-start border-0">
                                        <div class="btn btn-outline-success btn-sm btn-rounded" disabled style="cursor: default;"> Attivato </div>
                              </div>

                          </div>
                      </div>




<!--- NON TOCCARE
              <div class="col">
                  <div class="card" data-uid="346457">
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
--->


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

        <div id="detailModal"></div>

        <!-------------- END PAGE ------------->

        <?php include('inc/footer.php'); ?>
        
        <!-- INSERISCI QUI I CUSTOM SCRIPT -->
        <script type="text/javascript" src="<?=DOMAIN ?>js/inc/dashboard.js"></script>


        <script src="js/socket.io.min.js"></script>
        <script>
            const socket = io("http://ws.envlog.mitello.xyz", { transports: ['websocket'] });
            socket.on('connect', () => console.log("Connected"));
            socket.on('disconnect', () => console.error("Lost connection to server!"));

            socket.on('data', (data) => {
                //alert(data);
                const sensor = JSON.parse(data);
                const valueContainer = document.querySelector('#sensors .card[data-mcu="'+sensor.MCU_ID+'_'+sensor.Type+'"] .datalive .value');
                const unitContainer = document.querySelector('#sensors .card[data-mcu="'+sensor.MCU_ID+'_'+sensor.Type+'"] .unit');
                if (valueContainer) valueContainer.innerHTML = sensor.Value;
                if (unitContainer) unitContainer.innerHTML = " "+sensor.Unit;
            });
        </script>

</body>

</html>