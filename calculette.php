<?php
// ma calculette

$resultat = 0;
$operateur = $argv[2];
$operande1 = strval($argv[1]);
$operande2 = strval($argv[3]);

//var_dump($argc);
//var_dump($argv);

function additionner($valeur1, $valeur2){
    $addition = $valeur1 + $valeur2;
    return $addition;
}

function soustraire($valeur1, $valeur2){
    $soustraction = $valeur1 - $valeur2;
    return $soustraction;
}

function multiplier($valeur1, $valeur2){
    $multiplication = $valeur1 * $valeur2;
    return $multiplication;
}

function diviser($numerateur, $denominateur){
    if ($denominateur == 0)
        {
            $division = 'Diviser par zéro, en voilà une drôle d\'idée';
        }
        else
        {
            $division = $numerateur / $denominateur;
        } 
    return $division;
}


switch($operateur){
    case '+':
        $resultat = additionner($operande1, $operande2);
        break;

    case '-':
        $resultat = soustraire($operande1, $operande2);
        break;

    case 'x':
        $resultat = multiplier($operande1, $operande2);
        break;

    case '*':
        $resultat = multiplier($operande1, $operande2);
        break;

    case '/':
        $resultat = diviser($operande1, $operande2);
        break;
}   

echo($resultat);
