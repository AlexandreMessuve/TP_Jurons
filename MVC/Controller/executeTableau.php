<?php
require_once '../Modele/Service/DBCommettreManager.class.php';
require_once '../Modele/function.php';
session_start();

$retard = DBCommettreManager::selectCountRetard();
$petitJurons = DBCommettreManager::selectCountPetitJurons();
$grosJurons = DBCommettreManager::selectCountGrosJurons();
$rot = DBCommettreManager::selectCountRot();
$geste = DBCommettreManager::selectCountGeste();
$total = DBCommettreManager::selectCountTotal();
$json = [];

if (empty($retard) && empty($petitJurons) && empty($grosJurons) && empty($rot) && empty($geste) && empty($total)) {
    $json['success'] = 'no users found';
}else{
    $json = countPenalite($retard, $petitJurons, $grosJurons, $rot, $geste, $total);
    $json['success'] = 'ok';
}
$json['currentUser'] = $_SESSION['currentUser'];
$json['users'] = $_SESSION['users'];
echo json_encode($json);
