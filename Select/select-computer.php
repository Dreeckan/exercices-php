<?php

use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;

require_once '../includes/autoload.php';
require_once '../includes/connect.php';

$statement = $connection->prepare("SELECT * FROM computer");
$isDone = $statement->execute();
if (!$isDone) {
    throw new Exception('Erreur');
}

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <tr>
        <th>Id_Computer</th>
        <th>Name</th> 
        <th>Type</th>
    </tr>

<?php

foreach ($results as $result) {
    switch ($result['type']) {
        case Desktop::class:
            $computer = new Desktop();
            break;
        case Laptop::class:
            $computer = new Laptop();
            break;
        case Tablet::class:
            $computer = new Tablet();
            break;
    }
    $computer->setId($result['Id_Computer'])->setName($result['name'])->setType($result['type']); ?>
    
    <tr>
        <td><?= $computer->getId(); ?></td>
        <td><?= $computer->getName(); ?></td>
        <td><?= $computer->getType(); ?></td>
    </tr>

<?php
}

?>
</table>