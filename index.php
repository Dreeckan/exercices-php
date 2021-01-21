<?php

use Component\Cpu;
use Computer\Desktop;
use Computer\Laptop;
use Validator\ComputerValidator;

include 'includes/autoload.php';

// l'autoload se charge d'appeler la fonction qui permet d'inclure la classe souhaitée.

// création de l'objet ASUS
// $asus = new Computer();

// // Nom de l'objet
// $asus -> setName('de bonne facture');

// // Composants de l'objet
// $components = [
//     'Processeur',
//     'Motherboard',
//     'Port USB',
// ];
// $asus -> setComponents($components);

// Création des objets

$motherBoard = new Component\MotherBoard();
$cpu = new Component\Cpu();
$graphicCard = new Component\GraphicCard();
$ram = new Component\Ram();

// On donne un nom et une marque à nos composants

$motherBoard->setName('GTX580');
$motherBoard->setBrand('Asus');
$cpu->setName('GT856');
$cpu->setBrand('Sony');
$graphicCard->setName('LR100');
$graphicCard->setBrand('Nvidia');
$ram->setName('1458KR');
$ram->setBrand('Microsoft');
$motherBoard->setChipset('464855');

// On instancie des objets périphériques pour chaque ordi
$keyBoard = new Device\Keyboard();
$Mouse = new Device\Mouse();
$Speaker = new Device\Speaker();

// Et on les set en leur donnant un nom 

$keyBoard->setName('582i');
$keyBoard->setBrand('Logitech');

$Mouse->setName('Vivacité');
$Mouse->setBrand('Logitech');

$Speaker->SetName('SOundsytemBass');
$Speaker->setBrand('Harman Kardon');

// Composants de l'objet 



// création de l'objet HP 
$hp = new Computer\Desktop();
// Nom de l'objet 
$name = 'MacFarès';
$hp->setName($name);
// Périphérique de l'objet
$devices = [
    $keyBoard,
    $Mouse,
    $Speaker,

];
$hp->setDevices($devices);


$components = [
    'Processeur',
    'Micro USB',
    $motherBoard,
    $cpu,
    $graphicCard,
    $ram,
];
$hp->setComponents($components);

// Création de l'objet Samsung 
$samsung = new Computer\Tablet();

// Nom de l'appareil
$name = 'Galaxy Tab';
$samsung->setName($name);

// Composants
// $components = [
//     'Processeur',
//     'Micro USB',
//     $motherBoard,
//     $cpu,
//     $graphicCard,
//     $ram,
// ];
$samsung->setComponents($components);

// Périphériques
$devices = [
    $keyBoard,
    $Mouse,
    $Speaker,
];
$samsung->setDevices($devices);

// Création de l'objet ACER 
$acer = new Computer\Laptop();

//Nom de l'objet
$name = 'Acer cassé';
$acer->setName($name);

//Composants de l'objet
// $components = [
//     'MotherCard',
//     'Mémoire Ram',
//     $motherBoard,
//     $cpu,
//     $graphicCard,
//     $ram,
// ];
$acer->setComponents($components);

//Périphériques de l'objet
$devices = [
    $keyBoard,
    $Mouse,
    $Speaker,
];
$acer->setDevices($devices);


$computerValidator = new ComputerValidator;
$computerValidator->validate($hp);

var_dump($computerValidator->validate($acer));

echo json_encode($acer);
echo json_encode($hp);
echo json_encode($samsung);
