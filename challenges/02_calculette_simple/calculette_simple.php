<?php


if(is_numeric($argv[1]) && is_numeric($argv[3]) && count($argv)==4)
{
    switch ($argv[2])
    {
        case '/':
                if($argv[3]!=0)
                {
                    $total=$argv[1]/$argv[3];
                    print'Le total est:'.$total."\n";
                }
                else
                {
                    print 'Malheureux! Impossible de diviser par 0!';
                }
            break;
        case '+':
            $total=$argv[1]+$argv[3];
            print'Le total est:'.$total."\n";
            break;
        case '-':
            $total=$argv[1]-$argv[3];
            print'Le total est:'.$total."\n";
            break;
        case '*':
            $total=$argv[1]*$argv[3];
            print'Le total est:'.$total."\n";
            break;
        default:
            print 'Opérateur invalide';
            break;
    }
}
else
{
        print'Lopération que vous essayez de faire n\'est pas valide ';
}
