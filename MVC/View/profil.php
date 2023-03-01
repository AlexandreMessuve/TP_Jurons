<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../View/assets/css/profilStyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<?php session_start ()?>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">La boite a jurons</h5>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
    </div>
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="containeurUn">
    <div class="CadreUn" >
    <div class="profil">
        <img class="imgProfil" src="../View/assets/img/utilisateur.png">
        <div class="emailLog">
      <span class="badge text-bg-light"><p>email</p><?php  echo $_SESSION['donneesUtilisateurLoginEmail']['email']?></span>
      <span class="badge text-bg-light"><p>Login</p><?php  echo $_SESSION['donneesUtilisateurLoginEmail']['login_utilisateur']?></span>
        </div>
        <div class="nomEtPrenom">
        <span class="badge text-bg-light"><p>nom</p><?php  echo $_SESSION['donneesUtilisateur']['nom']?></span>
      <span class="badge text-bg-light"><p>prenom</p><?php  echo $_SESSION['donneesUtilisateur']['prenom']?></span>
      <span class="badge text-bg-light"><p>date Naissance</p><?php  echo $_SESSION['donneesUtilisateur']['date_naissance']?></span>
        </div>
      </div>
    </div>
    <div class="CadreDeux" ></div>
  </div>
  <div class="containeurProfil" >
  </div>
  
<div class="containeurFormulaire">
        <form action="../Controller/executeProfil.php" method="post" class="form-example">
            <div class="form-example">

            
                <label for="Login"></label>
                <input class="form-form-control form-control-lg" type="text" name="login" id="login" placeholder="Login:" required>
            
                <label for="email"></label>
                <input class="form-form-control form-control-lg" type="text" name="email" id="email" placeholder="email:" required>

                <label for="password"></label>
                <input class="form-form-control form-control-lg" type="text" name="password" id="password" placeholder="password:" required>
            </div>
            <div class="formulaireButton">
                <input class="btn btn-secondary" class="submit" name="submit" type="submit" value="update" require />
  </form>
            
  <form action="../Controller/executeProfil.php" method="post">  
  <input type="submit" value="refresh">
</form>


  
     






  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>