<?php include('env.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>


  <?php include('inc/head.php'); ?>

  <!-- SCRIPT A STILI QUI (in ordine di importanza) -->

  <link rel="stylesheet" href="css/inc/navbar.css" /> 
</head>

<body class="sidebar bg-light" id="body-pd">

        <!-- NAVBAR -->
        <?php include('inc/navbar.php'); ?>


        
        <!--------- START PAGE ----------->




          <!--Main layout-->
          <main>

            <section style="background-color: #eee;">
              <div class="container py-5">
                <div class="row">
                  <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                      <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active" aria-current="page">Profilo Utente</li>
                      </ol>
                    </nav>
                  </div>
                </div>
            
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card mb-4">
                      <div class="card-body text-center">
                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava3.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h4 class="my-3">Giuseppe Ingrassia</h4>
                        <p class="text-muted mb-4">Caltagirone, Catania CT</p>
                        <h5>Giuseppe94</h5>
          
                      </div>
                    
                  
                      <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                            <p class="mb-0">@GiusIngrassia94</p>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                            <p class="mb-0">Giuseppe.Ingrassia.94</p>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                            <p class="mb-0">Giuseppe_Ingrassia</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="card mb-4">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3">
                            <i class="far fa-user"></i>
                            <p class="mb-0">Nome</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">Giuseppe</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <i class="far fa-user"></i>
                            <p class="mb-0">Cognome</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">Ingrassia</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <i class="far fa-user"></i>
                            <p class="mb-0">Anno di nascita</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">15-02-1994</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">example@example.com</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Telefono Fisso</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">(097) 234-5678</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Cellulare</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">(098) 765-4321</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Indirizzo</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">Via Roma 75, Caltagirone, CT</p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Password</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">Password</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          
              
          </main>
          <!--Main layout-->


        <!-------------- END PAGE ------------->

        <?php include('inc/footer.php'); ?>
        
        <!-- INSERISCI QUI I CUSTOM SCRIPT -->
        


</body>

</html>