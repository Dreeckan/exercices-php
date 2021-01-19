<?php

// permet aux classes d'être automatiquement chargées si elles ne sont pas encore définies

require_once "includes/autoload.php";

// instanciation des components

$cpu = new Component\Cpu();
$cpu->setName("Core i7");
$cpu->setBrand("Intel");

$graphicCard = new Component\GraphicCard();
$graphicCard->setName("GeForce GT 710");
$graphicCard->setBrand("MSI");

$motherBoard = new Component\MotherBoard();
$motherBoard->setName("TUF GAMING Z490-PLUS");
$motherBoard->setBrand("Asus");

$ram = new Component\Ram();
$ram->setName("Vengeance LPX Black DDR4");
$ram->setBrand("Corsair");

// instanciation des devices

$keyboard = new Device\Keyboard();
$keyboard->setName("ROG Strix Scope RX");
$keyboard->setBrand("Asus");

$mouse = new Device\Mouse();
$mouse->setName("B100");
$mouse->setBrand("Logitech");

$speaker = new Device\Speaker();
$speaker->setName("S-150");
$speaker->setBrand("Logitech");


// instanciation des computer

$desktop1 = new Computer\Desktop();
$desktop1->setName = "Asus";
$desktop1->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$desktop1->setDevices([$mouse, $keyboard, $speaker]);

var_dump($desktop1);

$laptop1 = new Computer\Laptop();
$laptop1->setName = "Macbook";
$laptop1->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$laptop1->setDevices([$mouse, $keyboard, $speaker]);


var_dump($laptop1);

$tablet1 = new Computer\Tablet();
$tablet1->setName = "Ipad";
$tablet1->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$tablet1->setDevices([$mouse, $keyboard, $speaker]);


var_dump($tablet1);
