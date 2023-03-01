<?php
require_once "../Modele/service/DBUtilisateurManager.class.php";
require_once '../Modele/Utilisateur.class.php';
session_start();



$nomPrenom = DBUtilisateurManager::selectUtilisateurByNom();
$loginEmail = DBUtilisateurManager::selectUtilisateurByLoginEmail();
$modifPrenom = DBUtilisateurManager::updateUtilisateur($Utilisateur);


$donneesUtilisateurLoginEmail = json_decode(json_encode($loginEmail), true);
$donneesUtilisateur = json_decode(json_encode($nomPrenom), true);

// $nom = key($donneesUtilisateur);
// print_r($nom);
$_SESSION['donneesUtilisateurLoginEmail'] = $donneesUtilisateurLoginEmail; 
$_SESSION['donneesUtilisateur'] = $donneesUtilisateur; 

header('Location: ../View/profil.php');

print_r($donneesUtilisateur);
print_r($donneesUtilisateurLoginEmail);
?>


