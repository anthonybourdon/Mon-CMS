<?php
session_start();

include("config/dbConnect.inc.php");
include("config/function.php");

spl_autoload_register('chargerClasse'); //on enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée



if((isset($_POST['login']))&&(isset($_POST['password']))) {
    if(($_POST['login']=="Anthony")&&($_POST['password']=="galice"))
        $_SESSION['admin'] = "Anthony";
}

if(isset($_GET['deconnexion'])){
    if ($_GET['deconnexion']) {
        session_unset();
        session_destroy();
    }
}


if(!isset($_SESSION['admin']))
    header("location: view/admin/auth.php");




$liste="";
$ajout="";
$result = "non"; //sert à stocker une valeur récupérée en jquery pour l'affichage ou non de la fenêtre modale reponseModale.php

$manager = new PageManager();

if(!isset($_GET['admin']))
    $_GET['admin'] = "liste";

$admin = $_GET['admin'];

if($admin=="ajout") {
    $values['id'] = "";
    $values['titre'] = "";
    $values['menuText'] = "";
    $values['contenu'] = "";
    $titre = "Ajout d'une page";
    $ajout = "active";
    $admin = "form";
}
elseif($admin=="modifier") {
    $valeurs = $manager->read($_GET['id']);
    $values['id'] = $valeurs->get_id();
    $values['titre'] = $valeurs->get_titre();
    $values['menuText'] = $valeurs->get_menuText();
    $values['contenu'] = $valeurs->get_contenu();
    $titre = "Modification de la page";
    $liste="active";
    $admin = "form";

    if(isset($_GET['retourModif'])) {
        $result = "oui";
        $titreModale = "Modification d'une page";
        if($_GET['retourModif']=="success")
            $message = "Modification effectuée avec success";
        else
            $message = "Erreur lors de la modification de la page!";
    }
}
else {
    $liste="active";

    if(isset($_GET['retourAjout'])) {
        $result = "oui";
        $titreModale = "Ajout d'une page";
        if($_GET['retourAjout']=="success")
            $message = "Ajout effectué avec success";
        else
            $message = "Erreur lors de l'ajout de la page!";
    }

    if(isset($_GET['retourModif'])) {
        $result = "oui";
        $titreModale = "Modification d'une page";
        if($_GET['retourModif']=="success")
            $message = "Modification effectuée avec success";
    }
}


$idPageDefault = $manager->readList()[0]['id'];


include("view/layout/topAdmin.inc.php");
include("view/admin/" . $admin . ".php");
include("view/admin/modale.php");
include("view/admin/reponseModale.php");
include("view/layout/bottom.inc.php");


?>