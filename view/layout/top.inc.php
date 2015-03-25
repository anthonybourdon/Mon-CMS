<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My CMS</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/paper/bootstrap.min.css">
</head>
<body>

    <div class="container well">
        <div class="row">
            <header class="col-md-4">
                <h1><a href=".">My CMS</a></h1>
            </header>
            <div class="col-md-8">
                <ul class="nav nav-tabs">
                    <?= $manager->menu() ?>
                </ul>
            </div>
        </div>
    </div>
