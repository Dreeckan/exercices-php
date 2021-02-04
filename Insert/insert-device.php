<?php

require_once "../includes/connect.php";
require_once "../Create/create-device.php";

$devices = [
    $keyboard,
    $mouse,
    $speaker
];



$sql = "INSERT INTO device(name, brand) VALUES (:name, :brand)";
$stmt = $connection->prepare($sql);

foreach ($devices as $device) {

    /*********************** Requete insert dans table device ****************/
    $name = $device->getName();
    $brand = $device->getBrand();

    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
    
    $isDone = $stmt->execute();
    if (!$isDone) {
        throw new Exception("Erreur lors de l'insertion du device " . $device->getName());
    }

    /*************************************************************************/


    /*********************** Requete insert dans table keyboard/mouse/speaker ****************/

    /****Définition des paramètres de la requête ****/

    // on enregistre dans $type le nom de la classe sans le chemin complet
    $path = explode('\\', get_class($device));
    $type = array_pop($path);

    // on récupère l'id du dernier élément inséré ce qui nous servira à l'indiquer dans la requête suivante
    $idDevice = $connection->lastInsertId();

    // récup les propriétés et leurs valeurs sous forme de tableau assoc
    $propertiesDevice = $device->getObjectVars();

    // on recup le nom de la 1ere key du tableau, ce qui correspond à la propriété supp
    $characteristicSup = array_key_first($propertiesDevice);

    /****/

    $sqlDevice = "INSERT INTO " . $type . "(Id_Device," . $characteristicSup . ") VALUES (:Id_Device, :" . $characteristicSup . ")";
    $stmtDevice = $connection->prepare($sqlDevice);

    $stmtDevice->bindParam(':Id_Device', $idDevice, PDO::PARAM_STR);
    $stmtDevice->bindParam(":$characteristicSup", $propertiesDevice[$characteristicSup], PDO::PARAM_STR);
    
    $isDone = $stmtDevice->execute();
    if (!$isDone) {
        var_dump($stmtDevice->errorInfo());
        throw new Exception('Erreur lors de la requête : '.$stmtDevice->errorInfo()[2]);
    }

    /*******************************************************************************/
}

/*
    Pour aller chercher le nom de la caractéristique supp :
    Méthode longue mais qui marche si la propriété de la caractéristique supplémentaire n'est pas la 1ere du tableau

    if (
        key($propertiesDevice) != 'name' &&
        key($propertiesDevice) != 'brand' &&
        key($propertiesDevice) != 'compatibility' &&
        key($propertiesDevice) != 'id' &&
        key($propertiesDevice) != 'type'

    ) {
        $characteristicSup = key($propertiesDevice);
    }
    */
