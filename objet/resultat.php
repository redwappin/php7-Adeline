
<?php
session_start();
require_once(__DIR__.'/src/Protagoniste/Protagoniste.php');
require_once(__DIR__.'/src/Protagoniste/Magicien.php');
require_once(__DIR__.'/src/Protagoniste/Chevalier.php');

if (!isset($_SESSION['history'])) {
   $_SESSION['history'] = [];
}
  $_SESSION['history']= new $_POST['category']($_POST['nom'],$_POST['point_vie']);
  
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Votre Personnage a bien été créé</h1>
                <p>Votre Personnage: <?= $_POST['nom']; ?></p>
                <p>Le type du personnage: <?= $_POST['category']; ?></p>
                <p>Son nombre de points de vie : <?= nl2br($_POST['point_vie']); ?></p>
            </div>
            <?php
            foreach ($_SESSION as $key => $value) {
                var_dump($_SESSION['history']);
            }

            ?>
        </div>
    </main>
