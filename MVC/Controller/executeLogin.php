<?php 

require_once "../Modele/Service/DBLogin.class.php";
require_once "../Modele/Service/DBUtilisateurManager.class.php";
$login = $_POST['login'];
$password = $_POST['password'];

$statut = DBLogin:: authentification($login, $password);


if ($statut) {
    echo 'Successfully logged in';
    session_start();
    $_SESSION['login'] = DBUtilisateurManager::selectUtilisateurByLogin($login);
    $_SESSION['users'] = DBUtilisateurManager::selectUtilisateur();
    header ('Location: ../View/tableau.php');
} else {
    echo "error";
}