<?php
include 'includes/connect.php';


$sql = "INSERT INTO computer (type, name) VALUES (:type, :name)";
    
    $donnees = [
        ['Desktop', 'Pc cdiscount'],
        ['Laptop', 'ASUS'],
        ['Tablet', 'ipad'],
    ];
    $statement = $connection->prepare($sql);
    
    foreach ($donnees as $donnee) {
        $statement->bindParam(':type', $donnee[0], PDO::PARAM_STR);
        $statement->bindParam(':name', $donnee[1], PDO::PARAM_STR);
        $isDone = $statement->execute();
        
        if (!$isDone) {
            throw new Exception('Erreur');
        }
    }
