<?php

// permet aux classes d'être automatiquement chargées si elles ne sont pas encore définies

require_once "includes/autoload.php";

$computer1 = new Computer\Computer();
$computer1->setName = "AsusX5";
$computer1->setComponents = ["cpu", "gpu", "motherboard", "ram"];
$computer1->setDevices = ["mouse", "keyboard", "screen", "webcam"];

var_dump($computer1);

$desktop1 = new Computer\Desktop();
$desktop1->setName = "Asus";
$desktop1->setComponents = ["cpuAsus", "gpuAsus", "motherboardAsus", "ramAsus"];
$desktop1->setDevices = ["mouseAsus", "keyboardAsus", "screenAsus", "webcamAsus"];

var_dump($desktop1);

$laptop1 = new Computer\Laptop();
$laptop1->setName = "Macbook";
$laptop1->setComponents = ["cpuMacbook", "gpuMacbook", "motherboardMacbook", "ramMacbook"];
$laptop1->setDevices = ["mouseMacbook", "keyboardMacbook", "screenMacbook", "webcamMacbook"];

var_dump($laptop1);

$tablet1 = new Computer\Tablet();
$tablet1->setName = "Ipad";
$tablet1->setComponents = ["cpuIpad", "gpuIpad", "motherboardIpad", "ramIpad"];
$tablet1->setDevices = ["mouseIpad", "keyboardIpad", "screenIpad", "webcamIpad"];

var_dump($tablet1);
