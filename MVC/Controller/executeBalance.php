<?php

require_once '../Modele/Service/DBCommettreManager.class.php';
require_once '../Modele/Commettre.class.php';

session_start();

//$pena = new Commettre('code_1', 'seb', 'zal');

//DBCommettreManager::insertPenalite($pena);

$total = DBCommettreManager::selectCountInfraction();

print_r($total);


//$tab = json_decode(json_encode($donnees), true);


//$_SESSION["donneesCommettre"] = $tab;



//header('Location: ../View/balance.php');

