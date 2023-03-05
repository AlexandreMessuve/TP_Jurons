<?php

require_once "../Modele/service/DBRolesManager.class.php";
require_once "../Modele/service/DBUtilisateurManager.class.php";
require_once '../Modele/Utilisateur.class.php';
require_once '../Modele/Roles.class.php';
session_start();

$id_role = $_SESSION['currentUser']->id_roles;
$role = DBRolesManager::selectRolesByType($id_role); 
$roles = new Roles($id_role, $role->type_roles);
$login = $_SESSION['currentUser']->login_user; 



if (isset($_POST)) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])
        && !empty($_POST['date']) && !empty($login) && !empty($_REQUEST['password'])) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Email address non valide";
        }
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $date = $_POST['date'];
        $utilisateur = new Utilisateur($nom, $prenom, $date, $login, $email, $password, $roles);
        $status = DButilisateurManager::updateUtilisateur($utilisateur);
        if ($status){
            echo 'vos info on bien etait changer';
        }else{
            echo 'Impossible de changez vos info';
        }
    }else{
        echo "Erreur le formulaire n'est pas remplis";
    }
}


?>