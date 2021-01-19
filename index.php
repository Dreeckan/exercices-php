<?php

include 'includes/autoload.php';

$asus = new Computer();

$components = [
    'Processeur',
    'MotherBoard',
];
$asus->setComponents($components);


$devices = [
    'souris',
    'clavier',
];
$asus->setDevices($devices);

$name = 
    'Asus-Assogba'
;
$asus->setName($name);

var_dump($asus);

// Desktop

$hp = new Computer\Desktop();

$components = [
    'Processeur',
    'MotherBoard',
];
$hp->setComponents($components);

$devices = [
    'souris',
    'clavier',
];
$hp->setDevices($devices);

$name = 
    'HP-Assogba'
;
$hp->setName($name);

var_dump($hp);

// Laptop

$mac = new Computer\Laptop();

$components = [
    'Processeur',
    'MotherBoard',
];
$mac->setComponents($components);

$devices = [
    'souris',
    'clavier',
];
$mac->setDevices($devices);

$name = 
    'HP-Assogba'
;
$mac->setName($name);

var_dump($mac);

// Tablet

$samsung = new Computer\Tablet();

$components = [
    'Processeur',
    'MotherBoard',
];
$samsung->setComponents($components);

$devices = [
    'souris',
    'clavier',
];
$samsung->setDevices($devices);

$name = 
    'HP-Assogba'
;
$samsung->setName($name);

var_dump($samsung);
