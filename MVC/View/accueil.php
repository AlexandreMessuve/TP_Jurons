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

    <nav class="navbar navbar-dark fixed-top" style="background-color: #000000">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="profil.php">Mon profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inscription.html">S'inscrire</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Que souhaitez vous consulter ?
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="graphique.html">Le graphique des jurons</a></li>
                                <li><a class="dropdown-item" href="tableau.php">Le tableau des utilisateurs</a></li>
                                <li><a class="dropdown-item" href="balance.php">Historique des balances</a></li>
                            </ul>
                        </li>
                    </ul>
                    </form>
                </div>
            </div>
        </div>
    </nav>


        <div class="logo">
            <img src="./assets/img/boiteajurons.png" alt="La boite à jurons">
        </div>

        <!-- Jumbotron -->
        <div class="p-5 text-center ">
            <h1 class="mb-3">Bienvenue ! </h1>
            <h4 class="mb-3">Merde, fais chier, putain de bordel de merde, etc... Toi aussi tu es un vrai coureur de
                jurons ?</h4>
            <div class="boutons">
                <form enctype="multipart/form-data" action="../Controller/executeBalance.php" method="post">
                    <button id="bouton2" style="width: 30em;" type="submit">Voir le tableau des balances</button>
                </form>
            </div>
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