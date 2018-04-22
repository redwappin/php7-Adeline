<?php
$firstname='adybou';
$firstname=strtoupper($firstname);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style media="screen">
            h1{
                color:#088A85;
            }
        </style>
    </head>
    <body>
        <h1>
            Hello <?= $firstname; ?>
        </h1>
    </body>
</html>
