<?php

$variable = $_GET['variable'];
    echo $variable;
// j'ai l'impression que les deux echos affichent la même chose, du coup, un seul echo (bien écrit) suffit
// ou alors tu voulais que y'en ai un qui renvoie la string "$variable" ¯\_(ツ)_/¯


function UneFonction (int $parametre): int
{
    return $parametre * 2;
}

$parametre = 2;
UneFonction($parametre);
echo $parametre;


// je sais pas si j'ai bien compris l'exo, j'ai vraiment tout changer pour que les fonctions.... fonctionnent...
// du coup, si je les "test" ca devrait pas sortir d'erreurs ^^'