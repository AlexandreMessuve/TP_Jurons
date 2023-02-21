<?php
require_once "../Modele/Utilisateur.class.php";
require_once "../Modele/Roles.class.php";
require_once "../Modele/Service/DBManager.class.php";

$listRole = DBManager::selectRole();
$adminRole = new Roles($listRole[0]);
$admin = new Utilisateur('Afhim', 'Moussa' ,'1980-05-01' , 'admin' , 'admin' ,$adminRole);

$status = DBManager::insertUtilisateur($admin);

if ($status) {
    echo 'Utilisateur ajouté';
}else{
    echo 'Erreur';
}


