<?php
// ma calculette

$resultat = 0;
$operateur = $argv[2];
$operande1 = strval($argv[1]);
$operande2 = strval($argv[3]);

//var_dump($argc);
//var_dump($argv);

switch($operateur){
    case '+':
        $resultat = $operande1 + $operande2;
        break;

    case '-':
        $resultat = $operande1 - $operande2;
        break;

    case 'x':
        $resultat = $operande1 * $operande2;
        break;

    case '*':
        $resultat = $operande1 * $operande2;
        break;

    case '/':
        if ($operande2 == 0)
        {
            $resultat='Diviser par zéro, en voilà une drôle d\'idée';
        }
        else
        {
            $resultat = $operande1 / $operande2;
        } 
        break;
}   

echo($resultat);
