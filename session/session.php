<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Dump de la session sans toucher à l'historique</h1>

        <pre>
            <?php print_r($_SESSION); ?>
        </pre>
    </body>
</html>
