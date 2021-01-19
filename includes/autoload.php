<?php

/**
 * Charger les fichiers des classes (appeler un require_once) dès qu'on cherche à les appeler
 */
spl_autoload_register(function ($class) {
    // Fix pour les Mac, sans faire planter les Windows ;)
    require_once "classes/$class.php";
});
