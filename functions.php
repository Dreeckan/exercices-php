<?php

function division(int $diviseur, int $divise)
{
    if ($diviseur == 0) {
        return false ;
    } else {
        return $divise/$diviseur;
    }
}


function factorielle($number)
{
    $factorielle = 1;

    for ($i = 1; $i <=$number; $i++) {
        $factorielle = $factorielle * $i;
    }
    return $factorielle;
}
