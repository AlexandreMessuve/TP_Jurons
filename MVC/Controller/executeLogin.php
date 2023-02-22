<?php 

require_once "../Modele/Service/DBLogin.class.php";

$statut = DBLogin:: authentification($_POST);

if ($statut) {
    header ("Location :../View/tableau.php");
} else {
    echo "error";
}


?>