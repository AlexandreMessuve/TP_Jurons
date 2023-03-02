<?php

function countPenalite(array $retard, array $petitJurons, array $grosJurons, array $rot, array $geste, array $total): array {
    $array = [];
    for ($i = 0; $i < count($total); $i++) {
        if (!empty($total[$i])) {
            $array['data'][$i]['nom'] = $total[$i]->nom;
            $array['data'][$i]['prenom'] = $total[$i]->prenom;
            $array['data'][$i]['total'] = $total[$i]->total;



            if(!empty($retard)) {
                $statusRetard = false;
                for ($j = 0; $j < count($retard); $j++) {
                    if ($retard[$j]->login_utilisateur === $total[$i]->login_utilisateur) {
                        $valRetard = $retard[$j]->countInfra;
                        $statusRetard = true;
                    }
                }if ($statusRetard){
                    $array['data'][$i]['retard'] = $valRetard;
                }else{
                    $array['data'][$i]['retard'] = 0;
                }
            }if (empty($retard)){
                $array['data'][$i]['retard'] = 0;
            }
            if (!empty($petitJurons)) {
                $statusPetit = false;
                for ($j = 0; $j < count($petitJurons); $j++) {
                    if ($petitJurons[$j]->login_utilisateur === $total[$i]->login_utilisateur) {
                        $valPetit = $petitJurons[$j]->countInfra;
                        $statusPetit = true;
                    }
                }if ($statusPetit){
                    $array['data'][$i]['petit'] = $valPetit;
                }else{
                    $array['data'][$i]['petit'] = 0;
                }
            }if (empty($petitJurons)){
                $array['data'][$i]['petit'] = 0;
            }
            if (!empty($grosJurons)) {
                $statusGros = false;
                for ($j = 0; $j < count($grosJurons); $j++) {
                    if ($grosJurons[$j]->login_utilisateur === $total[$i]->login_utilisateur) {
                        $valGros = $grosJurons[$j]->countInfra;
                        $statusGros = true;
                    }
                }if ($statusGros){
                    $array['data'][$i]['gros'] = $valGros;
                }else{
                    $array['data'][$i]['gros'] = 0;
                }
            }if (empty($grosJurons)) {
                $array['data'][$i]['gros'] = 0;
            }
            if (!empty($rot)) {
                $statusRot = false;
                for ($j = 0; $j < count($rot); $j++) {
                    if ($rot[$j]->login_utilisateur === $total[$i]->login_utilisateur) {
                        $valRot = $rot[$j]->countInfra;
                        $statusRot = true;
                    }
                }if ($statusRot){
                    $array['data'][$i]['rot'] = $valRot;
                }else {
                    $array['data'][$i]['rot'] = 0;
                }
            }if (empty($rot)) {
                $array['data'][$i]['rot'] = 0;
            }
            if (!empty($geste)) {
                $statusGeste = false;
                for ($j = 0; $j < count($geste); $j++) {
                    if ($geste[$j]->login_utilisateur === $total[$i]->login_utilisateur) {
                        $valGeste = $geste[$j]->countInfra;
                        $statusGeste = true;
                    }
                }if ($statusGeste){
                    $array['data'][$i]['geste'] = $valGeste;
                }else {
                    $array['data'][$i]['geste'] = 0;
                }
            }if (empty($geste)) {
                $array['data'][$i]['geste'] = 0;
            }
        }
    }
    return $array;
}


function est_connecte() : bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
    }


function forcer_utilisateur_connecte () : void {
    if (!est_connecte()) {
        header('Location: login.php');
        exit();
    }
}