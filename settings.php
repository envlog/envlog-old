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
        <div class="row container mt-md-5 mx-auto">
          <div class="col-12 col-md-4 mt-md-5">

            <!-- Tab navs -->
            <div class="nav flex-column nav-pills nav-justified text-center" id="v-tabs-tab" role="tablist" aria-orientation="vertical" >

              <a class="nav-link active" id="v-tabs-home-tab" data-mdb-toggle="tab" href="#v-tabs-home" role="tab" aria-controls="v-tabs-home" aria-selected="true" >
                <span class=""><i class="fas fa-cog p-1"></i>IMPOSTAZIONI ACCOUNT</span>
              </a >
              <a class="nav-link" id="v-tabs-profile-tab" data-mdb-toggle="tab" href="#v-tabs-profile" role="tab" aria-controls="v-tabs-profile" aria-selected="false" >
                <span class=""><i class="fas fa-user p-1"></i> Profilo</span>
              </a >
              <a class="nav-link" id="v-tabs-security-tab" data-mdb-toggle="pill" href="#v-tabs-security" role="tab" aria-controls="v-tabs-security" aria-selected="false" >
                <span class=""><i class="fas fa-shield-alt p-1"></i> Sicurezza </span>
              </a >
              <a class="nav-link" id="v-tabs-alert-tab" data-mdb-toggle="pill" href="#v-tabs-alert" role="tab" aria-controls="v-tabs-alert" aria-selected="false" >
                <span class=""><i class="fas fa-bell p-1"></i> Notifiche </span>
              </a >
              <a class="nav-link" id="v-tabs-payments-tab" data-mdb-toggle="tab" href="#v-tabs-payments" role="tab" aria-controls="v-tabs-payments" aria-selected="false" >
                <span class=""><i class="fas fa-cart-plus p-1"></i> Pagamenti </span>
              </a >
            </div>
            <!-- Tab navs -->

          </div>

          <div class="col-12 col-md-8">
            <!-- Tab content -->
            <div class="tab-content p-5" id="v-tabs-tabContent">

              <div class="tab-pane fade show active"  id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab" >
                <h5>IL TUO PROFILO</h5>
                <hr>
                <form>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control p-2" id="username" aria-describedby="usernameHelp" placeholder="Inserisci username">
                  </div>
                  <div class="form-group mt-3">
                    <label for="location">Località</label>
                    <input type="text" class="form-control p-2" id="location" placeholder="Inserisci la località">
                  </div>
                  <div class="form-group mt-3 mb-3">
                      <label for="data">Formato data e ora</label>
                      <input type="datetime-local" class="form-control p-2" id="data">
                  </div>
                  <button type="button" class="btn btn-primary mt-3">Salva</button>
                  <button type="reset" class="btn btn-light">Annulla</button>
                </form>
              </div>

              <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
                <h5>IMPOSTAZIONI ACCOUNT</h5>
                <hr>
                <form>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control p-2" id="username" aria-describedby="usernameHelp" placeholder="Inserisci username">
                  </div>
                  <hr>
                  <div class="form-group">
                    <label class="d-block text-danger">Elimina Account</label>
                    <p class="text-muted font-size-sm">Una volta eliminato l'account, non puoi recuperare i dati.</p>
                  </div>
                  <button class="btn btn-danger" type="button">Elimina Account</button>
                </form>
              </div>

              <div class="tab-pane fade" id="v-tabs-security" role="tabpanel" aria-labelledby="v-tabs-security-tab" >
                <h5>SICUREZZA</h5>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block">Cambia Password</label>
                    <input type="text" class="form-control mt-3 p-2" placeholder="Inserisci vecchia password">
                    <input type="text" class="form-control mt-3 p-2" placeholder="Nuova password">
                    <input type="text" class="form-control mt-3 p-2" placeholder="Conferma nuova password">
                  </div>
                  <button type="button" class="btn btn-primary mt-3">Salva</button>
                  <button type="reset" class="btn btn-light">Annulla</button>
                </form>
              </div>

              <div class="tab-pane fade" id="v-tabs-alert" role="tabpanel" aria-labelledby="v-tabs-alert-tab" >
                <h5>NOTIFICHE</h5>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block mb-0">ALLARMI</label>
                    <div class="small text-muted mb-3">Ricevi le notifiche di sicurezza via email</div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                      <label class="custom-control-label" for="customCheck1">Invia un'e-mail ogni volta che viene superata la soglia di temperatura</label>
                    </div>
                  </div>
                  <div class="form-group mt-5">
                    <label class="d-block mb-3">Notifiche push</label>
                    <ul class="list-group list-group-sm">
                      <li class="list-group-item has-icon">
                        
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1"> 
                          <label class="custom-control-label" for="customSwitch1">Notificami quando un sensore supera il range</label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1">
                          <label class="custom-control-label" for="customSwitch1">Notificami gli accessi alla piattaforma</label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1">
                          <label class="custom-control-label" for="customSwitch1">Notificami quando un sensore viene aggiunto</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </form>                
              </div>

              <div class="tab-pane fade" id="v-tabs-payments" role="tabpanel" aria-labelledby="v-tabs-payments-tab" >
                <h5>PAGAMENTI</h5>
                <hr>

                <form>
                  <div class="form-group">
                    <label class="d-block mb-0">Metodo di pagamento</label>
                    <div class="small text-muted mb-3">Non hai ancora aggiunto un metodo di pagamento</div>
                    <button class="btn btn-primary" type="button" data-mdb-toggle="modal" data-mdb-target="#payModal">
                      Aggiungi metodo di pagamento<!--trigger modal-->
                    </button>
                  </div>
                  <div class="form-group mt-5">
                    <label class="d-block mt-5">Storico pagamenti</label>
                    <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">Non hai ancora fatto nessun pagamento.</div>
                  </div>
                </form>


                <!-- Modal -->
                <div class="modal bottom fade" id="payModal" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
                  <div class="modal-dialog modal-frame modal-bottom ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Aggiungi metodo</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">


                        <div class="checkout">
                          <div class="credit-card-box">
                            <div class="flip">
                              <div class="front">
                                <div class="chip"></div>
                                <div class="logo">
                                  <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                    <g>
                                      <g>
                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                                c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                                c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                                M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                                c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                                c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                                l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                                C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                                C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                                c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                                h-3.888L19.153,16.8z"/>
                                      </g>
                                    </g>
                                  </svg>
                                </div>
                                <div class="number"></div>
                                <div class="card-holder">
                                  <label>Nome</label>
                                  <div></div>
                                </div>
                                <div class="card-expiration-date">
                                  <label>Scadenza</label>
                                  <div></div>
                                </div>
                              </div>
                              <div class="back">
                                <div class="strip"></div>
                                <div class="logo">
                                  <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                    <g>
                                      <g>
                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                                c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                                c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                                M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                                c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                                c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                                l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                                C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                                C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                                c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                                h-3.888L19.153,16.8z"/>
                                      </g>
                                    </g>
                                  </svg>

                                </div>
                                <div class="ccv">
                                  <label>CCV</label>
                                  <div></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <form class="form" autocomplete="off" novalidate>
                            <fieldset>
                              <label for="card-number">Numero della carta</label>
                              <input type="number" id="card-number" maxlength="16"/>
                            </fieldset>
                            <fieldset>
                              <label for="card-holder">Issuer</label>
                              <input type="text" id="card-holder" />
                            </fieldset>
                            <fieldset class="fieldset-expiration">
                              <label for="card-expiration-date">Data di scandenza</label>
                              <input type="date" id="card-expiration-date" />
                            </fieldset>
                            <fieldset class="fieldset-ccv">
                              <label for="card-ccv">CCV</label>
                              <input type="number" id="card-ccv" maxlength="3" />
                            </fieldset>
                          </form>
                        </div>

                        <script>

                              window.onload = function () {

                                    const name = document.getElementById('card-holder');
                                    const cardnumber = document.getElementById('card-number');
                                    const expirationdate = document.getElementById('card-expiration-date');
                                    const securitycode = document.getElementById('card-ccv');

                                    name.addEventListener('input', function () {      
                                        document.querySelector('.credit-card-box .card-holder div').innerHTML = name.value;
                                    });

                                    cardnumber.addEventListener('input', function () {      
                                        document.querySelector('.credit-card-box .number').innerHTML = this.value;
                                    });

                                    expirationdate.addEventListener('input', function () {      
                                        document.querySelector('.credit-card-box .card-expiration-date div').innerHTML = this.value;
                                    });

                                    securitycode.addEventListener('input', function () {      
                                        document.querySelector('.credit-card-box .ccv div').innerHTML = this.value;
                                    });
                              }


                        </script>




                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                          Annulla
                        </button>
                        <button type="button" class="btn btn-primary">Aggiungi</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- Tab content -->
          </div>
        </div>
    </main>
    <!--Main layout-->

<!-------------- END PAGE ------------->

<?php include('inc/footer.php'); ?>

<!-- INSERISCI QUI I CUSTOM SCRIPT -->
        


</body>

</html>