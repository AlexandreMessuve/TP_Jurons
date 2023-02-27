<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/assets/css/balanceStyle.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php session_start ()?>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">La boite a jurons</h5>
      <div class="profil">
        <img class="imgProfil" src="../View/assets/charte/utilisateur.png">
      </div>

    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

<div class="parent">

<div class="div1">



</div>







<div class="div2"> 

<table>

  <tr>
    <th><strong>Code Infraction </strong></th>
    <th><strong>Login utilisateur</strong></th>
    <th><strong>Login balance</strong></th> <br>
    <th><strong>Date_infraction</strong></th> <br>
  </tr>

  <?php  for ($i = 0; $i < count($_SESSION["donneesCommettre"]); $i++)  {?>


<tr>
  <td><?php  echo $_SESSION['donneesCommettre'][$i]['code_infraction']?></td>
  <td><?php  echo $_SESSION['donneesCommettre'][$i]['login_utilisateur']?></td>
  <td><?php  echo $_SESSION['donneesCommettre'][$i]['login_balance']?></td><br>
  <td><?php  echo $_SESSION['donneesCommettre'][$i]['date_infraction']?></td><br>
</tr>

<?php   } ?>
</div>
<div class="div3"> </div>
<div class="div4"> </div>
</div>



</table>







<div class="div2"> </div>
<div class="div3"> </div>
<div class="div4"> </div>
</div>


</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>