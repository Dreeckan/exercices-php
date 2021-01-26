<?php
function division($diviseur, $divisé)
{
    $resultat = $diviseur / $divisé;

    if ($diviseur = 0) {
        return false;
    } else {
        return $resultat;
    }
}

function factorielle(int $number)
{
    $resultatFactorielle = 1;
    for ($i = $number; $i > 1; $i--) {
        $resultatFactorielle = $i * $resultatFactorielle;
    }
    return $resultatFactorielle;


    // if ($number > 1) {
    //     $resultatFactorielle = $number * factorielle($number - 1);
    //     return $resultatFactorielle;
    // } else {
    //     return 1;
    // }
}

var_dump(factorielle(100));
