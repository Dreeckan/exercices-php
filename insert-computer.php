<?php

// On inclue les fichiers nécessaires (connexion à la base de données et la liste des objets qu'on avait créés
include 'includes/connect.php';
include 'objects.php';

// On prépare notre requête d'insertion, qui va toujours être sur le même modèle à chaque passage dans le foreach (on fait une requête par ordinateur)
$sql = 'INSERT INTO computer (name, type) VALUES (:name, :type)';
$statement = $connection->prepare($sql);

foreach ($computers as $computer) { // On parcourt tous nos objets ordinateur (de type Computer, c'est à dire un enfant de Computer)
    // On récupère les différents valeurs qu'on veut insérer dans des variables de travail
    $name = $computer->getName();
    $type = get_class($computer); // On récupère le FQCN (nom de classe complet, avec le namespace) pour le mettre dans le champ type de la base
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':type', $type, PDO::PARAM_STR);

    // On exécute la requête et on vérifie qu'il n'y avait pas d'erreur dans notre requête
    $isDone = $statement->execute();
    if (!$isDone) {
        throw new Exception('Erreur lors de l\'insertion : '.$statement->errorInfo()[2]);
    }
}
