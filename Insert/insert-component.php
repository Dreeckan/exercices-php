<?php

require_once "../includes/connect.php";
require_once "../Create/create-component.php";

$components = [
    $cpu,
    $graphicCard,
    $motherBoard,
    $ram
];



$sql = "INSERT INTO component(name, brand) VALUES (:name, :brand)";
$stmt = $connection->prepare($sql);

foreach ($components as $component) {

    /*********************** Requete insert dans table component ****************/
    $name = $component->getName();
    $brand = $component->getBrand();

    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
    
    $isDone = $stmt->execute();
    if (!$isDone) {
        throw new Exception("Erreur lors de l'insertion du component " . $component->getName());
    }

    /*************************************************************************/


    /*********************** Requete insert dans table cpu/ram/... ****************/

    /****Définition des paramètres de la requête ****/

    // on enregistre dans $type le nom de la classe sans le chemin complet
    $path = explode('\\', get_class($component));
    $type = array_pop($path);

    // on récupère l'id du dernier élément inséré ce qui nous servira à l'indiquer dans la requête suivante
    $idComponent = $connection->lastInsertId();

    // récup les propriétés et leurs valeurs sous forme de tableau assoc
    $propertiesComponent = $component->getObjectVars();

    // on recup le nom de la 1ere key du tableau, ce qui correspond à la propriété supp
    $characteristicSup = array_key_first($propertiesComponent);

    /****/

    $sqlComponent = "INSERT INTO " . $type . "(Id_Component," . $characteristicSup . ") VALUES (:Id_Component, :" . $characteristicSup . ")";
    $stmtComponent = $connection->prepare($sqlComponent);

    $stmtComponent->bindParam(':Id_Component', $idComponent, PDO::PARAM_STR);
    $stmtComponent->bindParam(":$characteristicSup", $propertiesComponent[$characteristicSup], PDO::PARAM_STR);
    
    $isDone = $stmtComponent->execute();
    if (!$isDone) {
        var_dump($stmtComponent->errorInfo());
        throw new Exception('Erreur lors de la requête : '.$stmtComponent->errorInfo()[2]);
    }

    /*******************************************************************************/
}

/*
    Pour aller chercher le nom de la caractéristique supp :
    Méthode longue mais qui marche si la propriété de la caractéristique supplémentaire n'est pas la 1ere du tableau

    if (
        key($propertiesComponent) != 'name' &&
        key($propertiesComponent) != 'brand' &&
        key($propertiesComponent) != 'compatibility' &&
        key($propertiesComponent) != 'id' &&
        key($propertiesComponent) != 'type'

    ) {
        $characteristicSup = key($propertiesComponent);
    }
    */
