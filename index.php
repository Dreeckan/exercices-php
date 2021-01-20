<?php

include 'includes/autoload.php';

use Computer\Computer;
use Computer\Desktop;
use Computer\Laptop;

use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;

use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;

//Les fonctions nous permettent de modifier / récupérer et afficher les valeurs

$cpu = new Cpu();
$cpu->setBrand('AMX');
$cpu->setName('GTX');

$graphicCard = new GraphicCard();
$graphicCard->setBrand('elle tourne');
$graphicCard->setName('elle tourne même très bien');

$motherBoard = new MotherBoard();
$motherBoard->setBrand('la meilleure');
$motherBoard->setName('comment elle met bien');

$ram = new Ram();
$ram->setBrand('ça rame pour moi');
$ram->setName('de ouf');

$keyboard = new Keyboard();
$keyboard->setBrand('Azerty');
$keyboard->setName('clavier');

$mouse = new Mouse();
$mouse->setBrand('Buro+');
$mouse->setName('Pocket');

$speaker = new Speaker();
$speaker->setBrand('Sony');
$speaker->setName('3XWW');

$mac = new Laptop();

$mac->setComponents([$cpu, $motherBoard, $graphicCard, $ram]);
$mac->setDevices([$keyboard, $mouse, $speaker]);
$mac->setName('test');

var_dump($mac);

$files = new Desktop();
$files->setComponents(["processor",
                       "RAM",
                       "motherboard"
                       ]);
$files->setDevices(["Windows"]);
$files->setName("MSI");

var_dump($files);
