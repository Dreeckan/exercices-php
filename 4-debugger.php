<?php
/***********************************************************************/
$variable = $_GET['variable'];
    if(isset($variable)) {
        echo '$variable'
    } else {
        echo $_GET['varaible'];
    }
    
// pas de variable entre '' sinon pas interprétée + il faut un ; à la fin de la ligne
// si besoin de guillements les "" marchent
// faute orthographe varaible au lieu de variable
// revient à faire la même chose donc else inutile

$variable = $_GET['variable'];
    if (isset($variable)) {
        echo $variable;
    }

/***********************************************************************/

function UneFonction (int $parametre): int
{
    return $this->parametre * 2;
}

echo UneFonction($parametre = 2);

// pas de majuscule normalement pour une fonction
// le $this pas utile, mettre direct return $parametre * 2
// ne pas mettre une assignation de valeur dans les paramètres d'une fonction
// si c'est un modèle on peut laisser les noms uneFonction et parametre mais dans les faits tjs mettre une vraie désignation

function double(int $number): int
{
    return $number * 2;
}

echo double(2);
// ou $otherNumber = 2;
//    echo double($otherNumber);

/***********************************************************************/