<?php

use Component\AbstractComponent;
use Device\AbstractDevice;

include 'includes/connect.php';
include 'objects.php';

/** @var Computer $computer */
foreach ($computers as $computer) {
    // Récupérer les informations sur l'ordinateur
    // L'information qui nous permet de différencier un ordinateur d'un autre est son nom
    $sqlComputer = 'SELECT id FROM computer WHERE name=:name';
    $statementComputer = $connection->prepare($sqlComputer);
    $name = $computer->getName();
    $statementComputer->bindParam(':name', $name);
    $statementComputer->execute();

    // On récupère la première entrée, même si on peut en avoir plusieurs
    $result = $statementComputer->fetch(PDO::FETCH_ASSOC);

    // On ne prend que le champ id, seul qui nous intéresse pour notre table de liaison
    $idComputer = $result['id'];

    $sqlDevice = 'SELECT id FROM device WHERE name=:name';
    $statementDevice = $connection->prepare($sqlDevice);

    $sqlLink = 'INSERT INTO computer_has_device (id_computer, id_device) VALUES (:id_computer, :id_device)';
    $statementLink = $connection->prepare($sqlLink);

    // On parcourt tous les périphériques enregistrés dans notre objet Computer, on les récupère en base, pour en obtenir le champ id, puis on insère le lien entre l'ordinateur et le périphérique
    /** @var AbstractDevice $device */
    foreach ($computer->getDevices() as $device) {
        $nameDevice = $device->getName();
        $statementDevice->bindParam(':name', $nameDevice);
        $statementDevice->execute();

        $result = $statementDevice->fetch(PDO::FETCH_ASSOC);

        $idDevice = $result['id'];

        // Insérer le lien entre cet ordinateur et ses périphériques
        $statementLink->bindParam(':id_computer', $idComputer, PDO::PARAM_INT);
        $statementLink->bindParam(':id_device', $idDevice, PDO::PARAM_INT);
        $isDone = $statementLink->execute();

        if (!$isDone) {
            throw new Exception('Erreur lors de la requête : '.$statementLink->errorInfo()[2]);
        }
    }

    // Récupération des périphériques de l'ordinateur dans la base
    $sqlComponent = 'SELECT id FROM component WHERE name=:name';
    $statementComponent = $connection->prepare($sqlComponent);

    $sqlLink = 'INSERT INTO computer_has_component (id_computer, id_component) VALUES (:id_computer, :id_component)';
    $statementLink = $connection->prepare($sqlLink);

    // On parcourt tous les composants enregistrés dans notre objet Computer, on les récupère en base, pour en obtenir le champ id, puis on insère le lien entre l'ordinateur et le composant
    /** @var AbstractComponent $component */
    foreach ($computer->getComponents() as $component) {
        $nameComponent = $component->getName();
        $statementComponent->bindParam(':name', $nameComponent);
        $statementComponent->execute();

        $result = $statementComponent->fetch(PDO::FETCH_ASSOC);

        $idComponent = $result['id'];

        // Insérer le lien entre cet ordinateur et ses composants
        $statementLink->bindParam(':id_computer', $idComputer, PDO::PARAM_INT);
        $statementLink->bindParam(':id_component', $idComponent, PDO::PARAM_INT);
        $isDone = $statementLink->execute();

        if (!$isDone) {
            throw new Exception('Erreur lors de la requête : '.$statementLink->errorInfo()[2]);
        }
    }
}