<?php include('env.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>


    <?php include('inc/head.php'); ?>
    
    <!-- SCRIPT A STILI QUI (in ordine di importanza) -->
    <!-- Firebase Auth UI -->
    <script src="https://www.gstatic.com/firebasejs/ui/6.0.0/firebase-ui-auth__it.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.0/firebase-ui-auth.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/inc/login.css" />


</head>

<body class="bg-light">


<!--------- START PAGE ----------->


<!--Main layout-->
<main class="my-5 my-md-0 pb-5 pb-md-0">

    <section class="vh-100">
        <div class="container py-5 h-100">
            
            <div class="row justify-content-center">
                <div class="col-8 col-md-4">
                    <img src="img/envlog-logo.svg" class="img-fluid" alt="Logo">
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center">

                
                <div class="col-md-8 col-lg-7 col-xl-6 p-5 d-none d-md-block">
                    <img src="img/undraw_authentication.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h3>Entra nella tua dashboard</h3>

                    <form method="POST" id="login" name="loginform" onsubmit="login(); return false;">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="email">Indirizzo email</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="pswd" name="password" class="form-control form-control-lg" />
                            <label class="form-label" for="pswd">Password</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input  class="form-check-input" type="checkbox"  id="rememberpswd" checked />
                                <label class="form-check-label" for="rememberpswd"> Ricordami </label>
                            </div>
                            <a href="#!">Hai dimenticato la password?</a>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block" id="accedi">Accedi</button>


                        <div class="divider my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">Oppure entra con</p>
                        </div>

                        <div id="firebaseui-auth-container"></div>
                        <div id="loader">Loading...</div>
                        </br>
                        <span>Non hai un account? <a href="/register.html" title="registrati">Registrati</a>!</span>

                        <!--<a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
                            <i class="fab fa-facebook-f me-2"></i>Continua con Facebook
                        </a>
                        <a class="btn btn-primary btn-lg btn-block" style="color: #686868; background-color: #ffffff" href="#!" role="button">
                            <i class="fab fa-google me-2"></i>Continua con Google
                        </a>-->
                    </form>
                </div>
            </div>
        </div>
    </section>


</main>
<!--Main layout-->




<!-------------- END PAGE ------------->

    <?php include('inc/footer.php'); ?>
        
    <!-- INSERISCI QUI I CUSTOM SCRIPT -->
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/ui/6.0.0/firebase-ui-auth.js"></script>

    <!-- Custom scripts -->
    <script type="text/javascript" src="js/inc/login.js"></script>

</body>

</html>