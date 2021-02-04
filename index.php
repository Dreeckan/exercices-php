<?php

include 'includes/autoload.php';
/* Appel de la fonction qui permet d'enregistrer automatiquement nos classes */

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

$cpu0 = new Cpu();
$cpu0->setName('Ryzen5 3600');
$cpu0->setBrand('AMD');

$gpu0 = new GraphicCard();
$gpu0->setName('GTX 3060');
$gpu0->setBrand('Nvidia');

$mb0 = new MotherBoard();
$mb0->setName('B-450');
$mb0->setBrand('MSI');

$ram0 = new Ram();
$ram0->setName('DDR4 2600mhz');
$ram0->setBrand('Crucial');

$keyboard0 = new Keyboard();
$keyboard0->setName('LeClavierQuiColle');
$keyboard0->setBrand('Cdiscount');

$mouse0 = new Mouse();
$mouse0->setName('Mx518');
$mouse0->setBrand('Logitech');

$speaker0 = new Speaker();
$speaker0->setName('EnceintePremierPrix');
$speaker0->setBrand('NoName');

$desktop0 = new Desktop();
$desktop0->setComponents([$cpu0, $mb0, $gpu0, $ram0]);
$desktop0->setDevices([$mouse0, $keyboard0, $speaker0]);
$desktop0->setName('PC Cdiscount');

$laptop0 = new Laptop();
$laptop0->setComponents([$cpu0, $mb0, $gpu0, $ram0]);
$laptop0->setDevices([$mouse0, $keyboard0, $speaker0]);
$laptop0->setName('MSI P800 Gaming');

$tablet0 = new Tablet();
$tablet0->setComponents([$cpu0, $mb0, $gpu0, $ram0]);
$tablet0->setDevices([$mouse0, $keyboard0, $speaker0]);
$tablet0->setName('Tablette Android v2');

var_dump(get_class_methods($desktop0));

var_dump($desktop0);

var_dump($laptop0);

var_dump($tablet0);

$validator = new ComputerValidator();

var_dump($validator->validate($desktop0));

var_dump($validator->validate($laptop0));

var_dump($validator->validate($tablet0));

echo json_encode($desktop0);
echo json_encode($laptop0);
echo json_encode($tablet0);

/*if (isset($GET_['api'])) {
    header('Content-type: application/json');
    echo json_encode($desktop0);
}*/
