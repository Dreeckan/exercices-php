<?php

use Component\CPU;
use Component\GPU;
use Component\MotherBoard;
use Component\RAM;
use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;

include'includes/autoload.php';

// $computer = new Computer\Computer;
// $computer->setComponents(['RTX 3080']);
// $computer->setDevices(['CORSAIR K70']);
// $computer->setName('ASUS');
// var_dump($computer);

/**
 * COMPONENTS
 */

$GPU = new GPU;
$GPU->setName('GTX 1060 6GO');
$GPU->setBrand('KF2A');

$CPU = new CPU;
$CPU->setName('RYZEN 5 2600');
$CPU->setBrand('AMD');

$MotherBoard = new MotherBoard;
$MotherBoard->setName('B450 GAMING PLUS');
$MotherBoard->setBrand('MSI');

$RAM = new RAM;
$RAM->setName('LPX Vengeance 2x8GO 3000Mhz CAS 15');
$RAM->setBrand('CORSAIR');


/**
 * DEVICES
 */

 $keyboard = new Keyboard;
 $keyboard->setName('K70');
 $keyboard->setBrand('CORSAIR');

 $mouse= new Mouse;
 $mouse->setName('RIVAL 310');
 $mouse->setBrand('STEELSERIES');
 
 $speaker = new Speaker;
 $speaker->setName('G560 LIGHTSYNC PC');
 $speaker->setBrand('LOGITECH');


/**
 * COMPUTERS
 */

$desktop = new Desktop;
$desktop->setComponents([$CPU, $GPU, $MotherBoard, $RAM]);
$desktop->setDevices([$keyboard, $mouse, $speaker]);
$desktop->setName('MSI');
var_dump($desktop);

$laptop = new Laptop;
$laptop->setComponents([$CPU, $GPU, $MotherBoard, $RAM]);
$laptop->setDevices([$keyboard, $mouse, $speaker]);
$laptop->setName('ASUS ROG');
var_dump($laptop);

$tablet = new Tablet;
$tablet->setComponents([$CPU, $GPU, $MotherBoard, $RAM]);
$tablet->setDevices([$keyboard, $mouse, $speaker]);
$tablet->setName('MSI');
var_dump($tablet);
