<?php

require_once 'includes/autoload.php';

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

//Instancier les objets computer

$desktop = new Computer\Desktop();
$desktop->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$desktop->setDevices([$keyboard, $mouse, $speaker]);
$desktop->setName('HP Omen 870-211nf');

$laptop = new Computer\Laptop();
$laptop->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$laptop->setDevices([$keyboard, $mouse, $speaker]);
$laptop->setName('Hp EliteBook 820 G1');

$tablet = new Computer\Tablet();
$tablet->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$tablet->setDevices([$keyboard, $mouse, $speaker]);
$tablet->setName('iPad');

var_dump($desktop);
var_dump($laptop);
var_dump($tablet);
