<?php

// Cette fonction permet de récupérer une classe voulue.
spl_autoload_register(function ($class) {
    require_once "classes/$class.php";
});



/**
 * Les fonctions set permettent de modifier les parametres, et le vardump les affiches.
 * Si on souhaite simplement afficher les valeur utiliser la fonction "get()".
 */
$asus = new Computer;
$asus->setComponents([
    "processor" => "ryzen 7",
    "graphic card" => "RX5700XT"
]);
$asus->setDevices([
    "webcam" => "Logitech C920"
]);
$asus->setName("Asus Rog");

var_dump($asus);
