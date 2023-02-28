<?php
require_once "../Modele/service/DBUtilisateurManager.class.php";

session_start();

$nomPrenom = DBUtilisateurManager::selectUtilisateurByNom();

$donneesUtilisateur = json_decode(json_encode($nomPrenom), true);

// $nom = key($donneesUtilisateur);
// print_r($nom);
$_SESSION['donneesUtilisateur'] = $donneesUtilisateur; 

header('Location: ../View/profil.php');

?>


