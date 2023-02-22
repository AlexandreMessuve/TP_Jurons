<?php
require_once '../Modele/Service/DBUtilisateurManager.class.php';
require_once '../Modele/Service/DBRolesManager.class.php';
require_once '../Modele/Utilisateur.class.php';
require_once '../Modele/Roles.class.php';
$role = DBRolesManager::selectRoles();
$id_role = $role[1]->id_roles;
$type_role = $role[1]->type_roles;
$roles = new Roles($id_role, $type_role);
$utilisateur = new Utilisateur($_POST, $roles);

$status = DButilisateurManager::insertUtilisateur($utilisateur);

if ($status){
    header('Location: ../View/tabeleau.php');
}else{
    echo 'error';
}
