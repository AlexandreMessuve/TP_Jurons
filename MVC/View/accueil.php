<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/accueilStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <?php session_start() ?>

    <?php
    require '../Modele/auth.php';
    if (!est_connecte()) {
        header('Location: login.php');
        exit();
    }
    ?>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-md-none d-xs-block py-3" href="#">
                <img src="/static_files/images/logos/beer_white.png" height="40" alt="Company Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="accueil.php">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2" href="graphique.php">Le graphique des jurons</a>
                    </li>
                    <form enctype="multipart/form-data" action="../Controller/executeBalance.php" method="post">
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="../Controller/executeBalance.php">Historique des balances</a>
                        </li>
                    </form>

                    <li class="nav-item">
                        <a class="nav-link mx-2" href="tableau.php">Le tableau des utilisateurs</a>
                    </li>
                    </li>
                    <form enctype="multipart/form-data" action="../Controller/executeBalance.php" method="post">
                    <li class="nav-item">
                            <a class="nav-link mx-2" href="../Controller/executeProfil.php">Mon profil</a>
                        </li>
                    </form>
                    <?php if (est_connecte()): ?>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="../Controller/executeLogout.php">Se déconnecter</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>






    <div class="logo">
        <img src="./assets/img/boiteajurons.png" alt="La boite à jurons">
    </div>

    <div class="item">
        <div class="loader-pulse"></div>
    </div>

    <!-- Jumbotron -->
    <div class="p-5 text-center ">
        <h1 class="mb-3">Bienvenue ! </h1>
        <h4 class="mb-3">Merde, fais chier, putain de bordel de merde, etc... Toi aussi tu es un vrai coureur de
            jurons ?</h4>
    </div>
    <!-- Jumbotron -->




    <footer class="text-center text-white fixed-bottom" style="background-color: #673ab7">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="https://www.afpa.fr/">Afpa.fr</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>