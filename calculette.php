<?php
// ma calculette

$resultat = 0;
$operande1 = $argv[1];
$operande2 = $argv[3];
$operateur = $argv[2];

//var_dump($argc);
//var_dump($argv);


switch($operateur){
    case '+':
        $resultat = $operande1 + $operande2;

    case '-':
        $resultat = $operande1 - $operande2;

    case '*':
        $resultat = $operande1 * $operande2;

    case '/':
        if ($operande2 == 0)
        {
            $resultat='Diviser par zéro, en voilà une drôle d\'idée';
        }
        else
        {
            $resultat = $operande1 / $operande2;
        } 

}   

echo($resultat);
