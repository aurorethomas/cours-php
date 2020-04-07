<?php
// ma calculette

$resultat = 0;

//var_dump($argc);
//var_dump($argv);


switch($argv[2]){
    case '+':
        $resultat = $argv[1] + $argv[3];

    case '-':
        $resultat = $argv[1] - $argv[3];

    case '*':
        $resultat = $argv[1] * $argv[3];

    case '/':
        if ($argv[3] == 0)
        {
            $resultat='Diviser par zéro, en voilà une drôle d\'idée';
        }
        else
        {
            $resultat = $argv[1] / $argv[3];
        } 

}   

echo($resultat);
