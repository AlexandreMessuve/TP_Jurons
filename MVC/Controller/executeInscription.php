<?php
require_once '../Modele/Service/DBUtilisateurManager.class.php';
require_once '../Modele/Service/DBRolesManager.class.php';
require_once '../Modele/Utilisateur.class.php';
require_once '../Modele/Roles.class.php';
$role = DBRolesManager::selectRoles();
$id_role = $role[1]->id_roles;
$type_role = $role[1]->type_roles;
$roles = new Roles($id_role, $type_role);
if (isset($_POST)) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])
        && !empty($_POST['date']) && !empty($_POST['login']) && !empty($_POST['password'])) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Email address non valide";
        }
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $email = $_POST['email'];
        $login = strip_tags($_POST['login']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $date = $_POST['date'];
        $utilisateur = new Utilisateur($nom, $prenom, $date, $login, $email, $password, $roles);
        $status = DButilisateurManager::insertUtilisateur($utilisateur);
        if ($status){
            header('Location: ../View/login.php');
        }else{
            echo 'Impossible de vous inscrire';
        }
    }else{
        echo "Erreur le formulaire n'est pas remplis";
    }
}





