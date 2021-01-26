<?php
    //
    //
    // Corriger les erreurs et les mauvaises pratiques dans l'extrait de code suivant
    //
    //
    $variable = '';
    if (isset($_GET['variable'])) {
        $variable = $_GET['variable'];
    }
    echo $variable;

    /**
     * @param int $parametre
     *
     * @return int
     */
    function uneFonction(int $parametre): int
    {
        return $parametre * 2;
    }

    echo uneFonction(2);


//
//
// Ajouter des commentaires pour dire ce que retournent les appels de fonctions suivants (s'ils renvoient une erreur, marquer "une erreur" et expliquer pourquoi) :
//
//
echo openBook(6); // test6
echo openBook(10); // Une erreur (index 10 n'existe pas)
echo openBook(5); // un intrus


function openBook($page) {
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
