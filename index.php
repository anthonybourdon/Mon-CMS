<?php

include("config/dbConnect.inc.php");
include("config/function.php");
spl_autoload_register('chargerClasse'); //on enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée

$manager = new PageManager();
$idPageDefault = $manager->readList()[0]['urlSlug'];    //recherche par l'urlSlug et non plus par l'id

print_r($_GET['page']);
if(!isset($_GET['page']))
    $_GET['page']=$idPageDefault;


$page=$manager->readUrlSlug($_GET['page']);


include("view/layout/top.inc.php");
include("view/front/page.php");
include("view/layout/bottom.inc.php");


?>


