<?php

function listeJourLabel(){
    $listejours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    return($listejours);
}

function listeJourIndice(){
    $listeindice = range(1,31);
    return($listeindice);
}

function listeMois(){
    $listemois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
    return($listemois);
}

function listeSeance(){
    $listeseances = array();
    $indice = array(0,2,4);
    for ($i=8;$i<18;$i++){
        foreach ($indice as $j){
            $seance = $i . 'h' . $j . '0';
            array_push($listeseances, $seance);
        }
    }
    return($listeseances);
}

?>