<?php
require_once '../Modele/Service/DBUtilisateurManager.class.php';
require_once '../Modele/Service/DBRolesManager.class.php';
require_once '../Modele/Utilisateur.class.php';
require_once '../Modele/Roles.class.php';







$password = 'Pass';

$keyhash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

echo $keyhash;

var_dump(password_verify('Pass', $keyhash));