<?php

use Device\AbstractDevice;

// On inclue les fichiers nécessaires (connexion à la base de données et la liste des objets qu'on avait créés
include 'includes/connect.php';
include 'objects.php';

// On prépare notre requête d'insertion, qui va toujours être sur le même modèle à chaque passage dans le foreach (on fait une requête par périphérique)
$sql = 'INSERT INTO device (name, brand, type) VALUES (:name, :brand, :type)';
$statement = $connection->prepare($sql);

/** @var AbstractDevice $device */
foreach ($devices as $device) { // On parcourt tous nos objets périphériques (de type AbstractDevice, c'est à dire un enfant de AbstractDevice)
    // On récupère les différents valeurs qu'on veut insérer dans des variables de travail
    $name = $device->getName();
    $brand = $device->getBrand();
    $type = $device->getType();

    // On fait le lien entre les placeholders (bouche-trous) que l'on a mis dans la requête SQL préparée et les valeurs réelles, contenues dans nos variables de travail
    $statement->bindParam(':name', $name);
    $statement->bindParam(':brand', $brand);
    $statement->bindParam(':type', $type);

    // On exécute la requête
    $statement->execute();

    // On récupère l'identifiant du périphérique inséré
    $idDevice = $connection->lastInsertId();

    // On récupère le nom de la table spécifique au périphérique qu'on veut insérer (cpu, motherboard, graphiccard ou ram)
    $tableName = $device->getTableName();
    // On récupère les noms et les valeurs des champs spécifiques à cette table
    $tableFields = $device->getSpecificFields();
    // On récupère les noms des champs spécifiques (pour pouvoir mettre la liste des champs à insérer dans notre requête)
    $tableKeys = array_keys($tableFields);

    // On ajoute le champ id_device, qui n'est pas dans notre liste, mais qui est nécessaire à la requête
    $tableKeys[] = 'id_device';
    // La fonction implode va nous permettre d'avoir une chaine de caractères avec toutes ces valeurs, séparées par des virgules
    // Par exemple pour un objet qui doit être inséré dans la table speaker, on obtiendra `countSpeaker,id_device`
    $keysForSQL = implode(',', $tableKeys);

    // On ajoute l'identifiant du périphérique (précédemment inséré) dans le tableau avec les valeurs
    $tableFields[] = $idDevice;
    // On transforme ces valeurs en une chaine de caractères
    // Par exemple pour un objet qui doit être inséré dans la table speaker, on obtiendra quelque chose comme `2.1,2` ou 2.1 est la valeur de countSpeaker et 2 l'identifiant du périphérique déjà inséré (valeurs fictives, je ne connais pas les valeurs réelles ici ;) )
    $valuesForSQL = implode(',', $tableFields);

    // On construit notre chaine de caractères pour notre requête, à l'aide des éléments que l'on vient d'obtenir
    $sql = 'INSERT INTO '.$tableName.' ('.$keysForSQL.') VALUES ('.$valuesForSQL.')';

    // On prépare notre requête, puis on l'exécute
    // Ici, nous n'utilisons pas de placeholders pour notre requête, il faut donc prendre des précautions dans notre méthode `getSpecificFields()` et nous assurer d'avoir des " autour des valeurs qui doivent être des chaînes de caractères
    $statementInsert = $connection->prepare($sql);
    $isDone = $statementInsert->execute();
    if (!$isDone) {
        throw new Exception('Erreur lors de la requête : '.$statementInsert->errorInfo()[2]);
    }
}