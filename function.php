<?php

function diviseur(int $diviseur, int $divise)
{
    return $diviseur == 0 ? false : $divise / $diviseur;
}

var_dump(diviseur(2, 10));


function factorielle($num, $mult = 1)
{
    if ($num == 0) {
        return $mult;
    } else {
        return factorielle($num - 1, $mult * $num);
    };
};

var_dump(factorielle(5));

    if (isset($_GET['variable'])) { // pour supprimer l'erreur car $_GET['variable'] n'existe pas
        $variable = $_GET['variable'];
        if (isset($variable)) {
            echo $variable;
        } else {
            echo $_GET['variable'];
        }
    }

    //peut etre que $parametre = 2 en amont de la fonction aurais été mieux ? ou simplement 2 :|
    function uneFonction(int $parametre): int
    {
        return $parametre * 2;
    }
    
    echo uneFonction($parametre = 2);
