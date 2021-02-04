<?php

include "../includes/connect.php";
include "../includes/autoload.php";
include "../Create/create-computer.php";

$computers = [
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


$sql = "INSERT INTO computer(name, type) VALUES (:name, :type)";
$stmt = $connection->prepare($sql);
foreach ($computers as $computer) {
    $name = $computer->getName();
    $type = $computer->type;

    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);
    
    $isDone = $stmt->execute();
    if (!$isDone) {
        throw new Exception("Erreur lors de l'insertion du computer " . $computer->getName());
    }
}
