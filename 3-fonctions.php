<?php 
var_dump(division(0, 5));
var_dump(division(45, 55274));
var_dump(division(2, 54));
var_dump(division(5, 1));
var_dump(division(1, 45));

var_dump(factorielle(15));
var_dump(factorielle(1));
var_dump(factorielle(0));
var_dump(factorielle(5));

function division(int $diviseur, int $divise)
{
    if ($diviseur == 0) return false;
    return (float) $divise / $diviseur;
}

function factorielle(int $number){
    $total = 1;
    for ($i = 1; $i <= $number; $i++) {
        $total *= $i;
    }
    return $total;
}

?>