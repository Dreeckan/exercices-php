<?php
// spl_autoload_register — Enregistre une fonction en tant qu'implémentation de __autoload()

spl_autoload_register(function ($class) {
    require_once "classes/$class.php";
});

