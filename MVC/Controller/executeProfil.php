<?php
require_once "../Modele/service/DBUtilisateurManager.class.php";
require_once '../Modele/Utilisateur.class.php';
session_start();
$login = "antho";

$Utilisateur = DBUtilisateurManager::selectUtilisateurByLogin($login);

$Utilisateur = json_decode(json_encode($Utilisateur), true);

$_SESSION['Utilisateur'] = $Utilisateur; 

header('Location: ../View/profil.php');

print_r($Utilisateur);

?>
