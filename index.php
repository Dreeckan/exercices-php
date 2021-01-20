<?php

require_once 'includes/autoload.php';

use Validator\ComputerValidator;

//Instancier les objets component

$cpu = new Component\Cpu();
$cpu->setName('Ryzen 9');
$cpu->setBrand('AMD');

$graphicCard = new Component\GraphicCard();
$graphicCard->setName('Nvidia GeForce GTX 3080');
$graphicCard->setBrand('Gigabyte');

$motherBoard = new Component\MotherBoard();
$motherBoard->setName('B450-F GAMING');
$motherBoard->setBrand('Asus STRIX');

$ram = new Component\Ram();
$ram->setName('vengeance LPX Series Low Profile 32 Go');
$ram->setBrand('Corsair');

//Instancier les objets device

$keyboard = new Device\Keyboard();
$keyboard->setName('G513 Carbone');
$keyboard->setBrand('Logitech');

$mouse = new Device\Mouse();
$mouse->setName('Kova');
$mouse->setBrand('Roccat');

$speaker = new Device\Speaker();
$speaker->setName('Leviathan 5.1 Noir');
$speaker->setBrand('Razer');

$components =[
    $cpu,
    $motherBoard,
    $graphicCard,
    $ram
];

$devices = [
    $keyboard,
    $mouse,
    $speaker
];

//Instancier les objets computer

$desktop = new Computer\Desktop();
$desktop->setComponents([$components]);
$desktop->setDevices([$devices]);
$desktop->setName('HP Omen 870-211nf');

$laptop = new Computer\Laptop();
$laptop->setComponents([$components]);
$laptop->setDevices([$devices]);
$laptop->setName('Hp EliteBook 820 G1');

$tablet = new Computer\Tablet();
$tablet->setComponents([$components]);
$tablet->setDevices([$devices]);
$tablet->setName('iPad');

$validator = new ComputerValidator;
$validator->validate($desktop);

$validator1 = new ComputerValidator;
$validator1->validate($laptop);

$validator2 = new ComputerValidator;
$validator2->validate($tablet);


var_dump($validator->validate($desktop));
var_dump($validator->validate($laptop));
var_dump($validator->validate($tablet));
