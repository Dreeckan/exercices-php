<?php

//use Computer\Computer;

use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;
use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;

include'includes/autoload.php';
// explique comment les classes vont etres chargés

//$computer = new Computer;
$desktop =  new Desktop;
$laptop =  new Laptop;
$tablet =  new Tablet;





$cpu = new Cpu;


$graphicCard = new GraphicCard;

$motherBoard = new MotherBoard;

$ram = new Ram;

$keyboard = new Keyboard;

$mouse = new Mouse;


$speaker = new Speaker;
$desktop-> setComponents([$cpu,$graphicCard,$motherBoard,$ram]);
$laptop-> setComponents([$cpu,$graphicCard,$motherBoard,$ram]);
$tablet-> setComponents([$cpu,$graphicCard,$motherBoard,$ram]);
$desktop-> setDevices([$keyboard,$mouse,$speaker]);
$laptop-> setDevices([$keyboard,$mouse,$speaker]);
$tablet-> setDevices([$keyboard,$mouse,$speaker]);





//var_dump($computer);
var_dump($desktop);
var_dump($laptop);
var_dump($tablet);
