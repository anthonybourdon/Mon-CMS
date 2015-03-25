<?php

include("../config/dbConnect.inc.php");
include("../config/function.php");
spl_autoload_register('chargerClasseAdmin'); //on enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée

$manager = new PageManager();
$valeurs['id'] = $_POST['id'];
$valeurs['titre'] = $_POST['titre'];
$valeurs['menuText'] = $_POST['textMenu'];
$valeurs['contenu'] = $_POST['contenu'];

//$valeurs['urlSlug'] = "";
$page = new Page($valeurs);


if(empty($valeurs['id'])) {
    if($manager->create($page)==true)
        header("location: ../admin.php?retourAjout=success");
    else
        header("location: ../admin.php?admin=modifier&retourAjout=erreur");
}
else {
    if($manager->update($page)==true)

        header("location: ../admin.php?retourModif=success");
    else
        header("location: ../admin.php?admin=modifier&retourModif=erreur&id=" . $valeurs['id']);
}

?>


