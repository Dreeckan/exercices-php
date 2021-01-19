<?php

use Computer\Desktop;
use Computer\Laptop;

require_once("includes/autoload.php");
//Enregistre une fonction en tant qu'implémentation de __autoload()

$my_computer = new Computer();

$my_computer->setComponents(["CPU", "memory-card", "carte-mère"]);
$my_computer->getDevices(["clavier", "souris", "clé"]);
$my_computer->getName(["clavier", "souris", "clé"]);



var_dump($my_computer);

$desktop = new Desktop();
$desktop->color = "red";

var_dump($desktop->color);


$laptop = new Laptop();
$tablette = new Laptop();
$laptop->setName("Jelly");
var_dump($laptop->getName());