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

echo openBook(6); // test6
echo openBook(10); // erreur car l'index 10 n'existe pas dans ce tableau
echo openBook(5); // test5


function openBook($page)
{
    $tab = [
        'test',
        'test2',
        'test3',
        'test4',
        'un intrus',
        'test5',
        'test6',
        'test7',
        'test8',
    ];
    return $tab[$page];
}

/***********************************************************************/