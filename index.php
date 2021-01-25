<?php 

$variable = $_GET['variable'];
    if(isset($variable)) {
        echo $variable;
    } else {
        echo $_GET['variable'];
    }

 function uneFonction (int $parametre): int
    {
        return $parametre * 2;
    }

uneFonction($parametre = 2);

