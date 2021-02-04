<?php

require_once "../includes/autoload.php";

$keyboard = new Device\Keyboard();
$keyboard->setName("ROG Strix Scope RX");
$keyboard->setBrand("Asus");
$keyboard->setFormat("azerty");


$mouse = new Device\Mouse();
$mouse->setName("B100");
$mouse->setBrand("Logitech");
$mouse->setLeftHanded(false);


$speaker = new Device\Speaker();
$speaker->setName("S-150");
$speaker->setBrand("Logitech");
$speaker->setCountSpeakers(2.2);
