<?php

// Cette fonction permet de récupérer une classe voulue.

use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;

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

$msi = new Desktop;
$msi->setComponents([
    "processor" => "intel 7",
    "graphic card" => "2080ti"
]);
$msi->setDevices([
    "webcam" => "monvier"
]);
$msi->setName("Msi RGB");

$macBook = new Laptop;
$macBook->setComponents([
    "processor" => "M1",
    "graphic card" => "Apple Card"
]);
$macBook->setDevices([
    "webcam" => "AppleCam"
]);
$macBook->setName("Mac Book pro");

$galaxyTab = new Tablet;
$galaxyTab->setComponents([
    "processor" => "S1",
    "graphic card" => "Samsung Card"
]);
$galaxyTab->setDevices([
    "webcam" => "Camsung"
]);

$galaxyTab->setName("Galaxy Tab 8");

var_dump($asus, $msi, $macBook, $galaxyTab);
