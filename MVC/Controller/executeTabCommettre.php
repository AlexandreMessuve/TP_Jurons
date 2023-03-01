<?php
require_once '../Modele/Service/DBCommettreManager.class.php';
session_start();

$json = [];

$penalitys = DBCommettreManager::selectAllPenalitys();


if (empty($json)) {
     $json = ['success' => 'erreur'];
}if(!empty($json)){
    $json = [
        'penalitys' => $penalitys,
        'success' => 'ok'
    ];


}

echo json_encode($json);