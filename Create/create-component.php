<?php

require_once "../includes/autoload.php";

// instanciation des components

$cpu = new Component\Cpu();
$cpu->setName("Core i7");
$cpu->setBrand("Intel");
$cpu->setFrequency(3.60);


$graphicCard = new Component\GraphicCard();
$graphicCard->setName("GeForce GT 710");
$graphicCard->setBrand("MSI");
$graphicCard->setRtx(true);


$motherBoard = new Component\MotherBoard();
$motherBoard->setName("TUF GAMING Z490-PLUS");
$motherBoard->setBrand("Asus");
$motherBoard->setChipset("intel");


$ram = new Component\Ram();
$ram->setName("Vengeance LPX Black DDR4");
$ram->setBrand("Corsair");
$ram->setSize(16);
