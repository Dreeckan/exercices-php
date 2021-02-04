<?php

include "../includes/connect.php";
include "../includes/autoload.php";
include "../create/create-computer.php";

$computer = [
    $desktop1,
    $desktop2,
    $desktop3,
    $laptop1,
    $laptop2,
    $laptop3,
    $tablet1,
    $tablet2,
    $tablet3,
];

$sql = "INSERT INTO `computer`(`name`, `type`) VALUES (:name, :type)";
$statement = $connection->prepare($sql);
foreach ($computer as $computers) {
    $name = $computers->getName();
    $type = $computers->getType();

    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':type', $type, PDO::PARAM_STR);

    $isDone = $statement->execute();

    if (!$isDone) {
        throw new Exception('Erreur lors de l\'insertion de la donnée : ' . $computer->getName());
    }
}
