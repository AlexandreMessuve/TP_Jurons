<?php

$to = "baptiste.caron59@gmail.com";
$subject = "Tu as été balancé(e)";
$message = "Quelqu'un a balancé que tu as dit une insulte, un geste, si litige il y a veuillez nous en faire part.\n".
            "Ceci est un mail automatique veuillez ne pas y répondre\n"."Cordialement\n" .
            "Boite_a_jurons";


if (mail($to, $subject, $message)){
    echo "Email envoyé";
}else{
    echo "Problème";
}



