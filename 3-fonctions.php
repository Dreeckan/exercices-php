<?php

function division(int $diviseur, int $divise)
{
    if ($diviseur == 0) {
        return false;
    }

    return $divise / $diviseur;
}

function factorielleRécursive(int $number)
{
    if ($number > 1) {
        return $number * factorielleRécursive($number - 1);
    } else {
        return 1;
    }
}

function factorielleItérative(int $number)
{
    if ($number > 1) {
        $factorielle = 1;
        for ($i=1 ; $i <= $number ; $i++) {
            $factorielle *= $i;
        }
        return $factorielle;
    } else {
        return 1;
    }
}


var_dump(division(2, 12));
var_dump(factorielleRécursive(4));
var_dump(factorielleItérative(4));
