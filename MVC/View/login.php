<?php session_start();

require_once '../Modele/auth.php'; 
if (est_connecte()) {
    header ('Location: ../View/accueil.php');
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../View/assets/css/styleLogin.css">
     <title>Login</title>
</head>
<body>

     <div>
          <form method="post" action="../Controller/executeLogin.php">

          <div class="input-group">
               <input required type="text" name="login" autocomplete="off" class="input">
               <label class="user-label">Login</label>
          </div>

          <div class="input-group">
               <input required type="text" name="password" autocomplete="off" class="input">
               <label class="user-label">Password</label>
          </div>

          <button class="btn"> Login </button>
               <p class="text"> Pas de compte ? <a href="../View/inscription.html"> <t class="hoverText">Register</t> </a> </p>

          </form>

     </div>

     <script src="../View/assets/js/loginScript.js"></script>
</body>
</html>


