<?php

require_once 'includes/autoload.php';
// si on fait appel à une classe l'autoload se charge d'appeler la fonction qui permet d'inclure la classe souhaitée.

use Computer\Desktop as Desktop;
use Computer\Laptop as Laptop;
use Computer\Tablet as Tablet;

$computer = new Desktop();
$computer->setComponents(['motherBoard', 'usbPort', 'ram']);
$computer->setDevices(['screen', 'mouse', 'keyboard']);
$computer->setName('Popov');

$desktop = new Desktop();
$desktop->setComponents(['motherBoard', 'usbPort', 'ram']);
$desktop->setDevices(['screen', 'mouse', 'keyboard']);
$desktop->setName('Ilianov');

var_dump($desktop);

$laptop = new Laptop();
$laptop->setComponents(['motherBoard', 'usbPort', 'ram']);
$laptop->setDevices(['screen', 'mouse', 'keyboard']);
$laptop->setName('Ekaterina');

var_dump($laptop);

$tablet = new Tablet();
$tablet->setComponents(['motherBoard', 'usbPort', 'ram']);
$tablet->setDevices(['screen', 'mouse', 'keyboard']);
$tablet->setName('Kurnikova');

var_dump($tablet);