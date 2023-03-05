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
          <form method="post" action="../Controller/executeLogin.php" class="loginConnect">

          <div class="input-group">
               <input required type="text" name="login" autocomplete="off" class="input">
               <label class="user-label">Login</label>
          </div>

          <div class="input-group">
               <input required type="password" name="password" autocomplete="off" class="input">
               <label class="user-label">Password</label>
          </div>

          <button class="btn"> Login </button>
               <p class="text"> Pas de compte ? <a href="../View/inscription.html"> <t class="hoverText">Register</t> </a> </p>
               <p class="text"> Mot de passe oublié ? <a href="../View/motDePasseOublie.php"> <t class="hoverText"> Clique ici </t> </a> </p>
          </form>


     </div>

     <div>
          <img src="../View/assets/img/pixou.png" alt="" class="imgLogin">
     </div>
     <script
             src="https://code.jquery.com/jquery-3.6.3.min.js"
             integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
             crossorigin="anonymous"></script>
     <script type="text/javascript" src="assets/js/functions.js" onload="adminLoad()"></script>
</body>
</html>


