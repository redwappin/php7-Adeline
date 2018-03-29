
<?php
session_start();

if (!isset($_SESSION['history'])) {
   $_SESSION['history'] = [];
}
$mail ='Anonyme@gmail.com';
if (isset($_GET['mail'])) {
    $mail = $_GET['mail'];
}

$_SESSION['history'][] = sprintf(
   'Heure : %s - %s',
    date('H:i:s'),
    $mail
);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Session</h1>

        <pre>
            <?php print_r($_SESSION); ?>
        </pre>
    </body>
</html>
