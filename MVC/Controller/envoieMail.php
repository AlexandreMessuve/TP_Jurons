<?php
$nom = 'Messuve';
$prenom = 'Alexandre';


$to = "oneshoot59@gmail.com";
$subject = "Tu as été balancé(e)";
$headers = "From: boiteajurons@gmail.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
;

$message = "<html><body><img height='200' width='auto' src='https://www.zupimages.net/up/23/09/g7ms.png' alt='logo boite a jurons'/>";
$message .= "<h1>".strtoupper($nom) . ' ' . $prenom . "</h1>";
$message .= "que tu as dit une insulte, un geste, si litige il y a veuillez nous en faire part.\n".
            "Ceci est un mail automatique veuillez ne pas y répondre\n"."Cordialement\n" .
            "Boite_a_jurons";
$message .= "</body></html>";


if (mail($to, $subject, $message, $headers)){
    echo "Email envoyé";
}else{
    echo "Problème";
}



