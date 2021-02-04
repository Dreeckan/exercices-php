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
    $sqlComponent = "INSERT INTO computer_has_component(Id_Computer, Id_Component) VALUES (:Id_Computer, :Id_Component)";
    $stmtComponent = $connection->prepare($sqlComponent);

    $idComputer = $result['Id_Computer'];
    $idComponent = rand(1, 4);
    $stmtComponent->bindParam(':Id_Computer', $idComputer, PDO::PARAM_STR);
    $stmtComponent->bindParam(':Id_Component', $idComponent, PDO::PARAM_STR);
    
    $isDone = $stmtComponent->execute();
    if (!$isDone) {
        var_dump($stmtComponent->errorInfo());
        throw new Exception('Erreur lors de la requête : '.$stmtComponent->errorInfo()[2]);
    }
}
