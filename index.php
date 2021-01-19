<?php
include 'includes/autoload.php';

$computer = new Computer();
$computer->setComponents('Nvidia GeForce GTX 3080');
$computer->setDevices('Roccat Kova');
$computer->setName('ASUS ROG');

$desktop = new Computer\Desktop();
$desktop->setComponents('Nvidia GeForce GTX 1050');
$desktop->setDevices('Asus BE24AQLB');
$desktop->setName('HP Omen 870-211nf');

$laptop = new Computer\Laptop();
$laptop->setComponents('Core i5');
$laptop->setDevices('Dell MS116t1');
$laptop->setName('Hp EliteBook 820 G1');

$tablet = new Computer\Tablet();
$tablet->setComponents('Apple A9 1.84 GHz');
$tablet->setDevices('Wifi');
$tablet->setName('iPad 9,7" 5. gen');

var_dump($computer);
var_dump($desktop);
var_dump($laptop);
var_dump($tablet);
