<?php

use Computer\Desktop;
use Computer\Laptop;

include 'includes/autoload.php';

// l'autoload se charge d'appeler la fonction qui permet d'inclure la classe souhaitée.

// création de l'objet ASUS
$asus = new Computer();

// Nom de l'objet
$asus -> setName('de bonne facture');

// Composants de l'objet
$components = [
    'Processeur',
    'Motherboard',
    'Port USB',
];
$asus -> setComponents($components);


// création de l'objet HP 
$hp = new Computer\Desktop();
// Nom de l'objet 
$name = 'MacFarès';
$hp -> setName($name);
// Périphérique de l'objet
$devices = [
    'key Mouse',
    'Keyboard',
];
$hp -> setDevices($devices);

// Création de l'objet Samsung 
$samsung = new Computer\Tablet();

// Nom de l'appareil
$name = 'Galaxy Tab';
$samsung -> setName($name); 

// Composants
$components = [
    'Processeur',
    'Micro USB',
];
$samsung -> setComponents($components);

// Périphériques
$devices = [
    'KeyBoard wireless',
];
$samsung -> setDevices($devices);

// Création de l'objet ACER 
$acer = new Computer\Laptop();

//Nom de l'objet
$name = 'Acer cassé';
$acer -> setName($name);

//Composants de l'objet
$components = [
    'MotherCard',
    'Mémoire Ram',
];
$acer -> setComponents($components);

//Périphériques de l'objet
$devices = [
    "Key mouse", 
    "Keyboard",
];
$acer -> setDevices($devices);



var_dump($acer, $asus, $samsung, $hp);






