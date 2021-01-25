<?php

function division($divise, $diviseur)
{
    if($diviseur == 0)
    {
       $resultat = false;
    } else {
        $resultat = $divise / $diviseur;
    }

    return $resultat;
}


function factorielle($number)
{
    if ($number > 1)
    {
      $y = 1;
    
    for ($i = 1; $i < $number; $i++)
    {
        $y = $y * $i;
    }  
    return $y;
    } else {
        return 1;
    } 
}

var_dump(factorielle(6));