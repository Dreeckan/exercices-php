<?php

include 'includes/autoload.php';

use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;
use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;

/*
 *
 * Création des composants
 *
 */
$cpu = new Cpu();
$cpu->setName('Ryzen 7');
$cpu->setBrand('AMD');

$graphicCard = new GraphicCard();
$graphicCard->setName('GTX 3080');
$graphicCard->setBrand('Nvidia');

$motherBoard = new MotherBoard();
$motherBoard->setName('H170');
$motherBoard->setBrand('Asus');

$ram = new Ram();
$ram->setBrand('Corsair');
$ram->setName('test');

$components = [
    'motherBoard' => $motherBoard,
    'ram'         => $ram,
    'cpu'         => $cpu,
    'graphicCard' => $graphicCard,
];


/*
 *
 * Création des périphériques
 *
 */
$keyboard = new Keyboard();
$keyboard->setName('Apex');
$keyboard->setBrand('Steelseries');

$mouse = new Mouse();
$mouse->setName('Sensei');
$mouse->setBrand('Steelseries');

$speaker = new Speaker();
$speaker->setName('X230 Refresh');
$speaker->setBrand('Logitech');

$devices = [
    'keyboard' => $keyboard,
    'mouse'    => $mouse,
    'speaker'  => $speaker,
];


/*
 *
 * Création des ordinateurs
 *
 */
$c = new Desktop();
// En return $this dans nos setters, on peut "chaîner" les appels aux setters
//$c
//    ->setName('PC Gamer')
//    ->setComponents([
//       'motherBoard' => 'test',
//       'ram' => 'test',
//       'cpu' => 'test',
//       'graphicCard' => 'test',
//    ])
//    ->setDevices([
//       'keyboard' => 'test',
//       'mouse' => 'test',
//       'speaker' => 'test',
//    ])
//;
$c->setName('PC Gamer');
$c->setComponents($components);
$c->setDevices($devices);

$c2 = new Desktop();
$c2->setName('PC de bureau');
$c2->setComponents($components);
$c2->setDevices($devices);

$c3 = new Laptop();
$c3->setName('Ordinateur portable');
$c3->setComponents($components);
$c3->setDevices($devices);

$c4 = new Tablet();
$c4->setName('Tablette');
$c4->setComponents($components);
$c4->setDevices($devices);

var_dump($c, $c2, $c3, $c4);