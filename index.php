<?php include('env.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta http-equiv="refresh" content="0;url=/dashboard.php" />

  <?php include('inc/head.php'); ?>

  <!-- SCRIPT A STILI QUI (in ordine di importanza) -->



</head>

<body class="sidebar bg-light" id="body-pd">

        <!-- NAVBAR -->
        <?php include('inc/navbar.php'); ?>


        
        <!--------- START PAGE ----------->

        <!--Main layout-->
        <main>


          <h1>Welcome to envlog</h1>
          <div>Ciao, <span id="sign-in"></span></div>
          <pre id="account-details"></pre>
          <pre id="account-image"></pre>
        

            
        </main>
        <!--Main layout-->


        <!-------------- END PAGE ------------->

        <?php include('inc/footer.php'); ?>
        
        <!-- INSERISCI QUI I CUSTOM SCRIPT -->
        


</body>

</html>