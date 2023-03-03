<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../View/assets/css/ProfilStyle.css">
  <title>Document</title>
</head>
<body>


<?php session_start() ?>

<?php
require '../Modele/function.php';
if (!est_connecte()) {
    header('Location: login.php');
    exit();
}
?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="index.php">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mx-2" href="../Controller/executeGraphique.php">Le graphique des jurons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../View/balance.php">Top Balance</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link mx-2" href="tableau.html">Balancer quelqu'un</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="../Controller/executeProfil.php">Mon profil</a>
                </li>
                <li id="panelAdmin" style="display: none" class="nav-item">
                    <a class="nav-link mx-2" href="../View/panelAdmin.html">Panel admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../Controller/executeLogout.php">Se déconnecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
              </a>
              <h1><?php  echo $_SESSION['currentUser']->prenom."\n".""?><?php  echo $_SESSION['currentUser']->nom?></h1>
              <p><?php  echo $_SESSION['currentUser']->email?></p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Modifier profil
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier profil</h1>
        <P type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></P>
      </div>

      <div class="modal-body">
        <form  method="post" action="../Controller/executeProfilModif.php"   class="row g-3">
  <div class="col-auto">
    <P for="staticEmail2" class="visually-hidden">Login</Pl>
    <p type="text" readonly class="form-control-plaintext"><?php  echo $_SESSION['currentUser']->login_utilisateur?></p>
  </div>
  <div class="col-auto">
    <label for="login" class="visually-hidden">Nouveau login</label>
    <input class="form-control" type="text" name="login" placeholder="Nouveau login" aria-label="default input example">
  </div>
  <div class="col-auto">
    <P for="staticEmail2" class="visually-hidden">Email</P>
    <p type="text" readonly class="form-control-plaintext" ><?php  echo $_SESSION['currentUser']->email."\n"?></p>
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Nouvelle adresse email</label>
    <input class="form-control" type="text" name="email" placeholder="Nouvelle adresse email" aria-label="default input example">
  </div>
  
  <div class="col-auto">
    <P for="staticEmail2" class="visually-hidden">Nom</P>
    <p type="text" readonly class="form-control-plaintext" ><?php  echo $_SESSION['currentUser']->nom."\n"?></p>
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Nouveau Nom</label>
    <input class="form-control" type="text" name="Nom" placeholder="Nouveau Nom" aria-label="default input example">
  </div>

  <div class="col-auto">
    <p for="staticEmail2" class="visually-hidden">Prenom</p>
    <p type="text" readonly class="form-control-plaintext" ><?php  echo $_SESSION['currentUser']->prenom."\n"?></p>
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Nouveau prenom</label>
    <input class="form-control" type="text" name="prenom" placeholder="Nouveu prenom" aria-label="default input example">
  </div>


  <div class="col-auto">
    <p for="staticEmail2" class="visually-hidden">Date naissance</p>
    <p type="text" readonly class="form-control-plaintext" ><?php  echo $_SESSION['currentUser']->date_naissance."\n"?></p>
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Date naissance</label>
    <input class="form-control" type="date" name="date_naissance" placeholder="Date naissance" aria-label="default input example">
  </div>


  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</form>


      </div>
    </div>
  </div>
</div>
          </div>
      </div>
  </div>
  <div class="profile-info col-md-9">
      <div class="panel">
          
          <div class="panel-body bio-graph-info">
          <div class="card">
            <div class="tools">
              
              </div>
              <div class="card__content">

              <h1>Bio Graph</h1>
              <div class="">
                  <div class="bio-row">
                      <p><span>Login :</span><?php  echo $_SESSION['currentUser']->login_utilisateur?></p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Prenom :</span><?php  echo $_SESSION['currentUser']->prenom."\n"." "?><span> Nom :</span><?php  echo $_SESSION['currentUser']->nom?></p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Date naissance :</span><?php  echo $_SESSION['currentUser']->date_naissance?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email :</span><?php  echo $_SESSION['currentUser']->email?></p>
                  </div>
                  
              </div>

            </div>
            </div>
              
          </div>
      </div>
  </div>
</div>
</div>
<div class="containeurHistorique" >
<div class="cardDeux">
  <div class="tools">
  </div>
  <div class="card__contentDeux">
    <h5>Historique des Jurons : <?php  echo $_SESSION['currentUser']->nom." ".$_SESSION['currentUser']->prenom?></h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Retard</th>
      <th scope="col">Petite insulte</th>
      <th scope="col">Grosse insulte</th>
      <th scope="col">Rot</th>
      <th scope="col">Geste</th>
    </tr>
    <tbody class="table-group-divider">
    <tr>
      <th>1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>

    </tr>

  </thead>


  </div>
</div>
</div>
<form action="../Controller/executeProfilModif.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prenom&nbsp;:</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <div>
        <label for="email">e-mail&nbsp;:</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="login_utilisateur">login&nbsp;:</label>
        <input type="text" id="login_utilisateur" name="login_utilisateur">
    </div>
    <div>
        <label for="password">nv pdp&nbsp;:</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="date_naissance">date naissance&nbsp;:</label>
        <input type="date" id="date_naissance" name="date_naissance">
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>

<form action="../Controller/executeProfil.php">
         <button type="submit">Click me</button>
      </form>
  

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>