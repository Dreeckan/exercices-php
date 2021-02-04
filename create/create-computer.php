<?php

include "../includes/autoload.php";

// Instanciation des Desktop

$desktop1 = new Computer\Desktop();
$desktop1->setName("Desktop1");

$desktop2 = new Computer\Desktop();
$desktop2->setName("Desktop2");

$desktop3 = new Computer\Desktop();
$desktop3->setName("Desktop3");

// Instanciation des Laptop

$laptop1 = new Computer\Laptop();
$laptop1->setName("Laptop1");

$laptop2 = new Computer\Laptop();
$laptop2->setName("Laptop2");

$laptop3 = new Computer\Laptop();
$laptop3->setName("Laptop3");

// Instanciation des Tablet

$tablet1 = new Computer\Tablet();
$tablet1->setName("Tablet1");

$tablet2 = new Computer\Tablet();
$tablet2->setName("Tablet2");

$tablet3 = new Computer\Tablet();
$tablet3->setName("Tablet3");
