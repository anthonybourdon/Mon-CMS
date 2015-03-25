<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My CMS</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/cyborg/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/layout/css/style.css">
    <link rel="stylesheet" type="text/css" href="lib/css/prettify.css"></link>
    <link rel="stylesheet" type="text/css" href="src/bootstrap-wysihtml5.css"></link>
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet"> -->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

<!-- include summernote css/js-->
<link href="summernote.css" rel="stylesheet">




</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="admin.php">My CMS Administration</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?= "<li class='" . $liste . "'>" ?><a href="admin.php?admin=liste"><span class="glyphicon glyphicon-th-list"> Liste des pages <span class="sr-only">(current)</span></a></li>
        <?= "<li class='" . $ajout . "'>" ?><a href="admin.php?admin=ajout"><span class="glyphicon glyphicon-plus-sign"> Ajouter des pages</a></li>
      </ul>
      <ul class="nav navbar-right">
        <li><a href="admin.php?deconnexion=true">Déconnexion</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
