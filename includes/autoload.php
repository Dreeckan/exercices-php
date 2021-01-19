<?php

//Explique comment les classe vont etres chargés
spl_autoload_register(function ($class) {
    require_once "classes/$class.php";
});
