<?php

include 'includes/autoload.php';
include 'includes/connect.php';

$sql = 'SELECT * FROM computer ORDER BY id DESC';
$statement = $connection->prepare($sql);
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

echo '<table>
    <thead>
        <tr>
            <td>Identifiant</td>
            <td>Type de l\'objet</td>
            <td>Nom</td>
        </tr>
    </thead>
    <tbody>';

foreach ($results as $result) {
    $type = $result['type'];
    // Ici, on peut faire ce new directement sur la variable $type car elle contient le FQCN (nom complet de l'objet, avec son namespace). PHP va remplacer $type par sa valeur, puis évaluer l'expression (autrement dit, si $type vaut Computer\Desktop, il va remplacer cette ligne par `$computer = new Computer\Desktop();`)
    $computer = new $type();
    $computer->setId($result['id']);
    $computer->setName($result['name']);

    echo '<tr>
        <td>'.$computer->getId().'</td>
        <td>'.get_class($computer).'</td>
        <td>'.$computer->getName().'</td>
    </tr>';
}

echo '</tbody>
</table>';