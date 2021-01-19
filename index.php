<?php

include 'includes/autoload.php';
/* Appel de la fonction qui permet d'enregistrer automatiquement nos classes */

use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;

$computer0 = new Computer();

$computer0->setComponents(['Intel', 'AsusMotherboard', 'DDR42600mhz']);
$computer0->setDevices(['SourisLogitech', 'ClavierRazer', 'WebcamHP', 'ImprimanteHP']);
$computer0->setName('HP Omen');

$desktop0 = new Desktop();

$desktop0->setComponents(['AMD', 'MSIMotherboard', 'DDR43200mhz']);
$desktop0->setDevices(['SourisAsus', 'ClavierCdiscountQuiColle', 'WebcamNoName', 'ImprimanteHP']);
$desktop0->setName('PC Cdiscount');

$laptop0 = new Laptop();

$laptop0->setComponents(['AMD', 'MSIMotherboard', 'DDR43600mhz']);
$laptop0->setDevices(['SourisMSI']);
$laptop0->setName('MSI P800 Gaming');

$tablet0 = new Tablet();

$tablet0->setComponents(['NvidiaTegra']);
$tablet0->setDevices(['Housse De Protection']);
$tablet0->setName('Tablette Android');




/*$computer0->components = ['cpu', 'motherboard', 'ram'];
$computer0->devices = ['mouse', 'keyboard', 'webcam', 'printer'];
$computer0->name = 'HP Omen';*/

var_dump(get_class_methods($desktop0));

var_dump($computer0);

var_dump($desktop0);

var_dump($laptop0);

var_dump($tablet0);
