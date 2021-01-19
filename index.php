<?php

// permet aux classes d'être automatiquement chargées si elles ne sont pas encore définies

require_once "includes/autoload.php";

$computer1 = new Computer();
$computer1->setName = "AsusX5";
$computer1->setComponents = ["cpu", "gpu", "motherboard", "ram"];
$computer1->setDevices = ["mouse", "keyboard", "screen", "webcam"];

var_dump($computer1);
