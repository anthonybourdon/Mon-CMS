<?php

function chargerClasse($classe) {

    $classFile = "controller/".$classe.".php";
    if(file_exists($classFile))
        include $classFile;
    else
        include "model/".$classe.".php";
}

function chargerClasseAdmin($classe) {

    $classFile = "../controller/".$classe.".php";
    if(file_exists($classFile))
        include $classFile;
    else
        include "../model/".$classe.".php";
}

?>