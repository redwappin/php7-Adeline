<?php

$mode=$argv[1];
$temp=$argv[2];

if(count($argv)==3 && is_numeric($temp))
{
    switch($mode)
    {
        case 1:
            $temp=$temp*(9/5);
            print "Température Degrés Celsius-Farenheit : ".$temp;
        break;
        case 2:
            $temp= ($temp-32)*5/9;
            print "Température Degrés Farenheit-Celsius : ".$temp;
        break;
        default:
            print " Il n'y a que deux modes possible veuillez choisir 1 ou 2";
        break;
    }
}

else
{
    print "Soit il n'y a pas le bon nombre d'arguments soit la température que vous souhaitez convertir n'est pas un nombre! Veuillez recommencer";
}
