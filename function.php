<?php
/*

## 3 Concevoir des fonctions


- []Créer une fonction factorielle qui calcule la factorielle jusqu'au paramètre donné

  prend le paramètre number (nombre entier)
  renvoie le résultat du calcul de la factorielle (si number vaut 0, renvoyer 1) (voir l'article Wikipedia pour le calcul)
  indice : vous n'êtes pas obligés d'utiliser une méthode récursive ;)

- []Faire un commit

*/

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
