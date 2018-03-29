<?php
require_once(__DIR__.'/src/Protagoniste/Protagoniste.php');
require_once(__DIR__.'/src/Protagoniste/Magicien.php');
require_once(__DIR__.'/src/Protagoniste/Chevalier.php');

$Magicien01 = new Magicien('El Padre',54);
$Chevalier02 = new Chevalier('Adybou',1000);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

    </head>
    <body>
        <h2>Magicien 1</h2>
        <p><?php print $Magicien01; ?></p>
        <p><?php print $Magicien01->Heal($Magicien01,12); ?></p>
        <p><?php print $Magicien01; ?></p>
        <h2>Magicien 2</h2>
        <p><?php print $Chevalier02; ?></p>
        <p><?php print $Chevalier02->Frapper($Magicien01 , 50); ?></p>
        <p><?php print $Chevalier02->Frapper($Magicien01 , 50); ?></p>
    </body>
</html>
