<?php
//
//
// Corriger les erreurs et les mauvaises pratiques dans l'extrait de code suivant
//
//
$variable = $_GET['variable'];
if (isset($variable)) {
    echo '$variable';
} else {
    echo $_GET['varaible'];
}

function UneFonction(int $parametre): int
{
    return $parametre * 2;
}

echo UneFonction(2);


//
//
// Ajouter des commentaires pour dire ce que retournent les appels de fonctions suivants (s'ils renvoient une erreur, marquer "une erreur" et expliquer pourquoi) :
//
//
echo openBook(6); // renvoi 'test6'
echo openBook(10); // renvoi une erreur car le tableau s'arrete à 9
echo openBook(5); // renvoi 'un intrus'


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
