<?php

 require_once(__DIR__.'/array_rand.php');
function insultron() {
    $adjectifs1 = arrayRand(require(__DIR__.'/../data/adjectifs1.php'));
    $nom = arrayRand(require(__DIR__.'/../data/nom.php'));
    $adjectif2 = arrayRand(require(__DIR__.'/../data/adjectif2.php'));


    return sprintf(
       "Tu es %s comme %s %s.\n",
        $adjectifs1,
        $nom,
        $adjectif2
    );

}?>
