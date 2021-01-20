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
use Validator\ComputerValidator;

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

$computer->setComponents([$cg, $cpu]);
$computer->setDevices([$mouse, $keyboard, $speaker]);
$computer->setName("human");


$desktop = new Desktop();

$desktop->setComponents([$cg, $cpu, $ram, $cm]);
$desktop->setDevices([$mouse, $keyboard]);
$desktop->setName("popov");


$laptop = new Laptop();

$laptop->setComponents([$cg, $cpu, $ram, $cm]);
$laptop->setDevices([ $mouse, $keyboard, $speaker]);
$laptop->setName("nova");


$tablet = new Tablet();

$tablet->setComponents([$cg, $cpu, $ram]);
$tablet->setDevices([ $keyboard, $speaker]);
$tablet->setName("yuki");


$computerTest =  new ComputerValidator();
var_dump($computerTest->validate(($laptop)));
