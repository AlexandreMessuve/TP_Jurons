<?php
session_start();
require_once "../Modele/Service/DBLogin.class.php";
$login = $_POST['login'];
$password = $_POST['password'];

$statut = DBLogin:: authentification($login, $password);


if ($statut) {
    echo 'Successfully logged in';
    header ('Location: ../View/tableau.php');

} else{
    echo "error";
}