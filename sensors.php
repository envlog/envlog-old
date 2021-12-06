<?php include('env.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>
  <?php include('inc/head.php'); ?>

  <!-- SCRIPT A STILI QUI (in ordine di importanza) -->
  
</head>

<body class="sidebar bg-light" id="body-pd">

    <!-- NAVBAR -->
    <?php include('inc/navbar.php'); ?>

<!--------- START PAGE ----------->

    <!--Main layout-->
    <main class="container">
        
        <div class="col-12 mx-3">
            <h2 class="">Tutti i sensori</h2>

            
            <div class="filters">
                <span>Filtra per: </span>
                <span class="filter-option badge rounded-pill bg-primary"data-filter="*" onclick=filterSensor(event)>Tutti</span>
                <span class="filter-option badge rounded-pill bg-primary"data-filter="Pressure" onclick=filterSensor(event)>Pressione</span>
                <span class="filter-option badge rounded-pill bg-primary"data-filter="Temperature" onclick=filterSensor(event)>Temperatura</span>
                <span class="filter-option badge rounded-pill bg-primary"data-filter="Altro" onclick=filterSensor(event) disabled>Altro</span>
            </div>
            <script>
                function filterSensor(e) {
                    const sensor = document.querySelectorAll("#sensors-card .sensori"); // select all animal divs
                    let filter = e.target.dataset.filter; // grab the value in the event target's data-filter attribute
                    if (filter === '*') {
                        sensor.forEach(sensor => sensor.classList.remove('d-none'));
                    }  else {
                        sensor.forEach(sensor => {
                            sensor.classList.contains(filter) // does the animal have the filter in its class list?
                            ? sensor.classList.remove('d-none') // if yes, make sure .hidden is not applied
                            : sensor.classList.add('d-none'); // if no, apply .hidden
                        });
                    };
                };
            </script>
        </div>


        <div class="row row-cols-2 row-cols-lg-4 py-3 g-3" id="sensors-card">

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


            for ($i = 0; $i < count($resp); $i++) {
            
                ?>

                      <!-- FOR IN PHP CHE CREA LE CARD -->
                      <div class="col sensori <?=$resp[$i]["Type"]; ?>">
                          <div class="card" id="<?=$resp[$i]["MCU_ID"] ?>" data-uid="<?=$resp[$i]["MCU_ID"] ?>" data-type="<?=$resp[$i]["Type"]; ?>" data-mdb-toggle="modal" data-mdb-target="#detailModal">
                              
                              <div class="card-header border-0 d-flex flex-row justify-content-between align-items-center">
                                    <img src="<?=DOMAIN.'img/'.$resp[$i]["Type"].'.png'; ?>" class="rounded-circle w-60 p-3 custom-bg-green img-fluid" alt="<?=$resp[$i]["Type"];  ?>">
                                    <h3 class="h2">100<span>L</span></h3>
                              </div>

                              <div class="card-body">
                                  <div class="card-text">
                                      
                                      <div class="">
                                        <small class="h6" data-type="">Sensore di <?=$resp[$i]["Type"]; ?></small>
                                        <p>
                                          <?php echo "Nome: ".$resp[$i]["Name"]; ?>
                                        </p>
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

<!--- NON TOCCARE
            <div class="col">
                <div class="card" data-mdb-toggle="modal" data-mdb-target="#detailModal" data-uid="1234">
                    <div class="card-body">
                        <div class="card-text">
                        <h3 class="h2 p-3 text-center" data-value="">{{nome sensore}}</h3>
                            <img src="https://img.icons8.com/color/96/000000/cold.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-aqua" alt="...">
                            <div class="text-end">
                            <h3 class="h2" data-value="">22.5<span>C°</span></h3>
                            <small class="h6" data-type="">Stato: OK o Dove è messo</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->
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

                    <div class="col-6">
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

                    <div class="col-6">
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






<!-------------- END PAGE ------------->

        <?php include('inc/footer.php'); ?>
        
        <!-- INSERISCI QUI I CUSTOM SCRIPT -->
        <!-- Custom scripts -->

</body>

</html>