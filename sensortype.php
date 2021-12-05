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
    <main>
        
        <div class="col-12">
            <h2 class="mx-3">Sensori di {{tipo}}</h2>
        </div>

        <div class="row row-cols-2 row-cols-lg-4 p-3 g-3" id="sensors-card" style="transform: scale(0.9);">
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

            <div class="col">
                <div class="card" data-mdb-toggle="modal" data-mdb-target="#detailModal" data-uid="1234">
                    <div class="card-body">
                        <div class="card-text">
                        <h3 class="h2 p-3 text-center" data-value="">{{nome sensore}}</h3>
                            <img src="https://img.icons8.com/color/96/000000/cold.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-aqua" alt="...">
                            <div class="text-end">
                            <h3 class="h2" data-value="">20.5<span>C°</span></h3>
                            <small class="h6" data-type="">Stato: OK o Dove è messo</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" data-mdb-toggle="modal" data-mdb-target="#detailModal" data-uid="1234">
                    <div class="card-body">
                        <div class="card-text">
                        <h3 class="h2 p-3 text-center" data-value="">{{nome sensore}}</h3>
                            <img src="https://img.icons8.com/color/96/000000/cold.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-aqua" alt="...">
                            <div class="text-end">
                            <h3 class="h2" data-value="">26<span>C°</span></h3>
                            <small class="h6" data-type="">Stato: OK o Dove è messo</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
        </div>

        <div class="row row-cols-2 row-cols-lg-4 p-3 g-3" id="sensors-card" style="transform: scale(0.9);">
            <div class="col">
                <div class="card" data-mdb-toggle="modal" data-mdb-target="#detailModal" data-uid="1234">
                    <div class="card-body">
                        <div class="card-text">
                        <h3 class="h2 p-3 text-center" data-value="">{{nome sensore}}</h3>
                            <img src="https://img.icons8.com/color/96/000000/cold.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-aqua" alt="...">
                            <div class="text-end">
                            <h3 class="h2" data-value="">20.8<span>C°</span></h3>
                            <small class="h6" data-type="">Stato: OK o Dove è messo</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

            <div class="col">
                <div class="card" data-mdb-toggle="modal" data-mdb-target="#detailModal" data-uid="1234">
                    <div class="card-body">
                        <div class="card-text">
                        <h3 class="h2 p-3 text-center" data-value="">{{nome sensore}}</h3>
                            <img src="https://img.icons8.com/color/96/000000/cold.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-aqua" alt="...">
                            <div class="text-end">
                            <h3 class="h2" data-value="">23.6<span>C°</span></h3>
                            <small class="h6" data-type="">Stato: OK o Dove è messo</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" data-mdb-toggle="modal" data-mdb-target="#detailModal" data-uid="1234">
                    <div class="card-body">
                        <div class="card-text">
                        <h3 class="h2 p-3 text-center" data-value="">{{nome sensore}}</h3>
                            <img src="https://img.icons8.com/color/96/000000/cold.png" data-image="" class="rounded-circle w-50 p-3 custom-bg-aqua" alt="...">
                            <div class="text-end">
                            <h3 class="h2" data-value="">21.5<span>C°</span></h3>
                            <small class="h6" data-type="">Stato: OK o Dove è messo</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </main>
    <!--Main layout-->

<!-------------- END PAGE ------------->

        <?php include('inc/footer.php'); ?>
        
        <!-- INSERISCI QUI I CUSTOM SCRIPT -->
        <!-- Custom scripts -->
        <script type="text/javascript" src="js/inc/register.js"></script>


</body>

</html>