<?php

// permet aux classes d'être automatiquement chargées si elles ne sont pas encore définies

require_once "includes/autoload.php";

// instanciation des components

$cpu = new Component\Cpu();
$cpu->setName("Core i7");
$cpu->setBrand("Intel");
$cpu->setFrequency(3.60);

$graphicCard = new Component\GraphicCard();
$graphicCard->setName("GeForce GT 710");
$graphicCard->setBrand("MSI");
$graphicCard->setRtx(true);

$motherBoard = new Component\MotherBoard();
$motherBoard->setName("TUF GAMING Z490-PLUS");
$motherBoard->setBrand("Asus");
$motherBoard->setChipset("intel");

$ram = new Component\Ram();
$ram->setName("Vengeance LPX Black DDR4");
$ram->setBrand("Corsair");
$ram->setSize(16);

// instanciation des devices

$keyboard = new Device\Keyboard();
$keyboard->setName("ROG Strix Scope RX");
$keyboard->setBrand("Asus");
$keyboard->setFormat("azerty");

$mouse = new Device\Mouse();
$mouse->setName("B100");
$mouse->setBrand("Logitech");
$mouse->setLeftHanded(false);

$speaker = new Device\Speaker();
$speaker->setName("S-150");
$speaker->setBrand("Logitech");
$speaker->setCountSpeakers(2.2);


// instanciation des computers

$desktop1 = new Computer\Desktop();
$desktop1->setName("Asus");
$desktop1->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$desktop1->setDevices([$mouse, $keyboard, $speaker]);


$laptop1 = new Computer\Laptop();
$laptop1->setName("Macbook");
$laptop1->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$laptop1->setDevices([$mouse, $keyboard, $speaker]);



$tablet1 = new Computer\Tablet();
$tablet1->setName("Ipad");
$tablet1->setComponents([$cpu, $graphicCard, $motherBoard, $ram]);
$tablet1->setDevices([$mouse, $keyboard, $speaker]);



// $testValidationDesktop1 = new Validator\ComputerValidator();
// var_dump($testValidationDesktop1->validate($desktop1));
echo json_encode($desktop1);
echo json_encode($cpu);

var_dump($cpu->jsonSerialize());
var_dump($cpu);
