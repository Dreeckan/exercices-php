<?php

function divide (int $diviseur, int $divise)
{
    if ($diviseur == 0) {
        return false;
    } else {
        $resultat = $divise / $diviseur
        return $resultat;
    }
}

function factor (int $number)
{
    if ($number == 0) {
        return 1;
    } else {
        $resultat = $number * factor($number - 1)
        return $resultat;
    }
}