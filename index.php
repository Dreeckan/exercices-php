<?php

use Exception;
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
use Validator\ComputerValidator;

include "includes/autoload.php";
include 'includes/connect.php';

/*
$desktop1 = new Desktop();
$desktop1->setName("Asus");
$desktop1->setComponents(["cpuAsus", "gpuAsus", "motherboardAsus", "ramAsus"]);
$desktop1->setDevices(["mouseAsus", "keyboardAsus", "screenAsus", "webcamAsus"]);

var_dump($desktop1);

$laptop1 = new Laptop();
$laptop1->setName("Macbook");
$laptop1->setComponents(["cpuMacbook", "gpuMacbook", "motherboardMacbook", "ramMacbook"]);
$laptop1->setDevices(["mouseMacbook", "keyboardMacbook", "screenMacbook", "webcamMacbook"]);

var_dump($laptop1);

$tablet1 = new Computer\Tablet();
$tablet1->setName("Ipad");
$tablet1->setComponents(["cpuIpad", "gpuIpad", "motherboardIpad", "ramIpad"]);
$tablet1->setDevices(["mouseIpad", "keyboardIpad", "screenIpad", "webcamIpad"]);

var_dump($tablet1);
*/

// Ajout composants
$cpu = new Cpu();
$cpu->setName("Core i7");
$cpu->setBrand("Intel");
$cpu->setFrequency(5.666);
$cpu->setCompatibility([Desktop::class,Laptop::class]);

$graphicCard = new GraphicCard();
$graphicCard->setName("GeForce GT 710");
$graphicCard->setBrand("MSI");
$graphicCard->setRtx(true);
$graphicCard->setCompatibility([Desktop::class,Laptop::class]);


$motherBoard = new MotherBoard();
$motherBoard->setName("TUF GAMING Z490-PLUS");
$motherBoard->setBrand("Asus");
$motherBoard->setChipset("Z170");
$motherBoard->setCompatibility([Desktop::class,Laptop::class]);


$ram = new Ram();
$ram->setName("Vengeance LPX Black DDR4");
$ram->setBrand("Corsair");
$ram->setSize("16");
$ram->setCompatibility([Laptop::class,Tablet::class]);
//$ram->isCompatibleWith(Tablet::class);
//var_dump($ram->isCompatibleWith(Tablet::class));



$keyboard = new Keyboard();
$keyboard->setName("ROG Strix Scope RX");
$keyboard->setBrand("Asus");
$keyboard->setFormat('azerty');


$mouse = new Mouse();
$mouse->setName("B100");
$mouse->setBrand("Logitech");
$mouse->setLeftHanded(false);


$speaker = new Speaker();
$speaker->setName("S-150");
$speaker->setBrand("Logitech");
$speaker->setCountSpeakers(2);


/*$desktop2 = new Desktop();
$desktop2->setComponents([$cpu,$motherBoard,$graphicCard,$ram]);
$desktop2->setDevices([$speaker,$mouse,$keyboard]);
$validator = new ComputerValidator();*/
echo '____________________________PARTIE 5 est Valide____________________________';

//var_dump($validator->validate($desktop2));
echo '____________________________PARTIE 6 JSON____________________________';

/*$desktop3 = new Desktop;
$desktop3->setComponents([$cpu,$motherBoard,$graphicCard,$ram]);
$desktop3->setDevices([$speaker,$mouse,$keyboard]);

$desktop3JsonData = json_encode($desktop3);


var_dump($desktop3JsonData);*/
echo '___________________PARTIE 7 est compatible_________________';

/*var_dump('est compatible ?', $ram->isCompatibleWith(Laptop::class));
var_dump($desktop3->getComponents());*/


$desktop4 = new Desktop;
$desktop4->setName('dell');

try {
    $desktop4->setComponents($ram);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<a href="insert-computer.php">insert</a>
<a href="select-computer.php">select</a>