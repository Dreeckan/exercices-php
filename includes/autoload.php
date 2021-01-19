<?php

// la fonction 'spl_autoload_register' sert à créer automatiquement des fonctions d'autochargement et les exécutes 1 à 1 dans l'ordre
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once "classes/$class.php";
});
