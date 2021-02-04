<?php


require_once '../includes/autoload.php';
require_once '../includes/connect.php';

$statement = $connection->prepare("SELECT Id_Computer FROM computer");
$isDone = $statement->execute();
if (!$isDone) {
    var_dump($statement->errorInfo());
    throw new Exception('Erreur lors de la requête : '.$statement->errorInfo()[2]);
}

$results = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($results);

foreach ($results as $result) {
    $sqlDevice = "INSERT INTO computer_has_device(Id_Computer, Id_Device) VALUES (:Id_Computer, :Id_Device)";
    $stmtDevice = $connection->prepare($sqlDevice);

    $idComputer = $result['Id_Computer'];
    $idDevice = rand(9, 11);
    $stmtDevice->bindParam(':Id_Computer', $idComputer, PDO::PARAM_STR);
    $stmtDevice->bindParam(':Id_Device', $idDevice, PDO::PARAM_STR);
    
    $isDone = $stmtDevice->execute();
    if (!$isDone) {
        var_dump($stmtDevice->errorInfo());
        throw new Exception('Erreur lors de la requête : '.$stmtDevice->errorInfo()[2]);
    }
}
