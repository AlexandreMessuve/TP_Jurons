<?php
require_once "../Modele/service/DBRolesManager.class.php";
require_once "../Modele/service/DBUtilisateurManager.class.php";
require_once '../Modele/Utilisateur.class.php';
require_once '../Modele/Roles.class.php';
session_start();

/*
$loginMofif = $_POST['login'];
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['date_naissance'];
*/

header('Location: ../View/profil.php');

print_r($Utilisateur);

?>
