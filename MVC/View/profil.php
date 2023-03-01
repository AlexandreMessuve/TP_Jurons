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



<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
              </a>
              <h1><?php  echo $_SESSION['Utilisateur']['prenom']."\n".""?><?php  echo $_SESSION['Utilisateur']['nom']?></h1>
              <p><?php  echo $_SESSION['Utilisateur']['email']?></p>
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
                      <p><span>Login :</span><?php  echo $_SESSION['Utilisateur']['login_utilisateur']?></p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Prenom :</span><?php  echo $_SESSION['Utilisateur']['prenom']."\n"."|"?><span> Nom :</span><?php  echo $_SESSION['Utilisateur']['prenom']?></p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Date anniveraire :</span><?php  echo $_SESSION['Utilisateur']['date_naissance']?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email :</span><?php  echo $_SESSION['Utilisateur']['email']?></p>
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
    <h5>Historique des Jurons</h1>
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

<form action="../Controller/executeProfil.php">
         <button type="submit">Click me</button>
      </form>


  
     












  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>