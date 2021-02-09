<?php

include "../includes/connect.php";
include "../create/create-component.php";

$component = [
    $cpu1,
    $cpu2,
    $cpu3,
    $graphicCard1,
    $graphicCard2,
    $graphicCard3,
    $motherBoard1,
    $motherBoard2,
    $motherBoard3,
    $ram1,
    $ram2,
    $ram3,
];

$sql = "INSERT INTO `component`(`name`, `brand`) VALUES (:name, :brand)";
$statement = $connection->prepare($sql);
foreach ($component as $components) {
    $name = $components->getName();
    $brand = $components->getBrand();

    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':brand', $brand, PDO::PARAM_STR);

    $isDone = $statement->execute();

    if (!$isDone) {
        throw new Exception('Erreur lors de l\'insertion de la donnée : ' . $component->getName());
    }
}
