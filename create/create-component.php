<?php

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    $class = str_replace('\\', '/', $class);
    require_once "../classes/$class.php";
});

// Instanciation des CPU

$cpu1 = new Component\Cpu();
$cpu1->setName("Cpu1");

$cpu2 = new Component\Cpu();
$cpu2->setName("Cpu2");

$cpu3 = new Component\Cpu();
$cpu3->setName("Cpu3");

var_dump($cpu1);

// Instanciation des GraphicCard

$graphicCard1 = new Component\GraphicCard();
$graphicCard1->setName("GraphicCard1");

$graphicCard2 = new Component\GraphicCard();
$graphicCard2->setName("GraphicCard2");

$graphicCard3 = new Component\GraphicCard();
$graphicCard3->setName("GraphicCard3");

// Instanciation des MotherBoard

$motherBoard1 = new Component\MotherBoard();
$motherBoard1->setName("MotherBoard1");

$motherBoard2 = new Component\MotherBoard();
$motherBoard2->setName("MotherBoard2");

$motherBoard3 = new Component\MotherBoard();
$motherBoard3->setName("MotherBoard3");

// Instanciation des RAM

$ram1 = new Component\Ram();
$ram1->setName("Ram1");

$ram2 = new Component\Ram();
$ram2->setName("Ram2");

$ram3 = new Component\Ram();
$ram3->setName("Ram3");
