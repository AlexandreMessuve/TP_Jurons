<?php
session_start();
require_once '../Modele/Service/DBCommettreManager.class.php';
require_once '../Modele/Commettre.class.php';

if (empty($_REQUEST['loginCommettre'] || empty($_REQUEST['codeInfraction']))) {
    echo 'erreur';
}if (!empty($_REQUEST['loginCommettre'] && !empty($_REQUEST['codeInfraction']))) {
    $loginBalance = $_SESSION['currentUser']->login_utilisateur;
    $loginCommettre = $_REQUEST['loginCommettre'];
    $codeInfraction = $_REQUEST['codeInfraction'];

    $balance = new Commettre($codeInfraction, $loginCommettre ,$loginBalance);

    $status = DBCommettreManager::insertPenalite($balance);

    if ($status){
        echo 'ok';
    }else{
        echo 'erreur';
    }
}



