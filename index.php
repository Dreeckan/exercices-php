<?php

include 'includes/autoload.php';


$desktop = new Computer\Desktop;//instanciation de la classe Desktop


$laptop = new Computer\Laptop;//instanciation de la classe Laptop


$tablet = new Computer\Tablet;//instanciation de la classe Tablet

/*************************************
 * DEBUT COMPONENT
 *************************************/

//CPU
$cpu = new Component\Cpu;//Instanciation de la classe Cpu

$cpu->setBrand('intel');//Defintion de la propriété brand

$cpu->setName('i9');//Définition de la propriété Name


//Carte Graphique
$graphicCard = new Component\GraphicCard;//Instanciation de la classe GraphicCard

$graphicCard->setBrand('Nvidia');//Defintion de la propriété brand

$graphicCard->setName('RTX0000');//Définition de la propriété Name


//Carte mere
$motherBoard = new Component\MotherBoard;//Instanciation de la classe MotherBoard

$motherBoard->setBrand('ASUS');//Defintion de la propriété brand

$motherBoard->setName('2000');//Définition de la propriété Name


//RAM
$ram = new Component\Ram;//Instanciation de la classe Ram

$ram->setBrand('Corsair');//Defintion de la propriété brand

$ram->setName('PX22');//Définition de la propriété Name


/*************************************
 * FIN COMPONENT
 *************************************/


 /*************************************
 * DEBUT DEVICES
 *************************************/

 //KEYBOARD
$keyboard = new Device\Keyboard;//Instanciation de la classe Keyboard

$keyboard->setBrand('Roccat');//Defintion de la propriété brand

$keyboard->setName('Vulcan');//Définition de la propriété Name

//MOUSE
$mouse = new Device\Mouse;//Instanciation de la classe Mouse

$mouse->setBrand('Logitech');//Defintion de la propriété brand

$mouse->setName('G520');//Définition de la propriété Name

//SPEAKER

$speaker = new Device\Speaker;//Instanciation de la classe Mouse

$speaker->setBrand('Bose');//Defintion de la propriété brand

$speaker->setName('GR8');//Définition de la propriété Name


/*************************************
 * FIN DEVICES
 *************************************/



$desktop->setComponents([$graphicCard,$cpu,$motherBoard,$ram]);//Definition des components liés à Desktop

$desktop->setDevices([$keyboard,$mouse,$speaker]);//Défitinition des Devices liés à Desktop

$desktop->setName('HP 8585');//Définition du nom de Desktop

var_dump($desktop);
