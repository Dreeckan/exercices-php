<?php

var_dump(division(2, 4));
var_dump(division(6, 10));
var_dump(division(54643543, 4354354354));
var_dump(division(54643543, 0));

var_dump(factorielle(0));
var_dump(factorielle(6));
var_dump(factorielle(10));

var_dump(factorielleRecursive(0));
var_dump(factorielleRecursive(6));
var_dump(factorielleRecursive(10));


/**
 * @param int $divise
 * @param int $diviseur
 *
 * @return float|bool
 */
function division(int $divise, int $diviseur)
{
    if ($diviseur == 0) {
        return false;
    }
    return $divise / $diviseur;
}

/**
 * @param int $number
 *
 * @return int
 */
function factorielle(int $number): int
{
    $total = 1;
    for ($i = 1; $i <= $number; $i++) {
        $total *= $i;
    }
    return $total;
}

/**
 * @param int $number
 *
 * @return int
 */
function factorielleRecursive(int $number): int
{
    if ($number > 1) {
        return $number * factorielleRecursive($number - 1);
    }
    return 1;
}