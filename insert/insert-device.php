<?php

include "../includes/connect.php";
include "../create/create-device.php";

$device = [
    $keyboard1,
    $keyboard2,
    $keyboard3,
    $mouse1,
    $mouse2,
    $mouse3,
    $speaker1,
    $speaker2,
    $speaker3,
];


$sql = "INSERT INTO `device`(`name`, `brand`) VALUES (:name, :brand)";
$statement = $connection->prepare($sql);
foreach ($device as $devices) {
    $name = $devices->getName();
    $brand = $devices->getBrand();

    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':brand', $brand, PDO::PARAM_STR);

    $isDone = $statement->execute();

    if (!$isDone) {
        throw new Exception('Erreur lors de l\'insertion de la donnée : ' . $device->getName());
    }
}
