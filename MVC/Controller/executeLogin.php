<?php 

require_once "../Modele/Service/DBLogin.class.php";
$login = $_POST['login'];
$password = $_POST['password'];

$statut = DBLogin:: authentification($login, $password);


if ($statut) {
    echo 'Successfully logged in';
    session_start();
    header ('Location: ../View/tableau.php');
} else {
    echo "error";
}
