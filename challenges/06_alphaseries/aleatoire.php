<?php

    require_once(__DIR__.'/src/functions.php');
    $slug = RandomSerie()['slug'];
    header('Location: /php7-Adeline/challenges/06_alphaseries/serie.php?slug='.$slug);
 ?>
