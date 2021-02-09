<?php

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    $class = str_replace('\\', '/', $class);
    require_once "../classes/$class.php";
});

// Instanciation des Keyboards

$keyboard1 = new Device\Keyboard();
$keyboard1->setName("Keyboard1");

$keyboard2 = new Device\Keyboard();
$keyboard2->setName("Keyboard2");

$keyboard3 = new Device\Keyboard();
$keyboard3->setName("Keyboard3");

// Instanciation des Mouses

$mouse1 = new Device\Mouse();
$mouse1->setName("Mouse1");

$mouse2 = new Device\Mouse();
$mouse2->setName("Mouse2");

$mouse3 = new Device\Mouse();
$mouse3->setName("Mouse3");

// Instanciation des Speakers

$speaker1 = new Device\Speaker();
$speaker1->setName("Speaker1");

$speaker2 = new Device\Speaker();
$speaker2->setName("Speaker2");

$speaker3 = new Device\Speaker();
$speaker3->setName("Speaker3");
