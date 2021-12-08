<?php include('env.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>


  <?php include('inc/head.php'); ?>
  <!-- SCRIPT A STILI QUI (in ordine di importanza) -->
  
</head>

<body class="bg-light" id="body-pd">


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
                    <div class="col-md-8 col-lg-7 col-xl-6 p-5  d-none d-md-block">
                        <img src="img/undraw_sign_in.svg" class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <div class="mb-4">
                            <h3>Registrati</h3>
                        </div>
                        <form method="POST" name="registerform" onsubmit="register(); return false;">
                            <!-- Username input-->
                            <div class="form-outline mb-4">
                                <input type="text" name="username" id="username" class="form-control form-control-lg" />
                                <label class="form-label" for="text">Username</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" class="form-control form-control-lg" />
                                <label class="form-label" for="email">Indirizzo email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="pswd" id="pswd" class="form-control form-control-lg" />
                                <label class="form-label" for="pswd">Password</label>
                            </div>

                            <!-- Confirm password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="checkpswd" id="checkpswd" class="form-control form-control-lg" />
                                <label class="form-label" for="checkpswd">Conferma password</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id=loginbtn>Registrati</button>

                            <span class="d-flex align-items-center mb-3 mt-3 font-weight-bold">
                                Hai già un account? <a href="login.php" class="px-2"> Accedi</a>
                            </span>
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
        <!-- Custom scripts -->
        <script type="text/javascript" src="js/inc/register.js"></script>


</body>

</html>