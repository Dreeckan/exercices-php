<?php

$variable = $_GET['variable'];
    if (isset($_GET['variable']) {
        echo $variable;
    }
// j'ai l'impression que les deux echos affichent la même chose, du coup, un seul echo (bien écrit) suffit
// ou alors tu voulais que y'en ai un qui renvoie la string "$variable" ¯\_(ツ)_/¯


function UneFonction (int $parametre): int
{
    return $parametre * 2;
}

$parametre = 2;
$returnedValue = UneFonction($parametre);
echo $returnedValue;


//
//
// Ajouter des commentaires pour dire ce que retournent les appels de fonctions suivants (s'ils renvoient une erreur, marquer "une erreur" et expliquer pourquoi) :
//
//echo openBook(6); // test6
//echo openBook(10); // erreur car il n'y a pas dix éléments dans le tableau
//echo openBook(5); // test5


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