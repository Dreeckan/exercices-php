<?php

use Component\GraphicCard;

include 'includes/autoload.php';

// $asus = new Computer();

// $components = [
//     'Processeur',
//     'MotherBoard',
// ];
// $asus->setComponents($components);


// $devices = [
//     'souris',
//     'clavier',
// ];
// $asus->setDevices($devices);

// $name = 
//     'Asus-Assogba'
// ;
// $asus->setName($name);

// var_dump($asus);


// Instance des objets Component
$carteGraphique = new Component\GraphicCard();
$carteGraphique->setName('GTX3080');
$carteGraphique->setBrand('Asus');

$ram = new Component\Ram();
$carteGraphique->setName('GTX3080');
$carteGraphique->setBrand('Asus');

$cpu = new Component\Cpu();
$cpu->setName('GTX3080');
$cpu->setBrand('Asus');

$carteMere = new Component\MotherBoard;
$carteMere->setName('GTX3080');
$carteMere->setBrand('Asus');

// Instance des objets Device
$clavier = new Device\Keyboard();
$clavier->setName('GTX3080');
$clavier->setBrand('Asus');

$souris = new Device\Mouse();
$souris->setName('GTX3080');
$souris->setBrand('Asus');

$micro = new Device\Speaker();
$micro->setName('GTX3080');
$micro->setBrand('Asus');

// Desktop

$hp = new Computer\Desktop();

$components = [
    'Processeur',
    'MotherBoard',
    $carteGraphique,
    $ram,
    $cpu,
    $carteMere,
    
];
$hp->setComponents($components);


$devices = [
    'souris',
    'clavier',
    $clavier,
    $souris,
    $micro->setName('AudiRS4'),
    $micro->setBrand('Apple'),
];
$hp->setDevices($devices);

$name = 
    'HP-Assogba'
;
$hp->setName($name);

var_dump($hp);

// Laptop

$mac = new Computer\Laptop();


$mac->setComponents($components);


$mac->setDevices($devices);

$name = 
    'HP-Assogba'
;
$mac->setName($name);

var_dump($mac);

// Tablet

$samsung = new Computer\Tablet();

$samsung->setComponents($components);

$samsung->setDevices($devices);

$name = 
    'HP-Assogba'
;
$samsung->setName($name);

var_dump($samsung);
