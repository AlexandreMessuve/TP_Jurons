<?php
session_start();
require_once "../Modele/Service/DBLogin.class.php";
require_once "../Modele/Service/DBUtilisateurManager.class.php";
require_once "../Modele/function.php";
$login = $_POST['login'];
$password = $_POST['password'];

$statut = DBLogin:: authentification($login, $password);

//test si le status est vrai ou non
if ($statut) {
    $_SESSION['currentUser'] = DBUtilisateurManager::selectUtilisateurByLogin($login);
    $_SESSION['users'] = DBUtilisateurManager::selectUtilisateur();
    $_SESSION['connecte'] = 1;
    header ('Location: ../View/index.php');
} else {
    header ('Location: ../View/loginError.php');
} 

if (est_connecte()) {
    header ('Location: ../View/index.php');
  } 




?>