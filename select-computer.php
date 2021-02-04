<?php

use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;

include "includes/autoload.php";

include 'includes/connect.php';



$sql = "SELECT name,type
FROM computer";


$results = $connection->query($sql);
$datas = $results->fetchAll(PDO::FETCH_ASSOC);


foreach ($datas as $data) {
    if ($data['type'] == "Desktop") {
        $computer = new Desktop();
    } elseif ($data['type'] == "Laptop") {
        $computer = new Laptop();
    } elseif ($data['type'] == "Tablet") {
        $computer = new Tablet();
    }
    $computer->setName($data['name']);
    var_dump($computer);

    echo ' <tr>
                <td> '.$computer->getName().' </td>
            </tr>';
}
