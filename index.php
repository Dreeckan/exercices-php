<?php

require_once 'includes/autoload.php';
// si on fait appel à une classe l'autoload se charge d'appeler la fonction qui permet d'inclure la classe souhaitée.

use Computer\Desktop as Desktop;
use Computer\Laptop as Laptop;
use Computer\Tablet as Tablet;
use Component\Cpu as Cpu;
use Component\Ram as Ram;
use Component\MotherBoard as MotherBoard;
use Component\GraphicCard as GraphicCard;
use Device\Mouse as Mouse;
use Device\Keyboard as Keyboard;
use Device\Speaker as Speaker;


// Components
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


// Computers
$computer = new Desktop();
$computer->setComponents([$cg, $cpu, $ram]);
$computer->setDevices([$mouse, $keyboard, $speaker]);
$computer->setName('Ilianov');

var_dump($computer);

$laptop = new Laptop();
$laptop->setComponents([$cg, $cpu, $ram]);
$laptop->setDevices([$mouse, $keyboard, $speaker]);
$laptop->setName('Ekaterina');

$tablet = new Tablet();
$tablet->setComponents([$cg, $cpu, $ram]);
$tablet->setDevices([$mouse, $keyboard, $speaker]);
$tablet->setName('Kurnikova');