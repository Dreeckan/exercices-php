<?php

use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;
use Component\GraphicCard;
use Component\Cpu;
use Component\Ram;
use Component\MotherBoard;
use Device\Mouse;
use Device\Keyboard;
use Device\Speaker;

include 'includes/autoload.php';
//La fonction spl_autoload_register() enregistre un nombre quelconque de chargeurs automatiques, ce qui permet aux classes
// et aux interfaces d'être automatiquement chargées si elles ne sont pas définies actuellement.



$cg = new GraphicCard();
$cg->setName('gtx1060');
$cg->setBrand('MSI');

$cpu = new Cpu();
$cpu->setName('Ryzen7');
$cpu->setBrand('AMD');

$ram = new Ram();
$ram->setName('Guardian');
$ram->setBrand('Corsair');

$cm = new MotherBoard();
$cm->setName('Gamer');
$cm->setBrand('AsRock');


//Devices
$mouse = new Mouse();
$mouse->setName('Death Adder');
$mouse->setBrand('Razer');

$keyboard = new Keyboard();
$keyboard->setName('K-120');
$keyboard->setBrand('Logitech');

$speaker = new Speaker();
$speaker->setName('Gloubi');
$speaker->setBrand('Logitech');


$computer = new Desktop();

$computer->setComponents([$cg, $cpu, $ram]);
$computer->setDevices([$mouse, $keyboard, $speaker]);
$computer->setName("human");


var_dump($computer);


$desktop = new Desktop();

$desktop->setComponents([$cg, $cpu, $ram]);
$desktop->setDevices([$mouse, $keyboard, $speaker]);
$desktop->setName("popov");

var_dump($desktop);

$laptop = new Laptop();

$laptop->setComponents([$cg, $cpu, $ram]);
$laptop->setDevices([ $mouse, $keyboard, $speaker]);
$laptop->setName("nova");

var_dump($laptop);

$tablet = new Tablet();

$tablet->setComponents([$cg, $cpu, $ram]);
$tablet->setDevices([$mouse, $keyboard, $speaker]);
$tablet->setName("yuki");

var_dump($tablet);
