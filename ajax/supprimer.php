<?php

include("../config/dbConnect.inc.php");
include("../config/function.php");

include("../model/Base.php");
include("../model/PageManager.php");

if(isset($_POST['data'])) {
    $manager = new PageManager();
    if($manager->delete($_POST['data']))
        echo "Page supprimée";
    else
        echo "Erreur lors de la suppression de la page";
}