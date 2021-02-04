<?php

include "includes/connect.php";
include "includes/autoload.php";

use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;

//$sql = "SELECT * FROM computer";
//$statement = $connection->query($sql);
//$results = $statement->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM computer";
$statement = $connection->prepare($sql);
$isDone = $statement->execute();
if (!$isDone) {
    throw new Exception('Erreur');
}
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <tr>
        <th>Nom</th>
        <th>Type</th>
    </tr>
<?php
foreach ($results as $result) {
    switch ($result['type']) {
        case Desktop::class:
            $ordinateur = new Desktop;
            break;
        case Laptop::class:
            $ordinateur = new Laptop;
            break;
        case Tablet::class:
            $ordinateur = new Tablet;
            break;
    }
    $ordinateur->setName($result['name']);
    $ordinateur->setType($result['type']); ?>
            <tr>
                <td><?php echo $ordinateur->getName(); ?></td>
                <td><?php echo $ordinateur->getType(); ?></td>
            </tr>
            <?php
}?>
</table>



