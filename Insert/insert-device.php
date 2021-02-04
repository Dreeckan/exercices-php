<?php

require_once "../includes/connect.php";
require_once "../includes/autoload.php";

$keyboards = [
    
];


$sql = "INSERT INTO computer(name, brand, type, ) VALUES (:name, :type)";
$stmt = $connection->prepare($sql);
foreach ($keyboards as $keyboard) {
    $name = $keyboard->getName();
    $type = $keyboard->type;

    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);
    
    $isDone = $stmt->execute();
    if (!$isDone) {
        throw new Exception("Erreur lors de l'insertion du keyboard " . $keyboard->getName());
    }
}
