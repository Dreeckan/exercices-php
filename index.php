<?php

// Cette fonction permet de récupérer une classe voulue.

use Component\Cpu;
use Component\GraphiCard;
use Component\Motherboard;
use Component\Ram;
use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;
use Device\Keyboard;
use Validator\ComputerValidator;
use Classes\Computer;

spl_autoload_register(function ($class) {
    require_once "classes/$class.php";
});



/**
 * Les fonctions set permettent de modifier les parametres, et le vardump les affiches.
 * Si on souhaite simplement afficher les valeur utiliser la fonction "get()".
 */

//configurer les parametres de l'objet Keyboard
$keyboard = new Keyboard;
$keyboard->setBrand("Logitech");
$keyboard->setName("G10");
$keyboard->setFormat("azerty");

//configuer les parametres de l'objet motherboard
$motherboard = new Motherboard;
$motherboard->setChipset("AMD");
$motherboard->setBrand("Asus");
$motherboard->setName("b450");

//configuer les parametres de l'objet cpu
$cpu = new Cpu;
$cpu->setFrequence("4.2Ghz");
$cpu->setBrand("AMD");
$cpu->setName("Ryzen 7");

//configuer les parametres de l'objet graphicard
$graphiCard = new GraphiCard;
$graphiCard->setVideoRam("8go");
$graphiCard->setBrand("MSI");
$graphiCard->setName("rx5700xt");

//configuer les parametres de l'objet ram
$ram = new Ram;
$ram->setMemoire("4x4go");
$ram->setBrand("Corsair");
$ram->setName("RGB");

//Cette variable est un tableau qui contient tous les composants.
$composant = [
    $motherboard,
    $cpu,
    $graphiCard,
    $ram
];

//Cette variable est un tableau qui contient tous les devices.
$peripherique = [
    $keyboard
];

$msi = new Desktop;
$msi->setComponents($composant);
$msi->setDevices($peripherique);
$msi->setName("Msi RGB");

$macBook = new Laptop;
$macBook->setComponents($composant);
$macBook->setDevices($peripherique);
$macBook->setName("Mac Book pro");

$galaxyTab = new Tablet;
$galaxyTab->setComponents($composant);
$galaxyTab->setDevices($peripherique);
$galaxyTab->setName("Galaxy Tab 8");

$validator = new ComputerValidator;
$validator->validate($msi);

echo json_encode($msi);
echo json_encode($macBook);
echo json_encode($galaxyTab);
