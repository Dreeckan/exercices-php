<?php
spl_autoload_register(function ($class) {
    // $class = str_replace($class, '\\', '/'); pour Mac et MAMP
    require_once "classes/$class.php";
});
